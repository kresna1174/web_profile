@extends('layout.main')
@section('title')
<img src="{!! asset('properties') !!}/images/beranda_pos/PICTURE 2.png" class="position-absolute" style="left: -18vh; top:-18vh" alt=""> 
<div class="text-center">
    POS <br> (Point Of Sales)
</div>
@endsection
@section('description')
Point of Wales atau POS merupakan sistem yang mendukung transaksi penjualan anda
@endsection
@section('button_jumbotron')
<button class="btn btn-outline-warning rounded-pill" >Get Started</button>
@endsection
@section('images_jumbotron')
<img src="{!! asset('properties') !!}/images/beranda_pos/PICTURE 1.png" class="position-absolute ml-5" alt="">
<div class="card bg-transparent border-0 ml-5 pl-5">
    <img src="{!! asset('properties') !!}/images/beranda_pos/PICTURE 3.png" alt="">
</div>
@endsection
@section('content')
    <style>
        .jumbotron{
            background-color: #eee !important;
        }
    
        .lead{
            color: #000 !important;
        }
        .slide_show .button .dot.active:nth-child(1),
        .slide_show .button .dot:hover:nth-child(1) {
            background-color: #dc3545;
        }
        .slide_show .button .dot.active:nth-child(2),
        .slide_show .button .dot:hover:nth-child(2) {
            background-color: #ffc107;
        }
        .slide_show .button .dot.active:nth-child(3),
        .slide_show .button .dot:hover:nth-child(3) {
            background-color: #28a745;
        }
    </style>
    <div class="card container bg-transparent border-0">
    <div class="slide_show text-center bg-primary rounded pb-5 pt-5">
        <div class="button">
            <span class="dot" onclick="slide(1)"></span>
            <span class="dot" onclick="slide(2)"></span>
            <span class="dot" onclick="slide(3)"></span>
        </div>
        <div class="container">
            <div class="pictures image">
                <img src="{!! asset('properties') !!}/images/beranda_pos/slideshow 1.png" width="50%" height="50%" alt="">
            </div>
            <div class="pictures">
                    <img src="{!! asset('properties') !!}/images/beranda_pos/slideshow 3.png" width="50%" height="50%" alt="">
                </div>
                <div class="pictures">
                    <img src="{!! asset('properties') !!}/images/beranda_pos/slideshow 4.png" width="50%" height="50%" alt="">
                </div>
                    <span class="prev" onclick="plusSlides(-1)"></span>
                    <span class="next" onclick="plusSlides(1)"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <img src="{!! asset('properties') !!}/images/beranda_pos/PICTURE 4.png" class="position-absolute" alt="">
            <div class="card bg-transparent border-0">
                <img src="{!! asset('properties') !!}/images/beranda_pos/PICTURE 5.png"  alt="">
            </div>
        </div>
        <div class="col-lg-6 mt-5">
        <h4 class="font-weight-bold text-warning">Pengertion Poin Of Sales (POS)</h4>
            <p>Point of Wales atau POS merupakan sistem yang mendukung transaksi penjualan anda</p>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-title">
                <b class="card text-center bg-secondary text-light">Fitur</b>
                <div class="container text-center">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 1.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">produk</b>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 2.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">store</b>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 3.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">barcode</b>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 4.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">note</b>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 5.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">master</b>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 6.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">report</b>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 7.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">suplier</b>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 8.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">pay</b>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-transparent shadow rounded" >
                                <img src="{!! asset('properties') !!}/images/beranda_pos/(FITUR) ICON 9.png" alt="">
                                <b class="text-warning font-weight-bold text-uppercase">inventory</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5 border-0 text-center text-warning rounded-pill" style="box-shadow: -10px 8px 5px #777;">
            <h3>Keuntungan Point Of Sales (POS)</h3>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card bg-secondary pb-5" style="border-radius: 100px">
                    <h5 class="container text-warning ml-5 mt-5">Manajemen <br> Stok</h5>
                    <div class="row">
                        <div class="col-md-2">
                             
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                            Pedagang dapat meninjau tingkat stok mereka secara keseluruhan dalam sekejap dan membuat keputusan pembelian yang sesuai akurat
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <img src="{!! asset('properties') !!}/images/beranda_pos/(KEUNTUNGAN POS)  FIGURE 11.png" class="position-relative" style="margin-left: 70vh;" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{!! asset('properties') !!}/images/beranda_pos/(KEUNTUNGAN POS) PIC 1.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{!! asset('properties') !!}/images/beranda_pos/(KEUNTUNGAN POS) PIC 2.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="card bg-secondary pb-5" style="border-radius: 100px">
                    <h5 class="container text-warning ml-5 mt-5">Mengurangi Tingkat <br> Kesalahan</h5>
                    <div class="row">
                        <div class="col-md-2">
                             
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                            Berguna untuk mengurangi beberapa kesalahan yang terjadi seperti penginputan data dan hal lainnya yang berkaitan dengan transaksi dan pelaporannya
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <img src="{!! asset('properties') !!}/images/beranda_pos/(KEUNTUNGAN POS) FIGURE 2.png" class="position-relative" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-secondary pb-5" style="border-radius: 100px">
                    <h5 class="container text-warning ml-5 mt-5">Meningkatkan <br> Efesiensi</h5>
                    <div class="row">
                        <div class="col-md-2">
                             
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                            Dengan menggunakan aplikasi POS kita bisa mendapatkan efisiensi waktu waktu yang lebih tinggi, karena dengan proses user hanya tinggal menggunakan aplikasi yang serba otomatis, mudah dan cepat
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <img src="{!! asset('properties') !!}/images/beranda_pos/(KEUNTUNGAN POS) FIGURE 3.png" class="position-relative" style="margin-left: 70vh;" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{!! asset('properties') !!}/images/beranda_pos/(KEUNTUNGAN POS) PIC 3.png" alt="">
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function slide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("pictures");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
@endsection