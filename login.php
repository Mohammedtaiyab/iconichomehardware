<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
        <meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
        <meta name='copyright' content='MarketingOJO'>  
        
        <!-- Title Tag -->
        <title>Iconic Home Hardware</title>
        
        <!-- Favicon -->
    
        <link rel="icon" type="image/png" href="images/favicon.png">    
        
        <!-- Web Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Tromas CSS -->
        <link rel="stylesheet" href="css/theme-plugins.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">   
        
        <!-- Tromas Color -->
        <link rel="stylesheet" href="css/skin/skin1.css">
        <link rel="stylesheet" href="#" id="tromas">
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173650006-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173650006-1');
</script>   
        <style type="text/css">
                /*.logol{
                background-image: url("images/1.png");
                background-repeat: no-repeat;
                height: 100%;
                margin-left: 206px;*/
    .pad{
    padding-top: 120px;
}
            @media screen and (max-width: 600px) {
                .logol img{
                 width: 65%;
                     margin-left: 64px;
             
                }
                .logo img{
                width: 60%;

            }
                .address img{
                    width: 25%;
                }
                .f{
                       width: 287px;
                }
                .word {
  font: 600 normal 2.5em 'tahoma';
  }
.pad{
    padding-top: 0px;
}
            }
            .slicknav_nav a{
                    text-transform: uppercase;
            }
            .logo img{
                 width: 10rem;
                    height: auto;
            }
            .address img{
                    width: 15rem;
                    height: auto;
                }
            .call-to-action .btn {
                background-color: transparent;color: white; margin-top: -1px;
            }
            .call-to-action .btn a:hover{
                background-color: transparent;
            }
            .blog-head  img{
                        width: 350px;
                        height: 250px;
            }
            .blog-info p{
                text-transform: capitalize;
            }
.blog-main .single-blog {
    height: 350px;
   }
                .word {
  margin: auto;
  color: black;
  font: 700 normal 2.5em 'tahoma';
 font-family: 'Patua One', cursive;
  }
    .logol img{
                 margin-top: 20px;
            }
.form {
      margin: 1px -4px 25px -26px;
    position: relative;
    z-index: 1;
    background:#b1bbc5;
    /* max-width: 360px; */
    /* margin: 0 auto 100px; */
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
.form {

  /* Center vertically and horizontally */
  position: absolute;
  margin: -25px 0 0 -25px; /* apply negative top and left margins to truly center the element */
}
        </style>
    </head>
    <body id="bg">
        <div id="layout" class="">
            
                    <!-- Start Hero Area -->
            <section class="hero-area style2 creative">
                
                    <!-- Single Slider --> 
                    <div class="single-slider">
                        <div class="background-layer">
                            <div class="single-layer one"></div>
                            <div class="single-layer two"></div>
                            <div class="single-layer three"></div>
                            <div class="single-layer four"></div>
                            <div class="single-layer five"></div>
                        </div>
                        <div class="container">
                       <!--      <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> -->
                                    <h3 class="pad"></h3>
<!-- <img src="images/admlog.png" alt="logo" > -->
                                       
  <div class="form">
     <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
   <!--  <img src="images/mainlogo.png" style="width: 12rem;"> -->
 <img src="images/admlog.png" >
  <!--  <h2>Login</h2> -->
<form action="verify.php" method="POST">
    <input type="email" class="form-control" style="margin-top: 14px;" name="email" placeholder="Email" required>
       <input type="password" class="form-control" name="password" placeholder="Password" required>
      <button type="submit" class="btn" name="login">Login</button>
           <!--   <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>
     <!--  <div class="field_error"><?php echo $msg?></div> -->
    <a href="password_forgot.php">I forgot my password</a><br>
    
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
  </div>

                             <!--    </div>
                            </div>
                     -->
                    </div>
                 

            </section>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var words = ['MARKETING OJO', 'Eyes That Your Business Needs'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});
    </script>
            
            <!-- Jquery -->
            <script src="js/jquery.min.js" type="text/javascript"></script>
            <!-- Bootstrap JS -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- Modernizer JS -->
            <script src="js/modernizr.min.js" type="text/javascript"></script>
            <!-- Tromas JS -->
            <script src="js/tromas.js" type="text/javascript"></script>
            <!-- Tromas Plugins -->
            <script src="js/theme-plugins.js" type="text/javascript"></script>
            <!-- Google Map JS -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>  
            <script src="js/gmap.min.js"  type="text/javascript" ></script>
            <!-- Main JS -->
            <script src="js/main.js" type="text/javascript"></script>
        </div>
    </body>
</html>