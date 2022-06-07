
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "icon" href ="VYKES.jpg"/>
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/b13e507b6c.js" crossorigin="anonymous"></script>

    <title>Check Out</title>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    * {
        margin: 0;
        padding: 0;
        font-family: "Open Sans" ,sans-serif;
    }
    
    .BGPIC {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(../html/store.jpg);
        background-size: cover;
        background-attachment: fixed;
    }
    
    .BAR {
        width: 85%;
        margin: auto;
        padding: 35px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .LOGOPIC {
        width: 120px;
        cursor: pointer;
        border-radius: 20%;
        opacity: .9;
    }
    
    .BAR ul li {
        list-style: none;
        display: inline-block;
        margin:  20px;
        position: relative;
    
    }
    
    .BAR ul li a{
        text-decoration: none;
        color: #ffffff;
        text-transform: uppercase;
    }
    
    .BAR ul li::after{
        content: '';
        height: 3px;
        width: 0;
        background: #009688;
        position: absolute;
        left: 0;
        bottom: -10px;
        transition: 1s;
    }
    .BAR ul li:hover::after{
        width: 100%;
    }


    .bg{
        position: absolute;
        top: 15%;
        background-color: rgb(255,255,255);
        width: 100%;
        height: 85%;

    }

    .title{
        position: absolute;
        text-align: left;
        background-color: #AAAAAA;
        color: black;
        font-size: 35px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        width: 100%;
    }

    .title p{
        margin-left: 3%;
        margin-bottom: 1.5%;
        margin-top: 1.5%;
        text-align: center;
    }



    .address{
        top: 2%;
        width: 100%;
        padding-top: 200px;
        border-bottom: gray solid 2px;
        background-color: #AAAAAA;
        
    }


    .address ul li{
        list-style: none;
        display: inline-block;
        margin-left: 20%;
    }
    
    .address form{
        margin-left: -14%;
        margin-bottom: 1%;  
    }
    .address form input{
        width: 230%;
        padding: 10%;
        border-radius: 30px;
        border: black solid 1px;
        transition: border 0.5s;
    }

    .bg h1{
        position: absolute;
        text-align: center;
        margin-top: 7%;
        width: 100%;    
    }

    .last{
        position: absolute;
        width: 100%;
    }

    .last form{
        margin-top: 2%;
        margin-left: 55%;
    }

    .last form select{
        padding: 10px;
        border-radius: 20px;
        margin-right: 10%;
    }

    .last form{
        font-size: 25px;
        color: navy;
        font-weight:bold;
    }

    .bg h2{
        margin: 30px;
        font-size: 200%; 
    }
    
    .go{
        position: absolute;
        width: 100%;
        top: 60%;
    }

    .go form{
        margin-left: 43%;
    }

    .go form input{
        width: 20%;
        padding: 1%;
        color: white;
        background-color: navy;
    }

    .address form ul li :hover{  
        border: 5px solid navy;
    }

    .go form :hover{
        transition: background-color 0.5s;
        background-color: white;
        color: navy;
        font-weight: bold;
    }
    .products{
        background-color: #AAAAAA;
    }


</style>
       </head>
        <body>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = (isset($_POST['name']) ? $_POST['name']:null);
        $tele =(isset($_POST['telephone']) ? $_POST['telephone']:null);
        $ad = (isset($_POST['address']) ? $_POST['address']:null);
        if(!empty($name) && !empty($tele) && !empty($ad)){
                echo"<script>alert('Thank you for purchising the following products, please ready your cash for the payment.')</script>";
        }
        else{
            echo"<script>alert('Please fill up the necessary informations')</script>";
        }
    }
?>


            <div class="BGPIC">
                <div class="BAR">
                    <img src="../html/VYKES.jpg" class="LOGOPIC">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="product.html">BIKES</a></li>
                        <li><a href="Gears.html">GEARS</a></li>
                        <li><a href="ABOUTUS.html">ABOUT US</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                    </ul>
                </div>
            </div>



<div class="bg">



    <div class = "title">
        <p>Checkout Details
    </div>
    
    <h1>Reciever Information</h1>
    <div class="address">
    <form method="post">
        <ul>
        <li><input type="tel" name="telephone" placeholder="Phone Number">  </li>
        <li><input type="text" name="name" placeholder="Name of the Reciever"></li>
        <li><input type="text" name="address" placeholder="Put your complete address here"></li>
        </ul>
    </form>
    </div>        

    <h2>Selected Items</h2>
    <div class="products"><?php ?></div>

    <div class = "last">
        <form>
            <select name = "payment">
                <option disabled hidden selected>Choose Payment Method</option>
                <option>Cash on Delivery</option>
                <option disabled>Credit Card "coming soon"</option>
                <option disabled>Online Payment "coming soon"</option>
            </ul>
            </select>
            Total Payment: <?php ?>
        </form>
    </div>
<?php


?>
    <div class = "go">
        <form method="post">
        <input type="submit" name="pay" value="Order">
        </form>
    </div>
</div>

    </body>
</html>