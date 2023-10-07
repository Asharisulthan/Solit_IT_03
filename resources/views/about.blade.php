{{-- Logo Solit --}}
<link rel="icon" href="img/solit.jpg" type="image/x-icon"/>

@extends('layouts.mainpage')

@section('container')

{{-- About Section start --}}
<section class="about">
    <h2><span>Tentang</span>Kami</h2>

    <div class="row">
        <div class="about-img">
            <img src="img/tentangkami.jpg" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Kenapa memilih laptop kami?</h3>
            <p>Solit Computer merupakan toko elektronik di bidang komputer, lebih tepatnya 
                seperti laptop dan PC. Solit Computer juga menyediakan layanan servis laptop 
                untuk memberikan solusi terbaik bagi pengguna yang membutuhkan laptop atau PC dengan 
                performa yang mumpuni atau user yang ingin membeli laptop yang dibutuhkan. </p>
        </div>
    </div>
</section>
{{-- About Section end --}}

{{-- About Section 2 Start --}}
<section class="about2">
    <div class="row">
        <div class="content">
            <p>Solit Computer menyediakan berbagai macam laptop dan PC terbaik 
                untuk memenuhi kebutuhan komputer Anda. 
                Dapatkan produk berkualitas dengan harga terjangkau hanya di Solit Computer.</p>
        </div>
    </div>
</section>
{{-- About Section 2 End --}}

{{-- Menu Section start --}}
<section class="about3">
    <h2>Temui Tim Kami</h2>
    
        <div class="row">
            <div class="gallery-card">
                <img src="img/timsolit/alim.jpg" alt="Nur Alim" class="gallery-card-img">
                <h3 class="gallery-card-title"> Nur Alim </h3>
                {{-- <p class="gallery-card-price">IDR 3.600.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/david-sendow.jpg" alt="David Sendow" class="gallery-card-img">
                <h3 class="gallery-card-title"> David Sendow </h3>
                {{-- <p class="gallery-card-price">IDR 2.750.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/diki_setiawan.jpg" alt="Diki Setiawan" class="gallery-card-img">
                <h3 class="gallery-card-title"> Diki Setiawan </h3>
                {{-- <p class="gallery-card-price">IDR 2.800.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/dimas-kunn.jpg" alt="M. Dimas Khoirulanam" class="gallery-card-img">
                <h3 class="gallery-card-title"> M. Dimas </br>Khoirulanam </h3>
                {{-- <p class="gallery-card-price">IDR 2.800.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/risel-sendow.jpg" alt="Risel Sendow" class="gallery-card-img">
                <h3 class="gallery-card-title"> Risel Sendow </h3>
                {{-- <p class="gallery-card-price">IDR 2.800.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/ashari-sulthan.jpg" alt="Ashari Sulthan" class="gallery-card-img">
                <h3 class="gallery-card-title"> Ashari Sulthan </h3>
                {{-- <p class="gallery-card-price">IDR 2.800.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/yoga-prakoso.jpg" alt="Yoga Adi Prakoso" class="gallery-card-img">
                <h3 class="gallery-card-title"> Yoga Adi </br> Prakoso </h3>
                {{-- <p class="gallery-card-price">IDR 2.800.000</p> --}}
            </div>
            <div class="gallery-card">
                <img src="img/timsolit/adul.jpg" alt="Adul Syaputra" class="gallery-card-img">
                <h3 class="gallery-card-title"> Adul </br> Syaputra </h3>
                {{-- <p class="gallery-card-price">IDR 2.800.000</p> --}}
            </div>
        </div>
        
</section>
{{-- Menu Section end --}}

@endsection