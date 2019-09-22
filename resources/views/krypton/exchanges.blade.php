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
    <script src="https://kit.fontawesome.com/e566757151.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="d-flex flex-column h-100">

    <!-- Shared header -->
    @include('krypton.header');

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">

        <div class="container mt-5">

            <!-- For demo purpose -->
            <div class="row text-center text-white mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2>List of known exchanges to trade Krypton</h2>
                    <p class="lead mb-0">Krypton is a community-driven, privacy first cryptocurrency with a main focus on decentralization, scalability and fungibility.</p>

                    <div class="important-box">
                        <div>
                            <a href="https://www.finexbox.com/market/pair/ZOD-BTC.html" target="_blank"><i class="fa fa-money"></i> Finexbox (ZOD/BTC pair)</a>
                        </div>
                        <div>
                            <a href="https://international.indoex.io" target="_blank"><i class="fa fa-money"></i> Indoex (9 trading pairs)</a>
                        </div>

                        <script type="text/javascript" src="https://unpkg.com/@coinpaprika/widget-currency/dist/widget.min.js"></script>
                        <div class="coinpaprika-currency-widget cp-widget__night-mode" data-primary-currency="usd" data-currency="zod-krypton" data-modules='["market_details","chart"]' data-update-active="false"></div>
                    </div>


                </div>


            </div><!-- End -->

        </div>

    </main>

    <!-- Shared footer -->
    @include('krypton.footer')
</body>

</html>