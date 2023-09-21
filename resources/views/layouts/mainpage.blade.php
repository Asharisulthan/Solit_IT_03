<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solit Computer</title>

    {{-- Logo Solit --}}
    <link rel="icon" href="img/solit.jpg" type="image/x-icon"/>

    {{-- Icons --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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
        <a href="#" class="navbar-logo">Toko Solit<span>Computer</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

    </nav>
    {{-- Navbar end --}}
    
    {{-- Hero Section start --}}
    <section class="hero" id="home">
        <main class="content">
            <h1>Butuh Laptop...</h1>
            <h1>Ada <span>Solit</span></h1>
            <p>Menjual berbagai macam laptop dan PC Distributor dengan harga yang terjangkau</p>

        </main>
    </section>
    {{-- Hero Section end --}}

    {{-- About Section start --}}
    <section id="about" class="about">
        <h2><span>Tentang</span>Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/tentangkami.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih laptop kami?</h3>
                <p>Solit Computer merupakan toko elektronik di bidang komputer, lebih tepatnya 
                    seperti laptop dan PC. Solit Computer juga menyediakan servis laptop, mejadi solusi untuk
                    user yang ingin membeli laptop yang dibutuhkan </p>
            </div>
        </div>
    </section>
    {{-- About Section end --}}

    {{-- Menu Section start --}}
    <section id="menu" class="menu">
        <h2><span>Menu</span>Kami</h2>
        <p> Menu Laptop & PC terbaik untuk tiap tiap kebutuhan </p>

            <div class="row">
                <div class="menu-card">
                    <img src="img/jenislaptop/7280.jpg" alt="Laptop DELL 7280" class="menu-card-img">
                    <h3 class="menu-card-title">- DELL 7280 -</h3>

                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/7290.jpg" alt="Laptop DELL 7290" class="menu-card-img">
                    <h3 class="menu-card-title">- DELL 7290 -</h3>

                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/Lenovo N24.jpg" alt="Laptop Lenovo N24" class="menu-card-img">
                    <h3 class="menu-card-title">- Lenovo N24 -</h3>
                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/T450.jpg" alt="Laptop Lenovo T450" class="menu-card-img">
                    <h3 class="menu-card-title">- Lenovo T450 -</h3>

                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/Asus All In One.jpg" alt="Laptop Asus All In One" class="menu-card-img">
                    <h3 class="menu-card-title">- Asus All In One -</h3>

                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/Fujitsu P727.jpg" alt="Laptop Asus All In One" class="menu-card-img">
                    <h3 class="menu-card-title">- Fujitsu P727 -</h3>

                </div>
            </div>
            
    </section>
    {{-- Menu Section end --}}

    {{-- Products Section start --}}
    <section class="products" id="products">
        <h2><span>Produk Unggulan</span> Kami</h2>
        <p>Produk terbaik yang ada di toko kami</p>
        <div class="row">
            <div class="product-card">
                <div class="product-icons">
                    <a href="#" class="item-detail-button"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/toshiba-r73-i3gen7.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Toshiba Dynabook R73</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 2.500.000 <span>Rp 2.700.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    
                    <a href="#" class="item-detail-button2"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/fujitsu-p727-i7gen7.jpg" alt="Product 2">
                </div>
                <div class="product-content">
                    <h3>Fujitsu Lifebook P727 2 in 1</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 3.900.000 <span>Rp 4.200.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    
                    <a href="#" class="item-detail-button3"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/lenovo-ideapad-slim5-15it-ts.jpg" alt="Product 3">
                </div>
                <div class="product-content">
                    <h3>Lenovo Ideapad Slim 5 Touchscreen</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 8.800.000 <span>Rp 9.100.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    
                    <a href="#" class="item-detail-button4"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/lenovo-ideapad-3-i3gen11.jpg" alt="Product 4">
                </div>
                <div class="product-content">
                    <h3>Lenovo Ideapad 3 15ITL05 </h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 6.200.000 <span>Rp 6.400.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    
                    <a href="#" class="item-detail-button5"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/pc-dell-optiplex7050-i5gen6.jpg" alt="Product 5">
                </div>
                <div class="product-content">
                    <h3>PC Dell Optiplex 7050</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 1.600.000 <span>Rp 1.800.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    
                    <a href="#" class="item-detail-button6"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/lenovo-x240-i5gen4.jpg" alt="Product 6">
                </div>
                <div class="product-content">
                    <h3>Lenovo Thinkpad X240</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 2.500.000 <span>Rp 2.700.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    
                    <a href="#" class="item-detail-button7"><i data-feather="info"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/lenovo-m92p-i5gen3.jpeg" alt="Product 7">
                </div>
                <div class="product-content">
                    <h3>Lenovo ThinkCentre M92p (Mini PC)</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 1.700.000 <span>Rp 1.900.000</span></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Products Section end --}}

    {{-- Contact Section start --}}
    <section id="contact" class="contact">
        <h2><span>Kontak</span>Kami</h2>
        <p>Informasi kontak pada Solit Computer</p>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.929175692585!2d106.78635847590041!3d-6.403126493587587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9a37414be5f%3A0xb6eb31f91cc6287e!2sSOLIT%20IT%2003!5e0!3m2!1sid!2sid!4v1689223039209!5m2!1sid!2sid" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                <div class="wrapper">
                    <a href="https://api.whatsapp.com/send/?phone=6285930464669&text&type=phone_number&app_absent=0" class="fancy-button bg-gradient-1">
                        <span>
                        
                        WhatsApp Admin</span>
                    </a><br/>
                    <a href="https://shopee.co.id/solit_03" class="fancy-button bg-gradient-2">
                        <span>
                        
                        Shopee Solit Comp</span>
                    </a><br/>
                    <a href="https://www.tokopedia.com/solit03" class="fancy-button bg-gradient-3">
                        <span>
                        
                        Tokopedia Solit Comp</span>
                    </a><br/>
                </div>
            </div>
    </section>

    {{-- Contact Section end --}}

    {{-- Footer start --}}
    <footer>
        <div class="socials">
            <a href="https://www.facebook.com/profile.php?id=100089604309514&mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
            <a href="https://www.instagram.com/solit.comp"><i data-feather="instagram"></i></a>
            <a href="https://www.tiktok.com/@solusi_it03"><img src="img/icon/tiktok.svg">></></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
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
                    <h3>Toshiba Dynabook R73 I7 Gen 7</h3>
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
                <h3>Fujitsu Lifebook P727 2 in 1</h3>
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
                <h3>Lenovo IdeaPad 5 15ITL05</h3>
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
                <h3>Lenovo Ideapad 3 15ITL05</h3>
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
                <h3>Pc Dell Optiplex 7050 SFFF</h3>
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
                <h3>Lenovo Thinkpad X240</h3>
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
                <h3>Mini PC Lenovo ThinkCentre M92p</h3>
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