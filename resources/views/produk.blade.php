{{-- Logo Solit --}}
<link rel="icon" href="img/solit.jpg" type="image/x-icon"/>

@extends('layouts.mainpage')

@section('container')
{{-- Products Section start --}}
<section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Produk terbaik yang ada di toko kami</p>
    <div class="row">
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/toshiba-r73-i3gen7.jpg" alt="Product 1">
            </div>
            <div class="product-content">
                <h3>Toshiba Dynabook R73</h3>
                <h3 style="color:Green;">Ready 62 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 2.400.000 <span>Rp 2.600.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button2"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/fujitsu-p727-i7gen7.jpg" alt="Product 2">
            </div>
            <div class="product-content">
                <h3>Fujitsu Lifebook P727</h3>
                <h3 style="color:Green;">Ready 7 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 3.800.000 <span>Rp 4.100.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button3"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/laptop-sold/lenovo-ideapad-slim5-15it-ts.jpg" alt="Product 3">
            </div>
            <div class="product-content">
                <h3>Lenovo Ideapad Slim 5</h3>
                <h3 style="color:Red;">Unit Kosong</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 8.500.000 <span>Rp 8.800.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button4"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/laptop-sold/lenovo-ideapad-3-i3gen11.jpg" alt="Product 4">
            </div>
            <div class="product-content">
                <h3>Lenovo Ideapad 3  </h3>
                <h3 style="color:Red;">Unit Kosong</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 6.100.000 <span>Rp 6.300.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button5"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/laptop-sold/pc-dell-optiplex7050-i5gen6.jpeg" alt="Product 5">
            </div>
            <div class="product-content">
                <h3>PC Dell Optiplex 7050</h3>
                <h3 style="color:Red;">Unit Kosong</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 1.600.000 <span>Rp 1.800.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button6"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/laptop-sold/lenovo-x240-i5gen4.jpg" alt="Product 6">
            </div>
            <div class="product-content">
                <h3>Lenovo Thinkpad X240</h3>
                <h3 style="color:Red;">Unit Kosong</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 2.400.000 <span>Rp 2.700.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button7"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/lenovo-m92p-i5gen3.jpeg" alt="Product 7">
            </div>
            <div class="product-content">
                <h3>Lenovo ThinkCentre M92p (Mini PC)</h3>
                <h3 style="color:Green;">Ready 3 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 1.600.000 <span>Rp 1.900.000</span></div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button8"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/dell-vostro-3405.jpeg" alt="Product 8">
            </div>
            <div class="product-content">
                <h3>Dell Vostro 3405</h3>
                <h3 style="color:Green;">Ready 2 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 4.700.000 <span>Rp 5.000.000</span></div>
            </div>
        </div>
        
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button9"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/macbook-pro-2013-i5.jpeg" alt="Product 9">
            </div>
            <div class="product-content">
                <h3>Macbook Pro 2013</h3>
                <h3 style="color:Green;">Ready 5 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 3.200.000 <span>Rp 3.500.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button10"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/lenovo-x1carbon-3rd-i5gen5.jpg" alt="Product 10">
            </div>
            <div class="product-content">
                <h3>Lenovo Thinkpad X1 Carbon 3rd</h3>
                <h3 style="color:Green;">Ready 16 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 3.100.000 <span>Rp 3.400.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button11"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/tab-nec-versapro vs- u.jpeg" alt="Product 11">
            </div>
            <div class="product-content">
                <h3>Tab NEC Versapro VS-U (Tab Only)</h3>
                <h3 style="color:Green;">Ready 43 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 1.700.000 <span>Rp 2.000.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button12"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/x1-carbon4th-i7gen6.jpeg" alt="Product 12">
            </div>
            <div class="product-content">
                <h3>Lenovo Thinkpad X1 Carbon 4th</h3>
                <h3 style="color:Green;">Ready 4 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 3.300.000 <span>Rp 3.600.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button13"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/lenovo-ideapad-s340.jpg" alt="Product 13">
            </div>
            <div class="product-content">
                <h3>Lenovo Ideapad S340</h3>
                <h3 style="color:Green;">Ready 5 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 2.900.000 <span>Rp 3.200.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button14"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/lenovo-thinkpad-e470-i5gen7.jpg" alt="Product 14">
            </div>
            <div class="product-content">
                <h3>Lenovo Thinkpad E470</h3>
                <h3 style="color:Green;">Ready 4 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 3.000.000 <span>Rp 3.300.000</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                <a href="#" class="item-detail-button15"><i data-feather="info"></i></a>
            </div>
            <div class="product-image">
                <img src="img/img-laptop/x1-carbon-2nd-i5gen4.jpeg" alt="Product 15">
            </div>
            <div class="product-content">
                <h3>Lenovo Thinkpad X1 Carbon 2nd</h3>
                <h3 style="color:Green;">Ready 4 Unit</h3>
                <!--<div class="product-stars">-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--    <i data-feather="star"></i>-->
                <!--</div>-->
                <div class="product-price">Rp 3.000.000 <span>Rp 3.300.000</span></div>
            </div>
        </div>
    </div>
</section>
{{-- Products Section end --}}

@endsection