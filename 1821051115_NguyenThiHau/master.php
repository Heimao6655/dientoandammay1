<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>title</title>
    <script src="https://kit.fontawesome.com/d3fa3cecaa.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/index.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script>
            $(document).ready(function(){
                $(".tab0").show();
                $(".tab1").hide();
                $(".tab2").hide();
                $(".Collection").click(function(){
                    $(".tab1").show();
					$(".tab2").hide();
                    $(".tab0").hide();
                })
                $(".Shop").click(function(){
                    $(".tab2").show();
					$(".tab1").hide();
                    $(".tab0").hide();
                })
            })
    </Script>
</head>

<body>
    <!-- This is the header-->
    <header class="section header">
        <h1>HELLO</h1>
        <div class="right">
                <ul class="menu">
                    <li><a href="#" onclick="tabs(this,0)" class="item active">Home</a></li>
                    <li ><a href="#" onclick="tabs(this,1)" class="Collection item">Collection<i class="fas fa-caret-down" style="margin-left: 5px"></i></a></li>
                    <li ><a href="#" onclick="tabs(this,2)" class="Shop item">Shop<i class="fas fa-caret-down" style="margin-left: 5px"></i></a></li>
                </ul>
            </div>
        <!-- Here is the menu-->    
    </header>
    <!-- This is the content-->
    <div class="content">
        <div class="tab0 active">
            <h2>This is home</h2>
            <div >
                <img src="img/AAHcQjm.jpg"/>
            </div>
        </div>
            <div class="tab1">
            <?php
                require "1.php";
            ?>
        </div>
            <div class="tab2">
            <?php
                require "2.php";
            ?>
        </div>
    <!-- Here is the footer-->
    <div class=" foooter">
        <div class="container">
            <div class="row">
                <h5 style="font-weight: bold">SUBSCRIBE NOW</h5>
                <h4>Get our updates always fast</h4>
                <h5>Your personal data will be always keep safe</h5>
                <form method="post" action="#">
                    <input type="email" name="email" placeholder="Email..." required/>
                    <button type="submit"><i style="margin-left: -5px" class="fas fa-chevron-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>