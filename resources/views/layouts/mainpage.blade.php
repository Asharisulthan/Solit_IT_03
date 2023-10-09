<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solit Computer 03</title>

    {{-- Logo Solit --}}
    <link rel="icon" href="img/solit.jpg" type="image/x-icon"/>

    {{-- Icons --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" rel="stylesheet"/>


    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    {{-- Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- My Style --}}
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    {{-- Navbar start --}}
    <nav class="navbar">
        <a href="#" class="navbar-logo">Solit<span>Computer</span>.</a>

        <div class="navbar-nav">
            <a href="/">Home</a>
            <a href="/about">Tentang kami</a>
            <a href="/menu">Menu</a>
            <a href="/produk">Produk</a>
            <a href="/kontak">Kontak</a>
        </div>

        <div class="navbar-extra">
            {{-- <a href="#" id="search-button"><i data-feather="search"></i></a> --}}
            {{-- <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a> --}}
        @auth
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
                Selamat datang, {{ auth()->user()->username }}
                <img src="img/icon/caret-down-fill.svg" alt="Dropdown"></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="/dashboard">My Dashboard</a>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"></button>
                <a href="/logout">Logout</a>
            </form>
            </div>
          </div>
        </div>
        @else
        {{-- <a href="/login" id="login-user"><i data-feather="user"></i></a> --}}
        @endauth
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        {{-- Search Form start --}}
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        {{-- Search Form end --}}

        {{-- Shopping Cart start --}}
        <div class="shopping-cart">
            <div class="cart-item">
                <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">Rp 3.700.000</div>
                </div>  
                <i data-feather="trash-2" class="remove-item"></i>
            </div> 
            <div class="cart-item">
                <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">Rp 3.700.000</div>
                </div>  
                <i data-feather="trash-2" class="remove-item"></i>
            </div> 
            <div class="cart-item">
                <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">Rp 3.700.000</div>
                </div>  
                <i data-feather="trash-2" class="remove-item"></i>
            </div> 
        </div>
        {{-- Shopping Cart end --}}
    </nav>
    {{-- Navbar end --}}
    
    <div class="container mt-4">
        @yield('container')
    </div>

    {{-- Footer start --}}
    <footer>
        <div class="socials">
            <a href="https://www.facebook.com/profile.php?id=100089604309514&mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
            <a href="https://www.instagram.com/solit.comp"><i data-feather="instagram"></i></a>
            <a href="https://www.tiktok.com/@solusi_it03"><img src="img/icon/tiktok.svg">></></a>
        </div>

        <div class="links">
            <a href="/">Home</a>
            <a href="/about">Tentang Kami</a>
            <a href="/menu">Menu</a>
            <a href="/produk">Produk</a>
            <a href="/kontak">Kontak</a>
        </div>

        <div class="credit">
            <p>Created by  <a href="">Solit Computer</a>. | &copy; 2023.</p>
        </div>
    </footer>
    {{-- Footer end --}}

    {{-- Modal Box Item Detail start --}}
<div class="modal" id="item-detail-modal">
    <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/toshiba-r73-i3gen7.jpg" alt="Product 1">
            <div class="product-content">
                <h5>Toshiba Dynabook R73/J</h5>
                    <p>
                    Processor : Intel(R) Core(TM) i3-7100 (Gen 7) 2.40Ghz<br/>
                    GPU       : Intel HD Graphics 620<br/>
                    Ram       : 8 GB (DDR 4)<br/>
                    Rom       : 256 GB (SSD)<br/>
                    Layar     : 13.3 INCH</p>
                    <p>
                    Kondisi :<br/>
                    ● Sudah Install Windows 11/10<br/>
                    ● Sudah Install Microsoft 2021 ( Word,Excel, power point, Zoom) dll<br/>
                    ● Kualitas Di Jamin<br/>
                    ● Barang Mulus<br/>
                    ● No Minus<br/>
                    </p>
                    <p>
                    Port  :<br/>
                    ● 3 x USB 3.0<br/>
                    ● VGA<br/>
                    ● LAN<br/>
                    ● HDMI™<br/>
                    ● 3.5 mm Mikrofon / Headphone<br/>
                    ● Charger<br/>
                    </p>
                    <br/>
                    {{-- <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 2.500.000 <span></span></div> --}}
                    {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal2" id="item-detail-modal2">
    <div class="modal-container">
        <a href="#" class="close-icon2"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/fujitsu-p727-i7gen7.jpg" alt="Product 2">
            <div class="product-content">
            <h5>Fujitsu Lifebook P727 2 in 1</h5>
                <p>Prosessor : Intel Core i7-7500U 2.70Ghz (Gen 7)<br/>
                    GPU/VGA : Intel HD Graphics 620<br/>
                    RAM         : 8 GB (DDR 4)<br/>
                    ROM        : 256 GB (SSD)<br/>
                    Display     : 12.5  FHD screen Touchscreen 360°<br/>
                    Berat        : 1.2 Kg<br/>
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 11 Home/10 Pro<br/>
                ● Sudah Install Microsoft 2021 ( Word,Excel, power point, Zoom) dll<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus, No Minus<br/>
                </p>
                <p>
                Port  :<br/>
                ● 1 x DC-in<br/>
                ● Type-C, Type-A<br/>
                ● VGA<br/>
                ● Ethernet (RJ-45)<br/>
                ● SmartCard slot<br/>
                ● HDMI 1.4<br/>
                ● Port Mikrofon / Headphone<br/>
                ● SIM card slot ( only for models with integrated 4G/LTE )<br/>
                ● Memory card slots<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 3.900.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal3" id="item-detail-modal3">
    <div class="modal-container">
        <a href="#" class="close-icon3"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-ideapad-slim5-15it-ts.jpg" alt="Product 3">
            <div class="product-content">
            <h5>Lenovo IdeaPad 5 15ITL05</h5>
                <p>
                    Processor : Intel(R) Core i7-1165G7  2.80Ghz (11th Gen)<br/>
                    GPU       : Iris Xe Graphics<br/>
                    Ram       : 12 GB (DDR 4)<br/>
                    Rom       : 512 GB (SSD M.2 NVMe)<br/>
                    Layar     : 15,6 INCH<br/>
                <p>
                Kondisi :<br/>
                ● Keyboard Backlight<br/>
                ● Sudah Install Windows 11 Home<br/>
                ● Sudah Install Microsoft 2021, Zoom<br/>
                ● Bisa Request APK<br/>
                ● Kualitas Di Jamin<br/>
                ● Warna Abbys Blue<br/>
                ● Barang Mulus, No Minus<br/>
                ● 15.6" IPS 1920 x 1080 (Full HD) Touchscreen<br/>
                ● FingerPrint<br/>
                </p>
                <p>
                Port  :<br/>
                ● Card Reader<br/>
                ● HDMI<br/>
                ● Headphone / microphone combo jack<br/>
                ● USB-C™ (Type - C)<br/>
                ● USB 3.1 <br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 8.800.000</div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal4" id="item-detail-modal4">
    <div class="modal-container">
        <a href="#" class="close-icon4"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-ideapad-3-i3gen11.jpg" alt="Product 4">
            <div class="product-content">
            <h5>Lenovo Ideapad 3 15ITL05</h5>
                <p>
                Processor : Intel(R) Core(TM) i3-1115G4 (3.00 GHz up to 4.10 GHz)<br/>
                GPU         : Intel UHD Graphics<br/>
                Ram         : 8 GB (DDR 4)<br/>
                Rom         : 256 GB (SSD - M.2 NVMe)<br/>
                Layar        : 15.6 INCH<br/>
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 11 Home/10 Pro<br/>
                ● Sudah Install Microsoft 2021 ( Word,Excel, power point, Zoom) dll<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● 15.6" FHD (1920 x 1080), TN, Anti-Glare, Non-Touch, 45%NTSC, 220 nits, 60Hz<br/>
                ● 1MP HD with Array Microphone<br/>
                ● LED Backlight, Narrow Bezel<br/>
                </p>
                <p>
                Port  :<br/>
                ● 3 x USB 3.0<br/>
                ● Card Reader<br/>
                ● HDMI™ 1.4<br/>
                ● Mikrofon / Headphone<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 6.200.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal5" id="item-detail-modal5">
    <div class="modal-container">
        <a href="#" class="close-icon5"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/pc-dell-optiplex7050-i5gen6.jpg" alt="Product 5">
            <div class="product-content">
            <h5>Pc Dell Optiplex 7050 SFFF</h5>
                <p>
                Processor : Intel® Core™ i5-6500U (Gen 6)<br/>
                GPU         : HD Graphics 510/530<br/>
                Ram         : 8 GB (DDR 4)<br/>
                Rom         : 500 GB (HDD)<br/>
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 11/10<br/>
                ● Sudah Install Microsoft 2021, Zoom<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● Bisa Request APK<br/>
                </p>
                <p>
                Port  :<br/>
                ● Power Button and Power LED<br/>
                ● Memory Card Reader<br/>
                ● Optical Drive<br/>
                ● Universal Audio Jack<br/>
                ● 2x USB 2.0 Connector<br/>
                ● USB 3.1 Gen1 Connector<br/>
                ● Fingerprint Reader<br/>
                ● USB 2.0 x 1, USB 3.0 x 3, USB Type-C<br/>
                ● Vga, Lan, HDMI<br/>
                ● Display Port<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.800.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal6" id="item-detail-modal6">
    <div class="modal-container">
        <a href="#" class="close-icon6"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-x240-i5gen4.jpg" alt="Product 6">
            <div class="product-content">
            <h5>Lenovo Thinkpad X240</h5>
                <p>Processor : Intel(R) Core(TM) i5-4300U (Gen 4 )<br/>
                    GPU	      : HD Graphics Family<br/>
                    Ram       : 8 GB (DDR 3)<br/>
                    Rom       : 256 GB (SSD)<br/>
                    Layar     : 12.5 INCH<br/>
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 11/10<br/>
                ● Sudah Install Microsoft 2021, Zoom<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● 12.5" HD (1366 x 768) IPS, 300 nits<br/>
                ● Double Battry (4 - 5 jam) - Tergantung Pemakaian<br/>
                </p>
                <p>
                Port  :<br/>
                ● MicroSD Card Slot<br/>
                ● HDMI/Mini HDMI<br/>
                ● 2 USB 3.0<br/>
                ● Smart card reader (optional)<br/>
                ● LAN<br/>
                ● Headphone microphone combo jack<br/>
                ● VGA<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 2.500.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal7" id="item-detail-modal7">
    <div class="modal-container">
        <a href="#" class="close-icon7"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-m92p-i5gen3.jpeg" alt="Product 7 ">
            <div class="product-content">
            <h5>Mini PC Lenovo ThinkCentre M92p</h5>
                <p>Spesifikasi<br/>
                    Prosesor : i5 gen 3/gen 4<br/>
                    RAM       : 8 GB<br/>
                    ROM       : 256 GB (SSD)<br/>
                <p>
                Kondisi :<br/>
                ● Sudah terinstal windows 10/11<br/>
                ● Sudah terinstal Microsoft 2021 <br/>
                ● No minus <br/>
                ● Siap pakai<br/>
                ● Bisa Req APK<br/>
                </p>
                <p>
                Port  :<br/>
                ● Display Port<br/>
                ● 5x USB 2.0<br/>
                ● LAN<br/>
                ● VGA<br/>
                ● Port Mikrofon / Headphone<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal8" id="item-detail-modal8">
    <div class="modal-container">
        <a href="#" class="close-icon8"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/dell-vostro-3405.jpeg" alt="Product 8 ">
            <div class="product-content">
            <h5>Dell Vostro 3405</h5>
                <p>Spesifikasi<br/>
                    Processor : AMD Ryzen 5 3500U<br/>
                    GPU	      : AMD Radeon Vega (TM) Graphics<br/>
                    Ram       : 8 GB (DDR 4)<br/>
                    Rom       : 256 GB (M.2 NVMe SSD)<br/>
                    Layar     : 14 INCH FHD (1920 x 1080) Anti-glare LED Backlight<br/>
                </p>
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 10/11<br/>
                ● Sudah Install Microsoft 2021, Zoom, dll<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● Battry tahan sampai 3 jam (Tergantung Pemakaian)<br/>
                </p>
                <p>
                Kelengkapan :<br/>
                ● Charger dan Tas<br/>
                </p>
                <p>
                Port  :<br/>
                ● HDMI<br/>
                ● Network<br/>
                ● 2x USB Type-A 3.2 Gen 1<br/>
                ● Audio Jack<br/>
                ● SD-card reader<br/>
                ● USB Type-A 2.0 Gen 1 <br/>
                ● Wedge-shaped lock slot <br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal9" id="item-detail-modal9">
    <div class="modal-container">
        <a href="#" class="close-icon9"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/macbook-pro-2013-i5.jpeg" alt="Product 9 ">
            <div class="product-content">
            <h5>MacBook Pro Retina 2013</h5>
                <p> Processor : Intel(R) Core i5 2.5GHz<br/>
                    GPU : Intel HD Graphics 4000<br/>
                    Ram : 8 GB (DDR 3L)<br/>
                    Rom : 256 GB (SSD)<br/>
                    Layar : 13.3-inch (1280 x 800) LED-backlit display with IPS technology<br/>
                <p>
                Kondisi :<br/>
                ● Sistem operasi OS X Mavericks 10.9.5<br/>
                ● Sudah Install Microsoft 2021<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● Bergaransi<br/>
                </p>
                <p>
                Port  :<br/>
                ● MagSafe 2 power port<br/>
                ● 2x Thunderbolt 2 ports (up to 20 Gbps)<br/>
                ● 2x USB 3 ports (up to 5 Gbps)<br/>
                ● HDMI port<br/>
                ● Headphone port<br/>
                ● SDXC card slot<br/>
                </p>

                <p>
                Kelengkapan :<br/>
                ● Charger ORI dan Dus<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal10" id="item-detail-modal10">
    <div class="modal-container">
        <a href="#" class="close-icon10"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-x1carbon-3rd-i5gen5.jpg" alt="Product 10 ">
            <div class="product-content">
            <h5>Lenovo Thinkpad X1 Carbon 3rd</h5>
                <p>Spesifikasi<br/>
                Processor : Intel(R) Core i5-5300U  CPU @ 2.30GHz<br/>
                Gpu       : Intel HD Graphics 5500<br/>
                Ram       : 8 GB (DDR3L) <br/>
                Rom       : 128 GB (M.2 SSD)<br/>
                Layar     : 14 INCH FHD (1920 x 1080)<br/>
                Camera : HD 720p
                </P>

                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 10 /11<br/>
                ● Sudah Install Microsoft 2021, zoom, Photoshop, Adobe Premier<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No minus<br/>
                ● Siap Pakai<br/>
                </p>

                <p>
                * Keybord backlight<br/>
                * Fingerprint<br/>
                </p>
                <p>

                Port  :<br/>
                ● Charger<br/>
                ● HDMI<br/>
                ● Thunderbolt<br/>
                ● USB 3.0 x2<br/>
                ● Combo audio/microphone jack<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal11" id="item-detail-modal11">
    <div class="modal-container">
        <a href="#" class="close-icon11"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/tab-nec-versapro vs- u.jpeg" alt="Product 11 ">
            <div class="product-content">
                <h5>NEC Versapro VS-U [TS] Tab Only</h5>
                <p>Spesifikasi<br/>
                Processor : Intel(R) Core(TM) m5-6Y54 (Setara dengan I5 Gen 5 keatas)<br/>
                GPU	      : HD Graphics 515<br/>
                Ram       : 4 GB (DDR 3)<br/>
                Rom       : 128 GB (SSD)<br/>
                Layar     : 11.6 Inch FHD (1920 x 1080) IPS  <br/>
                </P>

                <p>
                Kondisi :<br/><br/>
                ● Sudah Install Windows 10<br/>
                ● Sudah Install Microsoft 2021, Zoom<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                </p>

                <P>
                * Finger Print<br/>
                </P>

                <p>
                Port  :<br/>
                ● USB 3.0 ×2<br/>
                ● LAN kabel RJ45<br/>
                ● HDMI/Mini HDMI<br/>
                ● SD Card <br/>
                ● Headphone microphone combo jack<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal12" id="item-detail-modal12">
    <div class="modal-container">
        <a href="#" class="close-icon12"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/x1-carbon4th-i7gen6.jpeg" alt="Product 12 ">
            <div class="product-content">
            <h5>Lenovo Thinkpad X1 Carbon 4th</h5>
                <p>Spesifikasi<br/>
                Processor : Intel(R) Core i5-6300U  CPU @ 2.40GHz up to 3.0GHz<br/>
                Gpu       : Intel HD Graphics 520<br/>
                Ram       : 8 GB (DDR3) <br/>
                Rom       : 128 GB (M.2 SSD)<br/>
                Layar     : 14 INCH FHD (1920 x 1080) IPS<br/>
                Camera    : HD 720p  <br/>
                </P>

                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 10 /11<br/>
                ● Sudah Install Microsoft 2021, zoom, Photoshop, Adobe Premier<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● Siap Pakai<br/>
                ● Batrai Tahan lama 2 - 3 jam (tergantung pemakaian) <br/>
                </p>

                <P>
                * Keybord backlight<br/>
                * Finger Print<br/>
                </P>

                <p>
                Port  :<br/>
                ● Charger<br/>
                ● MicroSD card reader<br/>
                ● HDMI<br/>
                ● Thunderbolt<br/>
                ● USB 3.0 x2<br/>
                ● Combo audio/microphone <br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal13" id="item-detail-modal13">
    <div class="modal-container">
        <a href="#" class="close-icon13"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-ideapad-s340.jpg" alt="Product 13 ">
            <div class="product-content">
            <h5>Lenovo Ideapad S340</h5>
                <p>Spesifikasi<br/>
                Processor : Intel® Core™ i5-8265U (Gen 8)<br/>
                GPU : Intel UHD Graphics 620<br/>
                Ram : 8 GB (DDR 4)<br/>
                Rom : 128 GB (SSD M.2 NVMe)<br/>
                Layar : 15.6" FHD (1920 x 1080) IPS, 250 nits<br/>

                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 10/11<br/>
                ● Sudah Install Microsoft 2021,Zoom<br/>
                ● Kondisi Normal Seperti Baru<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● Bergaransi<br/>
                ● Warna Abbys Blue<br/>
                </p>
                <p>
                Port  :<br/>
                ● 2 x USB 3.1 Gen 1 (1 supports charging)<br/>
                ● USB-C<br/>
                ● HDMI<br/>
                ● 4-in-1 SD card reader<br/>
                ● Headphone & microphone combo jack<br/>
                ● Power connector (round DC jack)<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal14" id="item-detail-modal14">
    <div class="modal-container">
        <a href="#" class="close-icon14"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/lenovo-thinkpad-e470-i5gen7.jpg" alt="Product 14 ">
            <div class="product-content">
            <h5>Lenovo Thinkpad E470</h5>
                <p>Spesifikasi<br/>
                Processor : Intel(R) Core i5 - 7200U (Gen 7)<br/>
                GPU : Intel HD Graphics 620<br/>
                Ram : 8 GB (DDR 4)<br/>
                Rom : 256 GB (SSD)<br/>
                Layar : 14 INCH FHD (1920 x 1080) 250 nit, anti-glare<br/>
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 10/11<br/>
                ● Sudah Install Microsoft 2021,Zoom<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● 4 Slot RAM<br/>
                ● Finger Print Reader<br/>
                </p>
                <p>
                Port  :<br/>
                ● 2X USB 3.0<br/>
                ● USB 2.0<br/>
                ● HDMI<br/>
                ● 4-in-1 Card Reader (SD, MMC, SDHC, SDXC)<br/>
                ● Headphone & microphone combo jack<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal15" id="item-detail-modal15">
    <div class="modal-container">
        <a href="#" class="close-icon15"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img src="img/img-laptop/x1-carbon-2nd-i5gen4.jpeg" alt="Product 15 ">
            <div class="product-content">
            <h5>Lenovo Thinkpad X1 Carbon 2nd</h5>
                <p>Spesifikasi<br/>
                Processor : Intel(R) Core i5-4300U  CPU @ 1.90GHz <br/>
                Gpu       : Intel HD Graphics 4400<br/>
                Ram       : 4 GB (DDR3) <br/>
                Rom       : 128 GB (M.2 SSD)<br/>
                Layar     : 14 INCH HD (1600 x 900) <br/>
                Camera : HD 720p
                </p>
                
                <p>
                Kondisi :<br/>
                ● Sudah Install Windows 10 /11<br/>
                ● Sudah Install Microsoft 2021, zoom, Photoshop, Adobe Premier<br/>
                ● Kualitas Di Jamin<br/>
                ● Barang Mulus<br/>
                ● No Minus<br/>
                ● Siap Pakai<br/>
                ● Batrai Tahan lama 2 - 3 jam (tergantung pemakaian) <br/>
                </p>

                <p>
                Port  :<br/>
                ● Charger<br/>
                ● Micro-SIM card<br/>
                ● HDMI<br/>
                ● Mini DP<br/>
                ● USB 3.0 x2<br/>
                ● Combo audio/microphone jack<br/>
                </p>
                <br/>
                {{-- <div class="product-stars">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">Rp 1.700.000 <span></span></div> --}}
                {{-- <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a> --}}
            </div>
        </div>
    </div>
</div>
{{-- Modal Box Item Detail end --}}

    {{-- Feather Icons --}}
    <script>

        feather.replace()
      </script>

      {{-- My Javascript --}}
      <script src="js/script.js"></script>
</body>
</html>