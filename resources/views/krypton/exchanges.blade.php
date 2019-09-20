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

                    Exchanges
                </div>


            </div><!-- End -->

        </div>

    </main>

    <!-- Shared footer -->
    @include('krypton.footer')
</body>

</html>