<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solit Computer</title>

    {{-- Logo Solit --}}
    <link rel="icon" href="img/solit.jpg" type="image/x-icon"/>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    {{-- Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- My Style --}}
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    {{-- Navbar start --}}
    <nav class="navbar">
        <a href="#" class="navbar-logo">Solit<span>Computer</span>.</a>


        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
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

    {{-- Hero Section start --}}
    <section class="hero" id="home">
        <main class="content">
            <h1>Butuh Laptop...</h1>
            <h1>Ada <span>Solit</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, iusto.</p>
            <a href="#" class="cta">Beli Sekarang</a>

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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Nesciunt, magni explicabo enim veniam necessitatibus id?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi ab aperiam placeat sed, fugit nostrum.</p>
            </div>
        </div>
    </section>
    {{-- About Section end --}}

    {{-- Menu Section start --}}
    <section id="menu" class="menu">
        <h2><span>Menu</span>Kami</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt, magni explicabo enim veniam necessitatibus id?</p>

            <div class="row">
                <div class="menu-card">
                    <img src="img/jenislaptop/7280.jpg" alt="Laptop DELL 7280" class="menu-card-img">
                    <h3 class="menu-card-title">- DELL 7280 -</h3>
                    <p class="menu-card-price">IDR 3.000.000</p>
                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/7290.jpg" alt="Laptop DELL 7290" class="menu-card-img">
                    <h3 class="menu-card-title">- DELL 7290 -</h3>
                    <p class="menu-card-price">IDR 3.600.000</p>
                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/Lenovo N24.jpg" alt="Laptop Lenovo N24" class="menu-card-img">
                    <h3 class="menu-card-title">- Lenovo N24 -</h3>
                    <p class="menu-card-price">IDR 1.700.000</p>
                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/T450.jpg" alt="Laptop Lenovo T450" class="menu-card-img">
                    <h3 class="menu-card-title">- Lenovo T450 -</h3>
                    <p class="menu-card-price">IDR 2.750.000</p>
                </div>
                <div class="menu-card">
                    <img src="img/jenislaptop/Asus All In One.jpg" alt="Laptop Asus All In One" class="menu-card-img">
                    <h3 class="menu-card-title">- Asus All In One -</h3>
                    <p class="menu-card-price">IDR 2.800.000</p>
                </div>
            </div>
            
    </section>
    {{-- Menu Section end --}}

    {{-- Products Section start --}}
    <section class="products" id="products">
        <h2><span>Produk Unggulan</span> Kami</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore tempora vel asperiores. Quam, quaerat pariatur.</p>
        <div class="row">
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Lenovo X1 Carbon 3rd</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 3.400.000 <span>Rp 3.700.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Lenovo X1 Carbon 3rd</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 3.400.000 <span>Rp 3.700.000</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Lenovo X1 Carbon 3rd</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">Rp 3.400.000 <span>Rp 3.700.000</span></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Products Section end --}}

    {{-- Contact Section start --}}
    <section id="contact" class="contact">
        <h2><span>Kontak</span>Kami</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Voluptatum, reprehenderit?</p>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.929175692585!2d106.78635847590041!3d-6.403126493587587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9a37414be5f%3A0xb6eb31f91cc6287e!2sSOLIT%20IT%2003!5e0!3m2!1sid!2sid!4v1689223039209!5m2!1sid!2sid" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                <form action="">
                    <div class="input-group">
                        <i data-feather="user"></i>
                        <input type="text" placeholder="nama">
                    </div>
                    <div class="input-group">
                        <i data-feather="mail"></i>
                        <input type="text" placeholder="email">
                    </div>
                    <div class="input-group">
                        <i data-feather="phone"></i>
                        <input type="tel" pattern="^\d{3}-\d{4}-\d{4}$" required placeholder="no hp">
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>
    </section>

    {{-- Contact Section end --}}

    {{-- Footer start --}}
    <footer>
        <div class="socials">
            <a href="https://www.facebook.com/profile.php?id=100089604309514&mibextid=ZbWKwL"><img src="img/sosialmedia/facebook.png" alt="Facebook"><i></i></a>
            <a href="https://www.instagram.com/solit.comp"><img src="img/sosialmedia/instagram.png" alt="Facebook"><i></i></a>
            <a href="https://www.tiktok.com/@solusi_it03"><img src="img/sosialmedia/tiktok.png" alt="Tiktok"><i></i></a>
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
                <img src="img/img-laptop/x1-carbon3rd_ts.jpg" alt="Product 1">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Autem, harum corrupti earum impedit nulla, reprehenderit fugit ducimus, 
                        error incidunt excepturi beatae eaque modi magni cum?</p>
                        <div class="product-stars">
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        </div>
                        <div class="product-price">Rp 3.400.000 <span>Rp 3.700.000</span></div>
                        <a href="#"><i data-feather="shopping-cart"></i> <span>Keranjang</span></a>
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