@extends('layouts.mainpage')

@section('container')
{{-- Hero Section start --}}
<section class="hero">
    <main class="content">
        <h1>Butuh Laptop...</h1>
        <h1>Ada <span>Solit</span></h1>
        <p>Menjual berbagai macam laptop dan PC Distributor dengan harga yang terjangkau</p>
        {{-- <a href="#" class="cta">Beli Sekarang</a> --}}

    </main>
</section>
{{-- Hero Section end --}}

{{-- Home section start --}}
<section class="home">
    <div class="row">
        <div class="content">
            <h1>Selamat datang di Solit Computer</h1>
            <p>Solit Computer adalah toko online terpercaya 
            yang menyediakan berbagai macam laptop dan PC. 
            Kami juga menyediakan layanan servis laptop 
            untuk memenuhi kebutuhan Anda. Dapatkan produk berkualitas 
            dengan harga terbaik hanya di Solit Computer.</p>
        </div>
        <div class="home-img">
            <img src="img/home/homefoto.jpg" alt="fotohome">
        </div>
    </div>
</section>
{{-- Home section end --}}

{{-- Home2 section start --}}
<section class="home2">
    <div class="row">
        <div class="home2-img">
            {{-- <img src="img/home/homefoto4.jpeg" alt="fotohome4"> --}}
            <img src="img/home/homefoto3.jpeg" alt="fotohome3">
        </div>
        <div class="persegi-pnjg">
            <h1>Produk terbaik untuk Kebutuhan Komputer anda</h1>
            <p>Solit Computer menyediakan berbagai macam laptop dan PC 
                terbaik untuk memenuhi kebutuhan komputer Anda, dan melengkapi kebutuhan dalam 
                mengerjakan tugas sehari hari.
                Dapatkan produk berkualitas dengan harga terjangkau hanya di Solit Computer.</p>
        </div>
    </div>
</section>
{{-- Home section end --}}
@endsection