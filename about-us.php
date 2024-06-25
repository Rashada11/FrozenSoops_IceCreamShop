<?php

   include 'components/connect.php';

   if(isset($_COOKIE['user_id'])){
      $user_id = $_COOKIE['user_id'];
   }else{
      $user_id = '';
      
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/user_style.css">
    <title>FROZENSCOOPS - home page</title>
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <span><a href="home.html">home</a><i class='bx bx-right-arrow-alt'></i>about us</span>
        </div>
    </div>
    <div class="chef">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>Alex Doe</span>
                    <h1>Masterchef</h1>
                    <img src="image/separator-img.png" alt="">
                </div>
                <p>Maria is a Roman-born pastry chef who spent 15 years in his city Rome perfecting his craft and exceptional creations. Vestibulum rhoncus ornare tincidunt. Etiam pretium metus sit amet est aliquet vulputate. Fusce et cursus ligula. Sed accumsan dictum porta. Aliquam rutrum ullamcorper velit hendrerit convallis.</p>
                <div class="flex-btn">
                    <a href="" class="btn">explore our menu</a>
                    <a href="" class="btn">visit our shop</a>
                </div>
            </div>
            <div class="box">
                <img src="image/ceaf.png" alt="" class="img">
            </div>
        </div>
    </div>
    <div class="story">
        <div class="heading">
            <h1>Our Story</h1>
            <img src="image/separator-img.png" alt="">
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Suspendisse nisi et dolor ornare pellentesque. Nullam porttitor, <br> odio id facilisis dapibus, mauris dolor rhoncus elit, ultricies nulla eros at dui. <br> In suscipit leo sagittis aliquam. Integer tristique tempus urna. <br>et pharetra dui urna volutpat elit odio at.</p>
        <a href="shop.php" class="btn">our services</a>
    </div>
    <!-- -----------------about-us----------------- -->
    <div class="container">
        <div class="box-container">
            <div class="img-box">
                <img src="image/about.png" alt="">
            </div>
            <div class="box">
                <div class="heading">
                    <h1>Taking Ice Cream To New Heights</h1>
                    <img src="image/separator-img.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet elementum ante. Sed mattis sapien vel vestibulum lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce a fermentum leo. Integer sem nulla, pretium vel purus vel, venenatis vehicula turpis.</p>
                <a href="" class="btn">learn more</a>
            </div>
        </div>
        
    </div>
    <!-- -----------------team----------------- -->
    <div class="team">
        <div class="heading">
            <span>our team</span>
            <h1>Quality & Passion with our Services!</h1>
            <img src="image/separator-img.png" alt="">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/team-1.jpg" alt="" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="" class="shap">
                    <h2>Ralph Johnson</h2>
                    <p>Coffee Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-2.jpg" alt="" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="" class="shap">
                    <h2>Fiona Edwards</h2>
                    <p>Pastry Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-3.jpg" alt="" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="" class="shap">
                    <h2>Tom Knolltonns</h2>
                    <p>Coffee Chef</p>
                </div>
            </div>
        </div>
    </div>
    <div class="standers">
        <div class="detail">
            <div class="heading">
                <h1>Our Standarts</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse</p>
            <i class='bx bxs-heart'></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse</p>
            <i class='bx bxs-heart'></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse</p>
            <i class='bx bxs-heart'></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse</p>
            <i class='bx bxs-heart'></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse</p>
            <i class='bx bxs-heart'></i>
        </div>
    </div>

    <!-- -----------------testimonial----------------- -->
    <div class="testimonial">
        <div class="heading">
            <h1>testimonial</h1>
            <img src="image/separator-img.png" alt="">
        </div>
        <div class="testimonial-container">
            <div class="slide-row" id="slide">
              <div class="slide-col">
                    <div class="user-text">
                        <p>Zen Doan is a business analyst, entrepreneur and media proprietor, and investor. She also known as the best selling book author.</p>
                        <h2>Zen</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (1).jpg" alt="avatar">
                    </div>
                </div>
    
                <div class="slide-col">
                    <div class="user-text">
                        <p>Jonathan Koletic is an American internet entrepreneur and media proprietor, and investor. He is the founder of the multi-national technology company Treymont.</p>
                        <h2>Jonathan</h2>
                        <p>Treymont Inc.</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (2).jpg" alt="avatar">
                    </div>
                </div>
    
                <div class="slide-col">
                    <div class="user-text">
                        <p>Charlie Green is an European entrepreneur and media consultant, and investor. He is the founder of the Hallmark Inc.</p>
                        <h2>Charlie</h2>
                        <p>Hallmark Inc.</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (3).jpg" alt="avatar">
                    </div>
                </div>
              
               <div class="slide-col">
                    <div class="user-text">
                        <p>Sarah Dam is an American internet entrepreneur and media proprietor, and investor. She is the founder of the multi-national technology company Zara.</p>
                        <h2>Sarah</h2>
                        <p>Zara Inc.</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (4).jpg" alt="avatar">
                    </div>
                </div>

            </div>
        </div>
        
        <div class="indicator">
            <span class="btn1 active"></span>
            <span class="btn1"></span>
            <span class="btn1"></span>
            <span class="btn1"></span>
        </div>
    </div>
    <!-- -----------------testimonial----------------- -->
    <div class="mission">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <h1>our mission</h1>
                    <img src="image/separator-img.png" alt="">
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission.webp">
                    </div>
                    <div>
                        <h2>Mexican Chocolate</h2>
                        <p>A childhood favorite made larger than life, our celebration sheet cake features delicious homemade sprinkles.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission1.webp">
                    </div>
                    <div>
                        <h2>Vanila With Honey</h2>
                        <p>Layers of shaped marshmallow candies — bunnies, chicks, and simple flowers — make a memorable gift in a beribboned box</p>
                    </div>
                </div>
               <div class="detail">
                    <div class="img-box">
                        <img src="image/mission0.jpg">
                    </div>
                    <div>
                        <h2>Peppermint Chip</h2>
                        <p>Layers of shaped marshmallow candies — bunnies, chicks, and simple flowers — make a memorable gift in a beribboned box</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission2.webp">
                    </div>
                    <div>
                        <h2>Raspberry Sorbet</h2>
                        <p>Layers of shaped marshmallow candies — bunnies, chicks, and simple flowers — make a memorable gift in a beribboned box</p>
                    </div>
                </div>

            </div>
            <div class="box">
                <img src="image/form.png" class="img">
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>