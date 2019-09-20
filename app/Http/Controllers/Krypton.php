<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Explorer\Explorer as Explorer;

class Krypton extends Controller
{


    public function index()
    {

        //$explorer = new Explorer();

        return view('krypton.index')->with(
            [
                'current_supply' => '',
                'total_supply' => ''
            ]
        );
    }

    public function wallet()
    {
        return view('krypton.wallet')->with(
            []
        );
    }

    public function mining()
    {
        return view('krypton.mining')->with(
            []
        );
    }

    public function exchanges()
    {
        return view('krypton.exchanges')->with(
            []
        );
    }

    public function community()
    {
        return view('krypton.community')->with(
            []
        );
    }
}
