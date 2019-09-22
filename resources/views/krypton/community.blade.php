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
                    <h2>Reach out to us</h2>
                    <p class="lead mb-0"> We welcome everyone to our community.
                        <br /> From developers looking to contribute to the code, tech enthusiasts who see the potential of this project or anyone who is looking to take first steps into crypto. </p>
                    <div class="important-box">
                        <div>
                            <a href="https://t.me/kryptonchain" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a>
                        </div>
                        <div>
                            <a href="https://twitter.com/kryptonchain" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                        </div>
                        <div>
                            <a href="https://discord.gg/PRFF2WB" target="_blank"><i class="fab fa-discord"></i> Discord</a>
                        </div>
                    </div>
                    <p>
                        <a class="twitter-timeline" href="https://twitter.com/kryptonchain?ref_src=twsrc%5Etfw">Tweets by kryptonchain</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </p>
                </div>


            </div><!-- End -->

        </div>

    </main>

    <!-- Shared footer -->
    @include('krypton.footer')
</body>

</html>