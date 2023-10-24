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

    {{-- Feather Icons --}}
    <script>

        feather.replace()
      </script>

      {{-- My Javascript --}}
      <script src="js/script.js"></script>
</body>
</html>