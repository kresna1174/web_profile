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
    <!-- <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="sub-menu" style="display: none;">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </ul>
                <div class="nav-ham" onclick="dropdown()">
                <div class="menu-icon">
                    <span class="line-1 rounded-pill"></span>
                    <span class="line-2 rounded-pill"></span>
                    <span class="line-3 rounded-pill"></span>
                </div>
            </div>
            </div>
        </div>
    </nav>
</div> -->
<nav>
    <div class="brand">
        <img src="{!! asset('properties') !!}/images/logo.png" width="60px" height="60px">
    </div>
    <ul>
        <li><a href="">menu</a></li>
        <li><a href="">menu</a></li>
        <li><a href="">menu</a></li>
    </ul>
    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
<!-- <div class="jumbotron jumbotron-fluid">
    <div class="row">
        <div class="col-md-4 mt-5 pt-5">
            <div class="container ml-5">
              <h1 class="display-4">layanan branding solution</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
              <button type="button" class="btn btn-outline-warning rounded-pill">Warning</button>
            </div>
          </div>
          <div class="col-md-8">
              <img src="{!! asset('properties') !!}/images/beranda/jumbotron-img.png" alt="">
          </div>
        </div>
    </div> -->

    @yield('content')

    <div class="footer">
        <div class="row">
            <div class="col-md-2 pt-3">
                <img src="{!! asset('properties') !!}/images/logo.png" class="img-fluid pl-5" alt="">
            </div>
            <div class="col-md-5 text-center pt-3">
                <b>Alamat</b>&nbsp;
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, et!</p>
            </div>
            <div class="col-md-5 text-center pt-3">
                <b>Contack Haltec</b>&nbsp;
                <div class="contack mt-3" style="letter-spacing: 30px;">
                    <i class="fas fa-phone-square-alt" style="cursor: pointer; font-size: 30px"></i>
                    <i class="fab fa-instagram" style="cursor: pointer; font-size: 30px"></i>
                    <i class="far fa-envelope" style="cursor: pointer; font-size: 30px"></i>
                </div>
                <div class="indonesia mt-3">
                    <img src="{!! asset('properties') !!}/images/header_footer/bendera.png" alt="" class="img-fluid">
                    <b style="cursor: pointer;">Indonesia <i class="fas fa-sort-down"></i></b>
                </div>
            </div>
        </div>
    </div>
    <b>copyright<i class="far fa-copyright"></i>2020 Haltec</b> 

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