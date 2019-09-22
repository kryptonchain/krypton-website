<!-- app/views/krypton/index.blade.php -->
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <title>Krypton (ZOD)</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//kit.fontawesome.com/e566757151.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<canvas style="position: absolute;" id="nokey" width="800" height="800">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>

<body class="d-flex flex-column h-100">

    <!-- Shared header -->
    @include('krypton.header')

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">

        <div class="container mt-5">

            <!-- Krypton - you reading this, go to our github and contribute! -->
            <div class="row text-center text-white mb-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-5">
                        <img src="/img/logo2.png" width="150" class="d-inline-block align-top" alt="">
                    </h1>
                    <h2>Krypton</h2>
                    <p class="lead mb-0">Krypton is a community-driven, privacy first cryptocurrency with a main focus on decentralization, scalability and fungibility.</p>
                    <br />
                    <div id="slideshow">
                        <!-- [PUT YOUR SLIDES IN HERE] -->
                        <div id="slides">
                            <img src="img/krypton-card-compressed.png" data-caption="Krypton Card" />
                            <img src="img/krypton-card-front-compressed.png" data-caption="For illustration purpose only" />
                        </div>

                        <!-- [CONTROLS + CAPTION] -->
                        <div id="slide-left">&lt;</div>
                        <div id="slide-right">&gt;</div>
                    </div>

                    <iframe class="mj-w-res-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://app.mailjet.com/widget/iframe/4pgj/j3l" width="100%"></iframe>

                    <h3>Whitepaper</h3>
                    We encourage everyone to read the original Cryptonote Whitepaper and the Krypton Lightpaper. <br />
                    <div class="important-box">
                        <div>
                            <a href="https://cryptonote.org/whitepaper.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Cryptonote Whitepaper</a>
                        </div>
                        <div>
                            <a href="https://cryptonote.org/whitepaper.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Krypton Lightpaper</a>
                        </div>
                    </div>
                </div>
            </div><!-- End -->

            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Finexbox trading is open</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>1th September, 2019</span>
                            <p class="text-small mt-2 font-weight-light"><a href="https://www.finexbox.com/market/pair/ZOD-BTC.html" target="_blank">Finexbox</a> - ZOD/BTC trading pair is now open. Happy trading.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Find us on CoinGecko</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>29th August, 2019</span>
                            <p class="text-small mt-2 font-weight-light"><a href="https://www.coingecko.com/en/coins/krypton" target="_blank">CoinGecko</a> - price information, exchanges, trading volume.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Krypton GUI wallet v0.51 released + discord</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>22th August, 2019</span>
                            <p class="text-small mt-2 font-weight-light">New wallet release + (<a href="/wallet">community voting</a>). We looking for Discord admins!!!</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Bitcointalk announcement, 4chan, official launch</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>9:00PM UTC - 18th August, 2019</span>
                            <p class="text-small mt-2 font-weight-light">Officially launched and now open to public.(<a href="https://bitcointalk.org/index.php?topic=5176752.msg52199896" target="_blank">BCT announcement</a>). It's a community focused coin so every help, ideas or advice are welcome!</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Adjust minimum mixin values, remove dust</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>18 August, 2019</span>
                            <p class="text-small mt-2 font-weight-light">Reached block 5000, adjusted some parameters with a soft fork at block height 5000.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">GUI wallet + integrations</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>16 August, 2019</span>
                            <p class="text-small mt-2 font-weight-light">Check the code on github <a href="https://github.com/kryptonchain/krypton-wallet-gui/releases/latest">here</a>.</p>
                            <p class="text-small mt-2 font-weight-light">Download the latest Windows wallet <a href="https://github.com/kryptonchain/krypton-wallet-gui/releases/download/v0.51/Krypton-GUI-0.51.Windows.zip">here</a>.</p>
                            <p class="text-small mt-2 font-weight-light">Download the latest Linux/Ubuntu wallet <a href="https://github.com/kryptonchain/krypton-wallet-gui/releases/download/v0.51/Krypton-GUI-0.51.Ubuntu.tar.gz">here</a>.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Genesis block...</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>8th August 2019</span>
                            <p class="text-small mt-2 font-weight-light">The start of the journey 8th August 2019, genesis block created.</p>
                        </li>
                    </ul><!-- End -->

                </div>
            </div>
        </div>

    </main>

    <!-- Shared footer -->
    @include('krypton.footer')
</body>

</html>