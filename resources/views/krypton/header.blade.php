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
                    <a class="nav-link" href="{{ route('krypton.exchanges') }}">Exchanges</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('krypton.community') }}">
                        Community
                        <i class="fab fa-telegram-plane" style="color: #0088CC;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://explorer.kryptonchain.org">Block Explorer</a>
                </li>
            </ul>

            <form class="form-inline mt-2 mt-md-0" method="GET" action="https://explorer.kryptonchain.org">
                <input class="form-control mr-sm-2" name="hash" type="text" placeholder="search tx (hash)" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>