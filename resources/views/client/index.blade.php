@extends('layout.main')
@section('content')
    <style>
        .p{
            display: flex;
            float : left;
            width: 44%;
            color:orange;
            background-color:#EEEDFF;
            border-color: transparent;
        };
    </style>
    <div class="bg-light">
        <h1 class="text-center" style="padding:120px 450px 0 0; color:orange">CLIENT</h1>
        <img src="{!! asset('properties') !!}/images/client/PIC 2.png" class="position-absolute" style="width:100%; height:330px; margin-top:400px">
        <img src="{!! asset('properties') !!}/images/client/PIC 1.png" class="position-absolute" style="margin:30px 0 0 850px; width:500px">
        <div class="card position-relative" style="border-color:transparent; border-radius:30px; width:60%; margin:50px 100px 190px 50px; box-shadow: -5px 10px 0 3px rgba(0, 0, 0, 0.2)">
            <div>
                <div class="card p" style="border-radius:30px; margin:20px; box-shadow: -7px 7px 0 0px rgba(0, 0, 0, 0.2)">
                    <img src="{!! asset('properties') !!}/images//client/LOGO 1.png" class="position-absolute" style="width:100px; height:100px; margin:10px">
                    <h2 class="text-center card" style="border-color:transparent; border-radius:30px; margin:20px 15px 22px 120px; width:60%">UD. MITRA TANI</h2>
                </div>
                <div class="card p" style="border-radius:30px; margin:20px; box-shadow: -7px 7px 0 0px rgba(0, 0, 0, 0.2)">
                    <img src="{!! asset('properties') !!}/images//client/LOGO 2.png" style="width:100px; height:100px; margin:10px">
                    <h2 class="text-center card position-absolute" style="border-color:transparent; border-radius:30px; padding:5px 3px 10px 2px; margin:20px 15px 20px 120px; width:60%">KOMINFO Jakarta</h2>
                </div>
            </div>
            <div>
                <div class="card p" style="border-radius:30px; margin:20px; box-shadow: -7px 7px 0 0px rgba(0, 0, 0, 0.2)">
                    <img src="{!! asset('properties') !!}/images//client/LOGO 3.png" class="position-absolute" style="width:100px; height:100px; margin:10px">
                    <h2 class="text-center card" style="border-color:transparent; border-radius:30px; margin:20px 15px 22px 120px; width:60%">Sinergi Solusi Teknik</h2>
                </div>
                <div class="card p" style="border-radius:30px; margin:20px; box-shadow: -7px 7px 0 0px rgba(0, 0, 0, 0.2)">
                    <img src="{!! asset('properties') !!}/images//client/LOGO 4.png" style="width:100px; height:100px; margin:10px">
                    <h2 class="text-center card position-absolute" style="border-color:transparent; border-radius:30px; padding:0 0 10px 0; margin:17px 15px 20px 120px; width:60%">SMKN 1 Tulungagung</h2>
                </div>
            </div>
            <div>
                <div class="card p" style="border-radius:30px; margin:20px; box-shadow: -7px 7px 0 0px rgba(0, 0, 0, 0.2)">
                    <img src="{!! asset('properties') !!}/images//client/LOGO 5.png" class="position-absolute" style="width:100px; height:100px; margin:10px">
                    <h2 class="text-center card" style="border-color:transparent; border-radius:30px; padding:5px 3px 0 2px; margin:20px 15px 22px 120px; width:60%">Apotek Wisnu Farma</h2>
                </div>
                <div class="card p" style="border-radius:30px; margin:20px; box-shadow: -7px 7px 0 0px rgba(0, 0, 0, 0.2)">
                    <img src="{!! asset('properties') !!}/images//client/LOGO 6.png" style="width:100px; height:100px; margin:10px">
                    <h2 class="text-center card position-absolute" style="border-color:transparent; border-radius:30px; padding:0 0 4px 0; margin:20px 15px 20px 120px; width:60%">Cahaya<br>Top</h2>
                </div>
            </div>
        </div>
    </div>
@endsection