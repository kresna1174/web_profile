<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('properties') !!}/images/logo.png">
    <link rel="stylesheet" href="{!! asset('properties') !!}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! asset('properties') !!}/css/style.css">
    <link rel="stylesheet" href="{!! asset('fontawesome') !!}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{!! asset('fontawesome') !!}/css/all.min.css">
    <title><?= $title ?? 'Web Profile' ?></title>
</head>
<body>
<nav>
    <div class="brand">
        <img src="{!! asset('properties') !!}/images/logo.png" width="60px" height="60px">
    </div>
    <ul>
        <li><a href="">menu</a></li>
        <li><a href="">menu</a></li>
        <li><a href="<?= route('FAQ') ?>">FAQ</a></li>
    </ul>
    <div class="params" style="position: absolute; right: 20vh;">
        <a href="{!! route('login') !!}" style="color: #000; text-decoration: none; font-weight: bold;">Login</a>
        <span>|</span>
        <a href="{!! route('register') !!}"  style="color: #000; text-decoration: none; font-weight: bold;">Sign in</a>
    </div>
    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">@yield('title')</h1>
                    <p class="lead">@yield('description')</p>
                    @yield('button_jumbotron')
                </div>
                <div class="col-md-6">
                @yield('images_jumbotron')
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <img src="{!! asset('properties') !!}/images/logo.png" width="100vh" height="100vh" alt="">
                </div>
                <div class="col-md-4 mt-5">
                    <b class="text-uppercase">alamat</b>
                    <br><br>
                    <p>Desa Pinggirsari Kecamatan Ngantru Kabupaten Tulungagung</p>
                    <br><br>
                    <a href=""><b style="color: #fff; text-decoration: none;">FAQ</b></a>
                </div>
                <div class="col-md-4 mt-5 text-center">
                    <b class="text-uppercase">contack haltec</b>
                    <div class="contack mt-3" style="letter-spacing: 30px;">
                        <i class="fas fa-phone-square-alt" style="cursor: pointer; font-size: 30px"></i>
                        <i class="fab fa-instagram" style="cursor: pointer; font-size: 30px"></i>
                        <i class="far fa-envelope" style="cursor: pointer; font-size: 30px"></i>
                    </div>
                    <hr color="#fff" width="90%">
                    <img src="{!! asset('properties') !!}/images/header_footer/bendera.png" alt="">
                        <b style="cursor: pointer;">Bahasa Indonesia <i class="fas fa-sort-down"></i></b>
                    <hr color="#fff" width="90%">
                </div>
            </div>
        </div>
    </div>
    
    <b style="background-color: #fff; color:#000;">copyright<i class="far fa-copyright"></i>2020 Haltec</b> 

    <script src="{!! asset('properties') !!}/js/jquery.min.js"></script>
    <script src="{!! asset('properties') !!}/js/jquery.min.js"></script>
    <script src="{!! asset('fontawesome') !!}/js/fontawesome.min.js"></script>
    <script src="{!! asset('fontawesome') !!}/js/all.min.js"></script>
    <script>
        // const menuIcon = document.querySelector('.menu-icon');
        //     function toggleMenuIcon() {
        //     menuIcon.classList.toggle('active')
        //     }
        // menuIcon.addEventListener('click', toggleMenuIcon);
        // function dropdown(){
            
        // }
        const menuToggle = document.querySelector('.menu-toggle input');
        const nav = document.querySelector('nav ul');

        menuToggle.addEventListener('click', function(){
            nav.classList.toggle('slide');
        });
    </script>
    @yield('js')
</body>
</html>