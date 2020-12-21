@extends('layout.main')
@section('content')
    <style>
        .content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        #qa-head:hover {
            background-color: rgb(106,90,205);
        }
        #qa-head {
            width: 65%; 
            border-radius: 25px;
            background-color: rgb(123,104,238);
            margin-top: 50px;
        }
        .qa {
            width:60%;
            border-radius:25px;
        }
        .qa:hover {
            background-color: #EEE;
        }
        .collapsible {
            cursor: pointer;
        }
        .collapsible:after {
            content: "\02C5";
            float: right;
        }

        .active:after {
            content: "\02C4";
        }
    </style>
        <div class="bg-light">
            <img src="{!! asset('properties') !!}/images/faq/kiri-pojok.png" class="position-absolute" style="width:160px;">
            <div class="text-center p-5 position-absolute" style="margin-left:15rem;">
                <h1 style="color:rgb(218,165,32);">FAQ
                    <br>
                    (Frequently Asked Question)
                </h1>
            </div>
            <div style="margin-left:76%;">
                <img src="{!! asset('properties') !!}/images/faq/gambar 1.png" class="position-absolute" style="width:250px;">
                <img src="{!! asset('properties') !!}/images/faq/kanan-pojok.png">
            </div>
            <div class="card bg-white text-center" style="padding-top:20px; padding-bottom:20px; border-radius:25px;">
                <h3>Beberapa pertanyaan yang sering di tanyakan kepada kami,
                    <br>
                    harap Anda baca terlebih dahulu
                </h3>
            </div>
            <img src="{!! asset('properties') !!}/images/faq/gambar 2.png" class="position-absolute" style="margin-top:10rem; margin-left:65%;">
            <img src="{!! asset('properties') !!}/images/faq/tengah-pojok-kanan.png" class="float-right">
            <h2 class="mt-5 mb-5" style="color:rgb(218,165,32);">Pertanyaan umum : </h2>
            <div class="card-body" id="qa-head" style="">
                <h2 class="card-title text-white mb-4 collapsible">Layanan apa saja yang di tawarkan Haltec ?</h2>
                <h4 class="card-text text-light content">Disini Haltec memberikan 3 layanan yaitu :
                    <br>    
                    1. Branding Solution
                    <br>
                    2. Software Development
                    <br>
                    3. IT Consultant
                    </h4>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Apa itu POS (Point Of Sales)?</h4>
                <h5 class="m-3 content">Point Of Sales (POS) adalah suatu sistem yang digunakan oleh berbagai macam usaha ritel untuk menyelesaikan transaksi jual beli.</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Apa manfaat mengunakan Point Of Sales?</h4>
                <h5 class="m-3 content">
                    - Meningkatkan kepercayaan
                    <br>
                    - Mengurangi tingkat kesalahan
                    <br>
                    - Meningkatkan efisiensi
                    <br>
                    - Manajemen stok
                    <br>
                    - Dapat memantau pekerjaan karyawan
                </h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Layanan apa saja yang di tawarkan Haltec?</h4>
                <h5 class="m-3 content">
                    - POS (Point Of Sales)
                    <br>
                    - Branding Solution
                    <br>
                    - Software Development
                    <br>
                    - IT Consultan
                </h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Kenapa sebelum melakukan pemesanan harus mendaftar menjajdi anggota terlebih dahulu?</h4>
                <h5 class="m-3 content">Haltec membutuhkan informasi pribadi yang anda masukkan saat mendaftar menjadi anggota seperti nomer telepon dan alamat email untuk melakukan komunikasi lebih lanjut.</h5>
            </div>
            <img src="{!! asset('properties') !!}/images/faq/wave-full.png" class="position-absolute" style="width:300px;">
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Apakah bisa menghubungi Haltec melalui email atau nomer telepon?</h4>
                <h5 class="m-3 content">
                    Iya, anda bisa menghubungi kami melalui :
                    <br>
                    <br>
                    email (corp.haltec@gmail.com) atau 
                    <br>
                    nomer teleppon (+6282234060019)</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Kenapa saya belom menerima produk saat sudah deadline?</h4>
                <h5 class="m-3 content">Produk yang tertunda biasanya akan di infokan sebelum deadline melalui email atau nomer telepon yang digunakan untuk mendaftar.</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Bagaimana saya mengetahui deadline baru untuk peoduk yang tertunda?</h4>
                <h5 class="m-3 content">Tanggal baru untuk deadline akan di infokan saat Haltec memberikan info bahwa pesanan anda mengalami penundaan.</h5>
            </div>
            <h2 class="mt-5 mb-5 position-relative" style="color:rgb(218,165,32);">Cara pemesanan : </h2>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Bagaimana cara memesan POS?</h4>
                <h5 class="m-3 content">
                    - Masuk ke menu POS
                    <br>
                    - Memilih lama waktu berlangganan di fitur berlangganan
                    <br>
                    - Klik simpan, jika belum menjadi anggota maka akan masuk ke halaman
                    regristasi
                    <br>
                    - Klik simpan, jika sudah menjadi anggota maka akan langsung ke fitur
                    Pembayaran
                    <br>
                    - Memilih cara pembayaran (via bank= bca, bri. via online= ovo, dana)
                    <br>
                    - Klik submit untuk mengirim pesanan
                    </h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Bagaimana cara memesan Branding Solution?</h4>
                <h5 class="m-3 content">
                    - Masuk menu service/layanan
                    <br>
                    - Pilh menu Branding Solution
                    <br>
                    - Mengisi formulir pemesanan prodak di fitur format pemesanan
                    <br>
                    - Klik simpan, jika belum menjadi anggota maka akan masuk ke halaman
                    regristasi
                    <br>
                    - Jika sudah menjadi anggota maka akan langsung ke fitur pembayaran
                    <br>
                    - Memilih cara pembayaran (via bank= bca, bri. via online= ovo, dana)
                    <br>
                    - Klik submit untuk mengirim pesanan
                </h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Bagaimana cara memesan Software Development</h4>
                <h5 class="m-3 content">
                    - Masuk menu service/layanan
                    <br>
                    - Pilh menu Software Development
                    <br>
                    - Mengisi formulir pemesanan prodak di fitur format pemesanan
                    <br>
                    - Klik simpan, jika belum menjadi anggota maka akan masuk ke halaman
                    regristasi
                    <br>
                    - Klik simpan, jika sudah menjadi anggota maka akan langsung ke fitur
                    Pembayaran
                    <br>
                    - Jika sudah menjadi anggota maka akan langsung ke fitur pembayaran
                    <br>
                    - Memilih cara pembayaran (via bank= bca, bri. via online= ovo, dana)
                    <br>
                    - Klik submit untuk mengirim pesanan
                </h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Bagaimana cara melakukan IT Consultan</h4>
                <h5 class="m-3 content">
                    - Masuk menu service/layanan
                    <br>
                    - Pilh menu IT Consultan
                    <br>
                    - Memilih kaetegori permasalahan di fitur kategori
                    <br>
                    - Saat sudah memilih kategori permasalahan akan masuk ke fitur buat janji
                    <br>               
                    - Klik simpan, jika belum menjadi anggota maka akan masuk ke halaman
                    regristasi
                    <br>
                    - Jika sudah menjadi anggota maka akan langsung ke fitur buat janji
                    <br>
                    - Mengisi formulir but janji seperi tanggal, jam,hari, temapat untuk melakukan
                    Janji
                    <br>
                    - Memilih cara pembayaran (via bank= bca, bri. via online= ovo, dana)
                    <br>
                    - Klik submit untuk mengirim pesanan
                </h5>
            </div>
            <img src="{!! asset('properties') !!}/images/faq/wave-full.png" class="position-relative float-right" style="width:300px; transform: scaleX(-1);">
            <h2 class="mt-5 mb-5" style="color:rgb(218,165,32);">Seputar Haltec : </h2>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Dimana alamat Haltec?</h4>
                <h5 class="m-3 content">Perumahan Graha Asri Utomo No C17, Ringinsari, Ringinpitu, Kec. Kedungwaru, Kabupaten Tulungagung, Jawa Timur 66229</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Apakah Haltec memilik sosial media?</h4>
                <h5 class="m-3 content">Iya, Haltec memiliki Instagram: <a href="https://www.instagram.com/halte_creative/" target="_blank">@haltecreative</a></h5>
            </div>
            <h2 class="mt-5 mb-5" style="color:rgb(218,165,32);">Tentang produk : </h2>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Berapa lama waktu yang dibutuhkan dalam pembuatan website?</h4>
                <h5 class="m-3 content">Waktu dalam pembuatan website tidak dapat ditentukan! Ini tergantung oleh tingkat kerumitan website itu sendiri. Semakin rumit suatu website maka akan semakin lama proses pembuatannya.</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Bagaimana cara untuk membayar?</h4>
                <h5 class="m-3 content">Anda dapat memilih satu dari beberapa pilihan cara pembayaran yang sudah tersedia di menu Service untuk melakukan pembayaran</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Kenapa harga untuk produk yang dijual tidak ditampilkan?</h4>
                <h5 class="m-3 content">Penentuan harga produk dilakukan secara negosiasi, ini bertujuan untuk mendapatkan harga terbaik. Hal ini dilakukan karena harga produk menyesuaikan dengan tingkat kerumitan yang di pesan oleh pembeli.</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Apakah produk Haltec memilik maintence/garansi?</h4>
                <h5 class="m-3 content">Iya!</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Berapa lama maintence/garansinya?</h4>
                <h5 class="m-3 content">Miantence/garansinya tergantung oleh produk yang di pesan, biasanya satu tahun.</h5>
            </div>
            <div class="card mt-4 qa">
                <h4 class="card-title m-3 collapsible">Sofware yang dipesan mengalami kerusakan saat maintence/garansinya berakhir, bisakah itu diperbaiki?</h4>
                <h5 class="m-3 content">Iya, tapi tidak secara geratis! Dengan cara melakukan konsultasi di menu IT Consultant</h5>
            </div>
        <img src="{!! asset('properties') !!}/images/faq/kiri-pojok-bawah.png" class="float-left" style="width:300px;">
        <div class="text-center p-5 m-auto" style="width:50%;">
            <h2 style="color:rgb(218,165,32);">Masih belum menemukan Jawaban</h2>
            <h4>kami siap membantu anda setiap saat</h4>
            <br>
            <div class="text-left" style="margin-left:8rem;">
                <img src="{!! asset('properties') !!}/images/faq/whastapp.png" class=""><span class="h4"> 0822-3406-0019</span>
                <br>
                <br>
                <img src="{!! asset('properties') !!}/images/faq/email.png" class=""><span class="h4"> corp.haltec@gmail.com</span>
            </div>
        </div>
    </div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            } 
        });
        }
    </script>
@endsection