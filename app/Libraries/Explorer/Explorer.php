<?php

namespace App\Libraries\Explorer;

class Explorer
{

    public function __construct()
    {
        $this->host = "http://public.kryptonchain.org";
        $this->port = "12888";
        $this->apiUrl = $this->host . ":" . $this->port;
        $this->totalSupply = "88 000 000";
        $this->decimals = "6";
        $this->symbol = "ZOD";
    }

    public function build_post_context($postdata)
    {
        return stream_context_create(
            array(
                'http' =>
                array(
                    'method' => 'POST',
                    'header' => 'content-type: application/json',
                    'content' => $postdata,
                    'timeout' => .25
                )
            )
        );
    }

    public function build_rpc_body($method, $params)
    {
        return '{"jsonrpc":"2.0","id":"blockexplorer","method":"' . $method . '","params":' . $params . '}';
    }

    public function fetch_rpc($api, $method, $params)
    {
        $url = $api . '/json_rpc';
        $rendered_rpc = $this->build_rpc_body($method, $params);
        $context = $this->build_post_context($rendered_rpc);
        $response = file_get_contents($url, false, $context);
        return json_decode($response, true);
    }

    public function fetch_getinfo($api)
    {
        $_url = $api . '/getinfo';
        $response = file_get_contents($_url);
        return json_decode($response, true);
    }

    public function _getSupply()
    {
        $hashData = $this->fetch_rpc($this->apiUrl, 'getlastblockheader', '""');
        $hash = $hashData['result']['block_header']['hash'];
        $blockData = $this->fetch_rpc($this->apiUrl, 'f_block_json', '{"hash":"' . $hash . '"}');
        $supplyRaw = $blockData['result']['block']['alreadyGeneratedCoins'];

        return number_format($supplyRaw / 1000000, $this->decimals, '.', '') . " " . $this->symbol;
    }

    public function _getTotalSupply()
    {
        return $this->totalSupply . " " . $this->symbol;
    }
}
