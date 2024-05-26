<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageGems</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/Cart.css') }}">
    <script src="{{ asset('assets/js/Cart.js') }}" defer></script>

</head>

<body class="">

    <div class="container">
        <header>
        <a href="{{ route('home') }}"><h2 class="logo">GarageGems</h2></a>
            <nav class="navigation">
                <div class="iconCart">
                    <a><i class="fa-solid fa-cart-shopping" style="font-size: 1.5em"></i></a> 
                    <span>0</span>
                </div>
                <a href="Message.html"><i class="fa-solid fa-message" style="font-size: 1.5em"></i></a>
                <a href="Profile.html"><i class="fa-solid fa-user" style="font-size: 1.5em"></i></a>
            </nav>
            
            
        </header>
    
        <div class="listProduct">
            <div class="item">
                <img src="{{ asset('assets/images/single_sofa.jpg') }}" alt="" width="180" height="180">
                <h2>Single Sofa</h2>
                <div class="price">Rp2.000.000</div>
                <button class="addCart">
                    Add To Cart
                </button>
            </div>
        </div>
    
            <div class="cartTab">
                <h1>Shopping Cart</h1>
                <!-- <div class="jeda"></div> -->
                <div class="listCart">
                    <div class="item">
                         <!-- diapus isinya, dipindahin ke newCart.innerHTML supaya pas buka cartTab tp blom checkout apa apa maka cartTab nya juga akan kosong -->
                    </div>
                </div>
                <div class="btn">
                    <button class="close">CLOSE</button>
                    <BUTTON class="checkOut">CHECK OUT</BUTTON>
                </div>
            </div>
    
        </div>
        <!-- <script src="Cart.js"></script> -->
    </div>
    
</body>
</html>