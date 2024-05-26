<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}">
    
</head>
<body>
    <section id="Header">
        <header>
            <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <div class="search-bar">
                <i class="fa fa-search" ></i>
                <input type="search" placeholder="Find at GarageGems" >
            </div>
            <nav class="navigation">
                <a href="{{ route('cart') }}" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="{{ route('profile') }}"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
    </section> 

    <section id="cerosel">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
            
                <div class="slide first">
                   <img src="{{ asset('assets/images/Carousel1.png') }}" alt=""> 
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/images/Carousel2.png') }}" alt=""> 
                 </div>
                 <div class="slide">
                    <img src="{{ asset('assets/images/Carousel3.png') }}" alt=""> 
                 </div>
                 <div class="slide">
                    <img src="{{ asset('assets/images/Carousel4.png') }}" alt=""> 
                 </div>
    
                 <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                 </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            },5000);
        </script>
        </section>

    <section id="category">
       <div class="category-heading">
        <h2>Category</h2>
        <span>All</span>
       </div>

       <div class="category-container">
        <a href="{{ route('fashion') }}" class="category-box">
            <img src="{{ asset('assets/images/fashion.jpg') }}" alt="fashion" >
            <span>Fashion</span>
        </a>

        <a href="{{ route('furniture') }}" class="category-box">
            <img src="{{ asset('assets/images/furnitur.png') }}" alt="fashion">
            <span >Furniture</span>
        </a>

        <a href="{{ route('plant') }}" class="category-box">
            <img src="{{ asset('assets/images/plant.png') }}" alt="fashion">
            <span>Plant</span>
        </a>

        <a href="{{ route('recycle') }}" class="category-box">
            <img src="{{ asset('assets/images/Recycle.png') }}" alt="fashion" >
            <span>Recycle Items</span>
        </a>

        <a href="{{ route('free') }}" class="category-box">
            <img src="{{ asset('assets/images/Free.png') }}" alt="fashion" >
            <span>Free</span>
        </a>
       </div>
       
    </section>

    
<section id="popular-product">
    <div class="product-heading">
        <h3>Popular Product</h3>
        <span>All</span>
    </div>

    <div class="product-container">
        <div class="product-box">
            <a href="{{ route('descpro2') }}">
                <img src="{{ asset('assets/images/rotan.png') }}" alt="rotan">
            </a>
            <strong>Kursi Rotan</strong>
            <span class="quantity">1 Pcs</span>
            <span class="price">Rp 500.000</span>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>

            <a href="#" class="like-btn">
                <i class="far fa-heart"></i>
            </a>
        </div>

        <div class="product-box">
            <a href="{{ route('descpro3') }}">
                <img src="{{ asset('assets/images/sepatu.png') }}" alt="rotan">
            </a>
            <strong>Sepatu Converse</strong>
            <span class="quantity">1 Pcs</span>
            <span class="price">Rp 950.000</span>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>

            <a href="#" class="like-btn">
                <i class="far fa-heart"></i>
            </a>
        </div>

        <div class="product-box">
            <a href="{{ route('descpro4') }}">
                <img src="{{ asset('assets/images/sofa.png') }}" alt="rotan">
            </a>
            <strong>Sofa</strong>
            <span class="quantity">1 Pcs</span>
            <span class="price">FREE</span>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>

            <a href="#" class="like-btn">
                <i class="far fa-heart"></i>
            </a>
        </div>

        <div class="product-box">
            <a href="{{ route('descpro5') }}">
                <img src="{{ asset('assets/images/pot.png') }}" alt="rotan">
            </a>
            <strong>Pot bunga</strong>
            <span class="quantity">1 Pcs</span>
            <span class="price">Rp 20.000</span>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>

            <a href="#" class="like-btn">
                <i class="far fa-heart"></i>
            </a>
        </div>

        <div class="product-box">
            <a href="{{ route('descpro1') }}">
                <img src="{{ asset('assets/images/celana.png') }}" alt="rotan">
            </a>
            <strong>Celana panjang</strong>
            <span class="quantity">1 Pcs</span>
            <span class="price">Rp 100.000</span>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>

            <a href="#" class="like-btn">
                <i class="far fa-heart"></i>
            </a>
        </div>

        <div class="product-box">
            <a href="{{ route('descpro6') }}">
                <img src="{{ asset('assets/images/pupuk.png') }}" alt="rotan">
            </a>
            <strong>Pupuk Pak tani</strong>
            <span class="quantity">1 KG</span>
            <span class="price">Rp 70.000</span>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>

            <a href="#" class="like-btn">
                <i class="far fa-heart"></i>
            </a>
        </div>
    </div>
</section>
    
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <a href="#">GarageGems</a>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer-links">
            <strong>Product</strong>
            <ul>
                <li><a href="#">Clothes</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">New</a></li>
                <li><a href="#">Packages</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <strong>Category</strong>
            <ul>
                <li><a href="{{ route('fashion') }}">Fashion</a></li>
                <li><a href="{{ route('furniture') }}">Furniture</a></li>
                <li><a href="{{ route('plant') }}">Plant</a></li>
                <li><a href="{{ route('recycle') }}">Recycle Items</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <strong>Contact</strong>
            <ul>                               
                <li><a href="#">Phone: +62 081234567890</a></li>
                <li><a href="#">Email: GarageGemsOfficial@gmail.com</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>