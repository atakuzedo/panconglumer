<?php
require 'function.php';

if(isset($_POST['btn'])){
    if(tambah($_POST) > 0)
    echo
    "<script>alert('Data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/IMG-20241025-WA0003.jpg">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Pancong Lumer RO_LINK | Home</title>
</head>
<body>
    <div class="hero">
        <nav>
            <h1>Pancong Lumer RO-LINK</h1>
            <ul id="navbar">
                <li><a href="">Home</a></li>
                <li><a href="#products">Shop</a></li>
                <li><a href="#cart">Cart</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.html">Login / Sign Up</a></li>

                <img class="exit" src="reject.png" alt="">
            </ul>

            <img class="navbar" src="menu (1).png" alt="">
        </nav>
        
        <div class="inner-container" id="inner-container">
            <div>
                <h1>Nikmati Lelehan Cokelat dan Keju di Setiap Gigitan Kue Pancong Lumer!</h1>
                <p>
                    Temukan sensasi baru dari kue pancong lumer yang menggoda! Kue pancong klasik dengan tekstur lembut dan renyah, kini hadir dengan isian lelehan coklat, tiramisu, dan varian rasa lainnya yang tak terlupakan.
                </p>
                <button> <div class="cover">
                    
                </div>Pesan Sekarang</button>
                
            </div>
            <img class="pamercoklat" src="img/pamercoklat.png" alt="pamercoklat">
        </div>
        <div class="arrow">
            <svg width="112" height="151" viewBox="0 0 112 151" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50.6967 148.303C53.6256 151.232 58.3744 151.232 61.3033 148.303L109.033 100.574C111.962 97.6447 111.962 92.8959 109.033 89.967C106.104 87.038 101.355 87.038 98.4264 89.967L56 132.393L13.5736 89.967C10.6447 87.038 5.89591 87.038 2.96698 89.967C0.0380459 92.8959 0.0380459 97.6447 2.96698 100.574L50.6967 148.303ZM48.5 0L48.5 143H63.5L63.5 0L48.5 0Z" fill="#E8AA42"/>
            </svg>
            <h2> PRODUCTS BELOW</h2>    
        </div>
    </section>
    
    <section class="products" id="products">
        <h2>TOP SALES PRODUCTS</h2>
        <div class="top-products">
            <div class="card-container">
                <h1>PaLum Coklat</h1>
                <p>Kue pancong lumer rasa coklat, kenikmatan cokelat yang sempurna! Lembut di dalam, garing di luar, dan manisnya bikin mood langsung naik. Hadirkan sensasi cokelat yang melimpah dalam setiap gigitan.</p>
                <img src="img/pamercoklat.png" alt="">
            </div>
            <div class="card-container">
                <h1>PaLum Tiramisu</h1>
                <p>Rasakan kelezatan yang elegan dari kue pancong lumer rasa tiramisu! Setiap gigitan memadukan gurihnya pancong klasik dengan creamy dan aroma kopi khas tiramisu yang menggoda. Siap manjain lidahmu dengan sensasi lembut dan lumer yang bikin nagih!</p>
                <img src="img/pancongtiramisu.png" alt="">
            </div>
            <div class="card-container">
                <h1>PaLum Choco Crunchy</h1>
                <p>Kue pancong choco crunchy ini bukan sekadar camilan! Lelehan cokelat yang nikmat dan taburan crunchy yang renyah membuat setiap gigitan jadi pengalaman yang seru. Cocok banget buat kamu yang ingin ngemil dengan cita rasa unik!</p>
                <img src="img/pamerchococruncy.png" alt="">
            </div>
        </div>
        <div class="search-section">
            <div class="search">
                <input type="text" placeholder="Search for item...">
                <img src="search.png" alt="search">    
            </div>
            <div class="categories">
                <ul>
                    <li><a href="#">ALL</a></li>
                    <li><a href="#">MAKANAN</a></li>
                    <li><a href="#">MINUMAN</a></li>
                </ul>
            </div>
            <div class="product-container">
                <!-- PaLum Coklat Card -->
                <div class="card">
                    <div class="img">
                        <img src="img/pamercoklat.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Coklat</h2>
                        <h2>Rp. 14.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                <!-- PaLum Cappucino Card -->
                <div class="card">
                    <div class="img">
                        <img src="img/pamercappucino.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Cappucino</h2>
                        <h2>Rp. 14.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                
                <!-- PaLum Tiramisu card -->
                <div class="card">
                    <div class="img">
                        <img src="img/pancongtiramisu.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Tiramisu</h2>
                        <h2>Rp. 14.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                <!-- PaLum Keju Susu laptop -->
                <div class="card">
                    <div class="img">
                        <img src="img/pamerkejususu.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Keju Susu</h2>
                        <h2>Rp. 15.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                <!-- PaLum Choco Crunchy Card -->
                <div class="card">
                    <div class="img">
                        <img src="img/pamerchococruncy.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Choco Crunchy</h2>
                        <h2>Rp. 15.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                <!-- PaLum Green Tea Crunchy card -->
                <div class="card">
                    <div class="img">
                        <img src="img/pamergreenteacrunchy.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Green Tea Crunchy</h2>
                        <h2>Rp. 15.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                <!-- PaLum Tiramisu Crunchy card -->
                <div class="card">
                    <div class="img">
                        <img src="img/pamertiramisucrunchy.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>PaLum Tiramisu Crunchy</h2>
                        <h2>Rp. 15.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
                <!-- Es Coklat Lumer card -->
                <div class="card">
                    <div class="img">
                        <img src="img/escoklatlumerr.png" alt="product">
                    </div>
                    <div class="details">
                        
                        <h2>Es Coklat Lumer</h2>
                        <h2>Rp. 8.000</h2>
                        <div class="location">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <img class="heart" src="heart.png" alt="">
                    </div>
                    <button>ADD TO CART</button>
                    <button>SEE PRODUCT</button>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials-section">
        <div class="testimonials">
            <div class="viewed">
                <h1>MOST VIEWED PRODUCTS</h1>
                <div class="items">
                    <div class="item">
                        <img src="img/pamertiramisucrunchy.png" alt="">
                        <h2>PaLum Tiramisu Crunchy</h2>
                    </div>
                    <div class="item">
                        <img src="img/pamergreenteacrunchy.png" alt="">
                        <h2>PaLum Green Tea Crunchy</h2>
                    </div>
                    <div class="item">
                        <img src="img/pamerchococruncy.png" alt="">
                        <h2>PaLum Choco Crunchy</h2>
                    </div>
                </div>
            </div>
    
        </div>
    
    </section>
    <section id="contact" class="contact">
        <h2>KONTAK KAMI</h2>
        <div class="row">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6857426861834!2d107.02974901040928!3d-6.304956193657899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699100256ad047%3A0x2075319aeb146429!2sPANCONG%20LUMER%20RO-LINK!5e0!3m2!1sid!2sid!4v1729820951797!5m2!1sid!2sid"
            width="600" height="750" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-group">
            <i data-feather="user"></i>
              <input type="text"id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="input-group">
              <input type="text" id="email" name="email" placeholder="Email">
            </div>
            <div class="input-group">
              <input type="text" id="nohp"  name="nohp" placeholder="No hp">
            </div>
            <div class="input-group">
                <input type="text" id="pesan"  name="pesan" placeholder="Pesan">
              </div>
              <button name="btn" type="btn" id="btn" class="btn">Kirim</button>
            </form>
        </div>
      </section>
    <!-- Footer start -->
    <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#shop">Shop</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by Iqbal Putra. | All Right Reserved &copy; 2024.</p>
    </div>
  </footer>
  <!-- Footer end -->
    <script src="js/main.js"></script>
</body>
</html>
