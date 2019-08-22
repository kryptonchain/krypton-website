<!-- app/views/krypton/index.blade.php -->
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Krypton (ZOD)</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e566757151.js"></script>

    <style>
        .btn-outline-success {
            color: #d4cb6f;
            border-color: #d4cb6f;
        }

        .btn-outline-success:hover {
            background-color: #d4cb6f;
            border-color: #d4cb6f;
        }

        .btn-outline-success:focus {
            background-color: #d4cb6f;
            border-color: #d4cb6f;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        main>.container {
            padding: 60px 15px 0;
        }

        .footer {
            background-color: #f5f5f5;
        }

        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }

        code {
            font-size: 80%;
        }

        /* Timeline holder */
        ul.timeline {
            list-style-type: none;
            position: relative;
            padding-left: 1.5rem;
        }

        /* Timeline vertical line */
        ul.timeline:before {
            content: ' ';
            background: #fff;
            display: inline-block;
            position: absolute;
            left: 16px;
            width: 4px;
            height: 100%;
            z-index: 400;
            border-radius: 1rem;
        }

        li.timeline-item {
            margin: 20px 0;
        }

        /* Timeline item arrow */
        .timeline-arrow {
            border-top: 0.5rem solid transparent;
            border-right: 0.5rem solid #fff;
            border-bottom: 0.5rem solid transparent;
            display: block;
            position: absolute;
            left: 2rem;
        }

        /* Timeline item circle marker */
        li.timeline-item::before {
            content: ' ';
            background: #ddd;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #fff;
            left: 11px;
            width: 14px;
            height: 14px;
            z-index: 400;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        body {
            background: #E8CBC0;
            background: -webkit-linear-gradient(to right, #E8CBC0, #636FA4);
            background: linear-gradient(to right, #E8CBC0, #636FA4);
            min-height: 100vh;
        }

        .text-gray {
            color: #999;
        }

        iframe {
            overflow: hidden;
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" width="200" class="d-inline-block align-top" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('krypton.wallet') }}">Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('krypton.mining') }}">Mining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://explorer.kryptonchain.org">Explorer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://t.me/kryptonchain">
                            Community
                            <i class="fab fa-telegram-plane" style="color: #0088CC;"></i>
                        </a>
                    </li>
                </ul>

                <form class="form-inline mt-2 mt-md-0" method="GET" action="https://explorer.kryptonchain.org">
                    <input class="form-control mr-sm-2" name="hash" type="text" placeholder="search tx (hash)" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">

        <div class="container mt-5">

            <!-- For demo purpose -->
            <div class="row text-center text-white mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2>Get Krypton Wallet</h2>
                    <p class="lead mb-0">Krypton is a community-driven, privacy first cryptocurrency with a main focus on decentralization, scalability and fungibility.</p>

                    <ul class="timeline">
                        <li class="bg-white rounded ml-3 p-4 shadow">
                            <p class="text-gray">Check the code on github
                                <a href="https://github.com/kryptonchain/krypton-wallet-gui/releases/latest">here</a>.
                            </p>
                            <p class="text-gray">Download the latest Windows wallet
                                <a href="https://github.com/kryptonchain/krypton-wallet-gui/releases/download/v0.51/Krypton-GUI-0.51.Windows.zip">here</a>.
                            </p>
                            <p class="text-gray">Download the latest Linux/Ubuntu wallet
                                <a href="https://github.com/kryptonchain/krypton-wallet-gui/releases/download/v0.51/Krypton-GUI-0.51.Ubuntu.tar.gz">here</a>.
                            </p>
                        </li>
                    </ul>

                    <div class="timeline">
                        <iframe id="vote" width='480' height='600' src='http://www.tricider.com/embed/?show=2nf8SMDnU07' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' scrolling='no'></iframe>
                    </div>
                </div>


            </div><!-- End -->

            <div class="row">
                <div class="col-lg-7 mx-auto">

                </div>
            </div>
        </div>

    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">NO IEO, NO ICO, NO PREMINE, NO AIRDROP! Find us on <a href="https://github.com/kryptonchain" target="_blank"><i class="fab fa-github" style="color: #0088CC;"></i></a>.</span>
        </div>
    </footer>
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>