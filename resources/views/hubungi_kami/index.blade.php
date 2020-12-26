@extends('layout.main')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <div class="bg-light">
        <img src="{!! asset('properties') !!}/images/hubungi_kami/atas-kiri.png" class="position-absolute">
        <div class="text-center p-5 position-absolute" style="margin-left:10rem; margin-top:15%;">
            <h1 class="font-weight-bold" style="color: rgb(255,160,122);">HUBUNGI KAMI</h1>
            <h3>
                kami siap membantu dan melayani
                <br>
                anda setiap saat
            </h3>
        </div>
        <div style="margin-left:60%;">
            <img src="{!! asset('properties') !!}/images/hubungi_kami/gambar1.png" class="position-absolute" style="right:0; top:130%;">
            <img src="{!! asset('properties') !!}/images/hubungi_kami/kanan.png" style="margin-top:6rem;">
        </div>
        <div class="card position-absolute" style="right:1rem; left:1rem; top:173%; border-radius:10px;">
            <div class="card" style="width:35%; border-radius:10px; background-color:rgb(234, 234, 250); padding-bottom:12%;">
                <h2 class="p-3 text-center" style="color: rgb(255,160,122);">CONTACT INFO</h2>
                <div class="mb-4 ml-5 mt-5">
                    <img src="{!! asset('properties') !!}/images/hubungi_kami/Whatsapp.png" style="width:50px;"><span class="h5 ml-4">0822-3406-0019</span>
                </div>
                <div class="mb-5 ml-5">
                    <img src="{!! asset('properties') !!}/images/hubungi_kami/E-mail.png" style="width:50px;"><span class="h5 ml-4">corp.haltec@gmail.com</span>
                </div>
                <div class="text-center mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3654134511403!2d111.9295582264595!3d-8.064159285659944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e36af27384c3%3A0x301e400b1bb8844!2sGRAHA%20ASRI%20UTOMO!5e0!3m2!1sid!2sid!4v1608700966683!5m2!1sid!2sid" width="300" height="300" frameborder="0" style="border-radius:20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div>
                    <img src="{!! asset('properties') !!}/images/hubungi_kami/GPS.png" class="mr-4" style="width:30px; margin-left:3.5rem;">
                    <p class="position-absolute" style="left:7rem; bottom:5rem;">Perumahan Graha Asri Utomo No
                        <br>
                        C17, Ringinsari, Ringinpitu,
                        <br>
                        Kec. Kedungwaru, Kab. Tulungagung,
                        <br>
                        Jawa Timur 66229
                    </p>
                </div>
            </div>
            <form method="POST" action="{{url('hubungi_kami/mail')}}" class="form-group float-right position-absolute" style="width:50%; left:43%;">
                @csrf
                <div class="form-group">
                    <h2 class="pt-3" style="color: rgb(255,160,122);">CONTACT US FORM</h2>
                    <hr class="pl-3" style="height:8px; width:43%; background-color:rgb(128, 128, 255); border-radius:25px; margin-bottom:5rem;">
                    @if(session()->has('success'))
                        <div class="alert alert-success" id="mail_alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <input type="name" name="name" placeholder="&#xf2c0; &nbsp Nama Lengkap" class="form-control" style="border-radius:10px; font-family:Arial,  FontAwesome" required>
                    <input type="email" name="email" placeholder="&#xf003; &nbsp E-mail" class="form-control mt-5" style="border-radius:10px; font-family:Arial,  FontAwesome" required>
                    <input type="number" name="phone" placeholder="&#xf10b; &nbsp No.Telepon" class="form-control mt-5" style="border-radius:10px; font-family:Arial,  FontAwesome" required>
                    <textarea name="messages" id="pesan" placeholder="&#xf0e5; &nbsp Pesan" cols="30" rows="10" class="form-control mt-5" style="border-radius:10px; font-family:Arial,  FontAwesome" required></textarea>
                    <button type="submit" name="submit" class="btn btn-outline-warning mt-5 pl-5 pr-5" style="border-radius:25px;">Kirim</button>
                 </div>
            </form>
        </div>
        <img src="{!! asset('properties') !!}/images/hubungi_kami/kiri-bawah.png">
    </div>
    <script>
        setTimeout(function(){
            if ($('#mail_alert').length > 0) {
                $('#mail_alert').remove();
            }
        }, 7000)
    </script>
@endsection