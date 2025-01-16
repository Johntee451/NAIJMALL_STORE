<?php 

session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
     
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (!empty($email) && !empty($password) && !is_numeric($email)) {

        $query = "select * from registration where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {
                
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    
                    header("location: contact.html");
                    die;
                }
            }
            
        }

        echo "<script type = 'text/javascript'> alert('Wrong Username Or Password') </script>";
    }

    echo "<script type = 'text/javascript'> alert('Wrong Username Or Password') </script>";

}

?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    <link rel="stylesheet" href="../STYLES/login.css">
    <link rel="stylesheet" href="../STYLES/footer.css">
    -->
    <link rel="stylesheet" href="../STYLES/NaijMall.css">
    
    <link rel="shortcut icon" href="../IMAGES/NaijMall-Logo3.png" type="image/x-icon">

    <title>login</title>

</head>
<body>



    <div class="header-Div">

        <div class="logo-Div">
            <div class="websiteLogo-Div">
                <a href="../index.html">
                    <img src="../IMAGES/NaijMall-Logo3.png" alt="NaijMall-Logo1">
                </a>
            </div>
        </div>
        
        <div class="nav-Div">

            <div class="navLink-Div">
                <a href="../index.html">
                    <img src="../IMAGES/icons8-home-50.png" alt="home icon">
                    HOME</a>
            </div>

            <div class="navLink-Div">
                <a href="../PAGES/about.html">
                    <img src="../IMAGES/icons8-info-popup-50.png" alt="about icon">
                    ABOUT</a>
            </div>

            <div class="navLink-Div">
                <a href="../PAGES/contact.html">
                    <img src="../IMAGES/icons8-call-50.png" alt="contact icon">
                    CONTACT</a>
            </div>

            <div class="navLink-Div">
                <a href="../PAGES/register.php">
                    <img src="../IMAGES/icons8-add-user-male-50.png" alt="register icon">
                    REGISTER</a>
            </div>

            <div class="navLink-Div">
                <a href="../PAGES/login.php">
                    <img src="../IMAGES/icons8-enter-100.png" alt="login icon">
                    LOGIN</a>
            </div>
        </div>


        <div class="nav-Div">

            <div class="navLink-Div">
                <a href="../PAGES/store.php" class="storeP2P">
                    <img src="../IMAGES/icons8-online-store-30.png" alt="store icon">
                    STORE</a>
            </div>


            <!--
            <div class="navLink-Div">
                <a href="../PAGES/p2p.html" class="storeP2P">
                    <img src="../IMAGES/icons8-currency-exchange-50.png" alt="p2p icon">
                    P2P</a>
            </div>
            -->

        </div>

        <div class="nav-Div">


            <!--
            <div class="navLink-Div">
                <a href="../PAGES/portfolio.html" class="portCart">
                    <img src="../IMAGES/icons8-wallet-50.png" alt="wallet icon">
                    PORTFOLIO</a>
            </div>
            -->

            <div class="navLink-Div">
                <a href="../PAGES/cart.html" class="portCart">
                    <img src="../IMAGES/icons8-shopping-cart-50.png" alt="cart icon">
                    CART
                </a>
            </div>

        </div>
        
    </div>
    


    <div class="login-Div">

        <div class="innerlogin-Div">

            <div class="logHeader-Div">
                <h1>YOU ARE WELCOME</h1>
                <h2>PLEASE KINDLY LOGIN</h2>
            </div>
    
            <form action="" method="POST">
                
                <div class="userPass-Div">
                    <label for="">EMAIL:</label><br>
                    <input type="text" name="email">
                </div>
        
                <div class="userPass-Div">
                    <label for="">PASSWORD:</label><br>
                    <input type="text" name="password">
                </div>

                <div class="userPassSubmit-Div">
                    <input type="submit" value="SUBMIT">
                </div>

            </form>
    
            <!--
            <div class="resetLog-Div">
                <div><button type="reset">RESET</button></div>
                <div><button type="submit">LOGIN</button></div>
            </div>
            -->
    
            <div class="forgetPass-Div">
                <div>
                    <a href="forget_password.html">FORGET PASSWORD?</a>
                </div>
            </div>

        </div>

    </div>
































    <div class="bodyFooter-Div">

        <div class="firstBodyFooter-Div">

            <div class="firstBodyFooterLogo-Div">
                <a href="../index.html">
                    <img src="../IMAGES/NaijMall-Logo3.png" alt="NaijMall-Logo1">
                </a>
                <p>
                    We make registering, <br>hosting, 
                    and managing domains for yourself <br>
                     or others easy and affordable, <br>
                     because the internet needs people.
                </p>
            </div>

            <div class="firstBodyFooterNews-Div">
                <p><b>Join Our Newsletter & Marketing Communication <br>
                    We'll send you news and offers.</b>
                </p>
                <input type="search" name="" id="" placeholder="Enter Your Email"><button type="submit">JOIN</button>
            </div>

        </div>





































        <div class="secondBodyFooter-Div">
            
            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Renewable Natural Resources</a></li>
                    <li><a href="#">Multidisciplinary Studies</a></li>
                    <li><a href="#">Environmental Design and Management</a></li>
                    <li><a href="#">Basic Medical Sciences</a></li>
                    <li><a href="#">Clinical Sciences</a></li>
                    <li><a href="#">Dentistry</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Public Health</a></li>
                    <li><a href="#">UI Bulletin</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Registry</a></li>
                    <li><a href="#">College of Medicine</a></li>
                    <li><a href="#">UI mail</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Agriculture & Forestry</a></li>
                    <li><a href="#">Veterinary</a></li>
                    <li><a href="#">Advancement</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">The Social Sciences</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Law</a></li>
                    <li><a href="#">Pharmacy</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">DLC</a></li>
                    <li><a href="#">CESDEV</a></li>
                    <li><a href="#">CPEEL</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Renewable Natural Resources</a></li>
                    <li><a href="#">Multidisciplinary Studies</a></li>
                    <li><a href="#">Environmental Design and Management</a></li>
                    <li><a href="#">Basic Medical Sciences</a></li>
                    <li><a href="#">Clinical Sciences</a></li>
                    <li><a href="#">Dentistry</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Public Health</a></li>
                    <li><a href="#">UI Bulletin</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Registry</a></li>
                    <li><a href="#">College of Medicine</a></li>
                    <li><a href="#">UI mail</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Agriculture & Forestry</a></li>
                    <li><a href="#">Veterinary</a></li>
                    <li><a href="#">Advancement</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">The Social Sciences</a></li>
                </ul>
            </div>

            <div class="secondBodyFooterList-Div">
                <ul>
                    <li><a href="#">Law</a></li>
                    <li><a href="#">Pharmacy</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">DLC</a></li>
                    <li><a href="#">CESDEV</a></li>
                    <li><a href="#">CPEEL</a></li>
                </ul>
            </div>

        </div>



    </div>














































    <div class="bodyLastFooter-Div">

        <div class="bodyLastFooterLink-Div">

            <a href="#">
                <img src="../IMAGES/amazon.png" alt="amazon">
            </a>

            <a href="#">
                <img src="../IMAGES/facebook.png" alt="facebook">
            </a>
        
            <a href="#">
                <img src="../IMAGES/gmail.png" alt="gmail">
            </a>
        
            <a href="#">
                <img src="../IMAGES/instagram.png" alt="instagram">
            </a>
        
            <a href="#">
                <img src="../IMAGES/telegram.png" alt="telegram">
            </a>
        
            <a href="#">
                <img src="../IMAGES/tiktok.png" alt="tiktok">
            </a>
        
            <a href="#">
                <img src="../IMAGES/whatsapp.png" alt="whatsapp">
            </a>
        
            <a href="#">
                <img src="../IMAGES/x.png" alt="x/twitter">
            </a>
        </div>

        <div class="bodyLastFooterCopyR-Div">
            <a href="#">copyright reserved</i></a>
        </div>

    </div>

</body>
</html>