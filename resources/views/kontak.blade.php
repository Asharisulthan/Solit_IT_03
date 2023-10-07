{{-- Logo Solit --}}
<link rel="icon" href="img/solit.jpg" type="image/x-icon"/>

@extends('layouts.mainpage')

@section('container')
{{-- Contact Section start --}}
<section class="contact">
    <h2><span>Kontak</span>Kami</h2>
    <p>Informasi kontak pada Solit Computer</p>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.929175692585!2d106.78635847590041!3d-6.403126493587587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9a37414be5f%3A0xb6eb31f91cc6287e!2sSOLIT%20IT%2003!5e0!3m2!1sid!2sid!4v1689223039209!5m2!1sid!2sid" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <div class="wrapper">
                <a href="https://api.whatsapp.com/send/?phone=6285930464669&text&type=phone_number&app_absent=0" class="fancy-button bg-gradient-1">
                    <span>
                    {{-- <img src="img/sosialmedia/whatsapp.png" alt="WhatsApp"> --}}
                    WhatsApp Admin</span>
                </a><br/>
                <a href="https://shopee.co.id/solit_03" class="fancy-button bg-gradient-2">
                    <span>
                    {{-- <img src="img/sosialmedia/shopee.png" alt="Shopee"> --}}
                    Shopee Solit Comp</span>
                </a><br/>
                <a href="https://www.tokopedia.com/solit03" class="fancy-button bg-gradient-3">
                    <span>
                    {{-- <img src="img/sosialmedia/tokopedia.png" alt="Tokopedia"> --}}
                    Tokopedia Solit Comp</span>
                </a><br/>
            </div>
        </div>
</section>

{{-- Contact Section end --}}
@endsection