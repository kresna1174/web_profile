@extends('layout.main')
@section('title')
    layanan branding solution
@endsection
@section('description')
    buat brand anda lebih memukau calon konsumen dengan desain yang aktraktif dan strategi marketing yang komperhensif
@endsection
@section('button_jumbotron')
    <button class="btn btn-outline-warning rounded-pill" >Learn more</button>
@endsection
@section('images_jumbotron')
    <img src="{!! asset('properties') !!}/images/branding/images/gambar 1.png" alt="">
@endsection
@section('content')
<img src="{!! asset('properties') !!}/images/branding/images/samping.png" class="position-absolute" style="margin-left: -100px;" alt="">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="{!! asset('properties') !!}/images/branding/images/gambar 2.png" alt="">
        </div>
        <div class="col-lg-6">
            <h4 class="text-uppercase font-weight-bold text-warning">jasa branding solution terbaik</h4>
            <p>Menggunakan jasa branding dan marketing adalah hal yang penting untuk dilakukan. Terlebih bagi para StartUp atau perusahaan yang baru mulai berkembang.
Oleh karena itu kami Memberikan Pelayanan yang memuaskan dalam Pembuatan Desain logo, desain banner, desain poster, desain Seragam sehingga mampu memberikan kemudahan kepada para Pebisnis untuk memajukan perusahaannya</p>
        </div>
    </div>
    <div class="card col-lg-12 border-0 bg-transparent">
        <div class="card-body  bg-dark text-center text-light text-uppercase font-weight-bold rounded">
            This is some text within a card body.
        </div>
    </div>
    
    <div class="card col-lg-12 mt-5 border-0 shadow">
        <div class="card-body bg-custom text-center text-light rounded">
            <div class="row">
                <div class="col-md-6">
                    <img src="{!! asset('properties') !!}/images/branding/images/logo.png" class="img-fluid bg-transparent" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-center text-uppercase font-weight-bold text-warning">
                    <div class="ford">
                        <b>desain logo</b>
                        <p>jasa pembuatan logo untuk berbagai bisnis</p>
                        <button type="button" class="btn btn-outline-warning rounded">see more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card col-lg-12 mt-5 border-0 shadow">
        <div class="card-body bg-custom text-center text-light rounded">
            <div class="row">
                <div class="col-md-6">
                    <img src="{!! asset('properties') !!}/images/branding/images/banner.png" class="img-fluid bg-transparent" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-center text-uppercase font-weight-bold text-warning">
                    <div class="ford">
                        <b>desain banner</b>
                        <p>layanan desain banner untuk berbagai kebutuhan</p>
                        <button type="button" class="btn btn-outline-warning rounded">see more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card col-lg-12 mt-5 border-0 shadow">
        <div class="card-body bg-custom text-center text-light rounded">
            <div class="row">
                <div class="col-md-6">
                    <img src="{!! asset('properties') !!}/images/branding/images/poster.png" class="img-fluid bg-transparent" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-center text-uppercase font-weight-bold text-warning">
                    <div class="ford">
                        <b>desain poster</b>
                        <p>layanan desain poster untuk berbagai kebutuhan</p>
                        <button type="button" class="btn btn-outline-warning rounded">see more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card col-lg-12 mt-5 border-0 shadow">
        <div class="card-body bg-custom text-center text-light rounded">
            <div class="row">
                <div class="col-md-6">
                    <img src="{!! asset('properties') !!}/images/branding/images/seragam.png" class="img-fluid bg-transparent" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-center text-uppercase font-weight-bold text-warning">
                    <div class="ford">
                        <b>desain seragam</b>
                        <p>layanan desain seragam untuk berbagai kebutuhan</p>
                        <button type="button" class="btn btn-outline-warning rounded">see more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-lg-12 mt-5 mb-5 border-0 bg-transparent">
        <div class="card-body bg-dark text-center text-light text-uppercase font-weight-bold rounded">
            beberapa desain yang telah kami buat
        </div>
    </div>
</div>

<div class="card container bg-transparent border-0">
    <div class="slide_show text-center bg-primary rounded pb-5 pt-5">
        <div class="container">
            <div class="pictures image">
                <img src="{!! asset('properties') !!}/images/beranda/percobaan 1.jpg" width="50%" height="50%" alt="">
            </div>
            <div class="pictures">
                    <img src="{!! asset('properties') !!}/images/beranda/ke 2 poster remake.jpg" width="50%" height="50%" alt="">
                </div>
                <div class="pictures">
                    <img src="{!! asset('properties') !!}/images/beranda/poster ke 3.jpg" width="50%" height="50%" alt="">
                </div>
                    <span class="prev" onclick="plusSlides(-1)"></span>
                    <span class="next" onclick="plusSlides(1)"></span>
            </div>
            <div class="button">
                <span class="dot" onclick="slide(1)"></span>
                <span class="dot" onclick="slide(2)"></span>
                <span class="dot" onclick="slide(3)"></span>
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