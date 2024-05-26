<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/DescPro.css') }}">

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
                <a href="Cart.html" ><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="Contact.html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
        </header>
 
    </section> 
    
    <section id="details" class="section-p1">
        <div class="big-image">
            <img class="des1" src="{{ asset('assets/images/celana.png') }}" id="MainImage" alt="" width="500px">
        </div>
        <div class="small-details">
            <h6>Home / Products</h6>
            <h4>Celana Panjang</h4>
            <h2>Rp 100.000</h2>
            <a href="#" class="cart-btn">
                <i class="fas fa-shopping-bag"></i>  Add To Cart
            </a>
            <h4>Product Details</h4>
            <span>Features : Inner Drawstring can be pulled tight, Front Pleats for more elegant looks, Anti-Slip Waistband,Flat front with front crease,
                Two Angle Side Pocket,Two Buttoned Back Pocket
                
            </span>
        </div> 
    </section>
    
    <section id="feproduct" class="section-p1">
        <h2>Featured Products</h2>
        <P>Our featured collections</P>
        
        <div class="product-container">
            <div class="product-box" onclick="window.location.href='Login.Html'">
                <img src="#" alt="">
                <strong>#</strong>
                <span class="quantity">1 Pcs</span>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <span class="price">Rp 500.000</span>
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i>  Add To Cart
                </a>
    
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
    
            <div class="product-box">
                <img src="#" alt="">
                <strong>#</strong>
                <span class="quantity">1 Pcs</span>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <span class="price">Rp 950.000</span>
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i>  Add To Cart
                </a>
    
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
    
            <div class="product-box">
                <img src="#" alt="">
                <strong>#</strong>
                <span class="quantity">1 Pcs</span>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <span class="price">FREE</span>
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i>  Add To Cart
                </a>
    
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
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