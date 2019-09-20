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
                    <h2>Mining</h2>
                    <p>
                        <ul class="timeline">
                            <li class="bg-white rounded ml-3 p-4 shadow">
                                <p class="text-gray">Block Time: <b>60 seconds</b></p>
                                <p class="text-gray">Block Reward: <b>20 ZOD</b><br />(decreasing with every block, no halving)</p>
                                <p class="text-gray">Max supply: <b>88 millions</b></p>
                                <p class="text-gray">PoW algorithm: <b>CryptoNight Lite (v1)</b></p>
                                <p class="text-gray">Krypton official ticker: <b>ZOD</b></p>
                                <p class="text-gray">New genesis block on 8th August 2019</p>
                                <p class="text-gray">Diff retarget with every block</p>
                            </li>
                        </ul>

                        <ul class="timeline">
                            <li class="bg-white rounded ml-3 p-4 shadow">
                                <p class="text-gray lead mb-0">Visit our pools and start mining:
                                    <a href="https://explorer.kryptonchain.org#pools" target="_blank">Krypton pools</a>
                                </p>

                                <p>
                                    <iframe src="https://www.cryptunit.com/widgets/2.php?coin=135&small=false&transparent=false&black=true&hr=10000" height="160" width="100%" frameBorder="0" style="overflow:hidden;" scrolling="no"></iframe>
                                </p>
                            </li>
                        </ul>
                    </p>




                </div>
            </div><!-- End -->

        </div>

    </main>

    <!-- Shared footer -->
    @include('krypton.footer')
</body>

</html>