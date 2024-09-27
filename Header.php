<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifi's Collection</title>
    <link rel="stylesheet" href="index.css">
    <link rel="website icon" type="png" href="Images/FC-icon.png">
    <script src="https://kit.fontawesome.com/969f6c4469.js" crossorigin="anonymous"></script>
</head>
<body>
<!-----------------------------------Navigation bar-------------------------------------------------->
    <header>
    <nav class="navbar" id="Navbar" role="navigation">

    <div class="menu" id="Menu" onclick="openMenu()"> 
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="nav-elements">
        <a href="index.php"> <img class="website-logo" src="Images/Fifi's-Collection.jpg"> </a>
        
    <div class="shoppingcart" title="Your Cart" id="Cart" onclick="openCart()">
            <i class="fa-solid fa-cart-shopping" title="Your Cart"></i>  
    </div> 

    <form action=""> 
        <label for="search">
        <input type="search" name="search" id="search" placeholder="Search here...">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> </button>
    </label>
</form>
        <a href="Home.php" class="home navbar-link"> Home <br></a>
        <a href="About.php" target="_blank" class="about navbar-link"> About<br> </a>
        
    <div class="languages">
    <select class="languages" id="Languages"> 
        <option>English</option>
        <option> French </option>
        <option>Swahili</option>
        <option>Arabic</option>
    </select>
</div>
    <a href="Account.php" class="user">  
    <i class="fa-regular fa-user" title="Your Account" onclick="openPage()"></i> </a>
</div>

 <div class="nav-links">
    <hr>
    <a href="Sale.php" class="link1"> SALE</a>
    <a href="" class="link2"> MEN</a>
    <a href="" class="link3"> WOMEN</a>
    <a href="" class="link4"> T-SHIRTS</a>
    <a href="" class="link5"> NEW-IN</a>
    <a href="" class="link6"> BRANDS</a>

    <!-------------------------------------------------------------------Shopping cart----------------------------->
    <div class="icons">
    <div class="cart" title="Your Cart" id="Cart" onclick="openCart()">
        <i class="fa-solid fa-cart-shopping" title="Your Cart"> <span> 0 </span></i>  
    </div> 
    <div class="favourites">
        <i class="fa-regular fa-heart" title="Favourites"></i>
    </div></div>
</div>
</nav>
<!-----------------------------------------------------------Menu --------------------------------------------------->
<div class="menu-links" id="MenuLinks">
<div class="account-link"> 
    <hr>
    <i class="fa-solid fa-x" id="closeButton" onclick="closeMenu()" title="Close Menu"></i>
    
     <a href="Account.php"><i class="fa-regular fa-user"></i> 
    <span>Login </span>  or  <span>  Create Account</span> </span></a></p>
</div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php" target="_blank">About</a></li>
        <li><a href="#Contact">Contact</a></li>
        <li><a href="#">Shopping Cart</a></li>
        <hr>
        <h2>Shop by Category</h2>
            <li><a href="Sale.php" class="link1 link"> Sale</a> </li>
            <hr>
            <li><a href="" class="link2 link"> Men</a> </li>
            <hr>
            <li> <a href="" class="link3 link"> Women</a> </li>
            <hr>
            <li><a href="" class="link2 link"> Kids</a> </li>
            <hr>
            <li><a href="" class="link4 link"> T-shirts</a> </li>
            <hr>
            <li> <a href="" class="link5 link"> New-In</a> </li>
            <hr>
            <li> <a href="Sale.php" class="link6 link"> Brands</a> </li> 
    </ul>
</div>
<!-----------------------------------------------------------------------Shopping Cart---------------------------->
<div class="shopping-cart" id="shoppingCart">
    <hr>
    <h1>Your Shopping Cart</h1>
    <div class="cart-list">
<h2>..hmmm your cart is empty...</h2>
    </div>
    <div class="cart-btns">
        <button class="close" id="closeButton" onclick="closeCart()">CLOSE</button>
        <button class="checkout" id="checkoutButton"> CHECKOUT</button>
    </div>
</div>
    </header>

</body></html>