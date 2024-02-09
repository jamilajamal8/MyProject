<?php

session_start();

include("functions/functions.php");

include("includes/db.php");
?>

<!DOCTYPE html><!-- HTML5 Declaration-->
<html>

    <head>
        <title>Online shopping for electronics</title>

        <link rel="stylesheet" href="styles/style.css" media="all" />
    </head>
    
    <body>

        <!--Main container starts here-->
        <div class="main_wrapper">
            
            <div class="header_wrapper">
                
            <div class="header_logo">
                <a href="index.php">
                    <img id="logo" src="images/metrixcode100x30.png" />
                </a>
            </div><!--/.header_logo-->

            <div id="form">
                <form method="get" action="result.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Serach a Product" />
                <input type="submit" name="search" value="Search" />
            </form>
            </div>

            <div class="cart">
                <ul>
                    <li class="dropdown_header_cart">
                        <div id="notification_total_cart" class="shopping-cart">
                            <img src="images/cart_icon.png" id="cart_image">
                            <div class="noti_cart_number">
                                <?php total_items() ?>
                            </div>
                        </div><!-- /.noti_cart_number -->
                    </li>
                </ul>
            </div>

            <div class="register_login">
                <div class="login"><a href="index.php?action=login">login</a></div>
                <div class="register"><a href="register.php">Register</a></div>
            </div>

        </div><!--/.header_wrapper-->