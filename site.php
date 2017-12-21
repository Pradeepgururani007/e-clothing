<?php
    session_start();     
    require("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="e-clothing/jquery-1.12.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {

      max-height: 40px;
      opacity: 0.7;
    
    }

    .div container-fluid{

      margin-top: 4px;

    }

    .thumbnail{

        width:340px;
        border-image-outset: 12px;
        border-image-width: 12px;
    }
    /* Add a gray background color and some padding to the footer */
    .footer {
	  color: #003399;
    text-align: center;
    font-family: calibri;
    font-size: 20px;
    opacity: 0.9px;


    }

    body{
     
      stretch=true;
    }


    .btn {
      text-transform: uppercase;
      position:absolute ;
      margin-bottom: 15px;
      color: #fff;
      opacity: 0.1px
      padding: 25px 80px 25px 80px;
      font-size: 18px;
      }

    .col-md-3 img {
      max-height: 300px;
      max-width: 400px;
 
     } 

     

     .HR{

      color: black;

     }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">e-clothing</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="bag.php" class="btn btn-inverse btn-lg "><span class="glyphicon glyphicon-user" alt="Your Account"></span></a></li>
         <li><a href="bag.php" class="btn btn-inverse btn-lg "><span class="glyphicon glyphicon-heart" alt="Your wishlist"></span></a></li>
        <li><a href="bag.php" class="btn btn-inverse btn-lg "> <img src="images/bag.png" height="25px"width="25px" class="img-rounded img-responsive"></a></li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>

        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 700,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        .div -jssor_1 {

            margin-top: 30px;

        }
      
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }

        .div-jssor_1{

            margin-bottom: 20px;

        }



    </style>

    <br><br>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1270px; height: 650px;">
        
        <!-- Loading Screen -->
        <!--<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=60); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>-->
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1270px; height: 650px; overflow: hidden;">
          
            <div data-p="225.00" style="display: none;" title="men-clothing">
                <img data-u="image" src="images/men.jpg"  />

            </div>
            <div data-p="225.00" style="display: none;" title="women-clothing">
                <img data-u="image" src="images/women.jpg" />
            </div>
            <div data-p="225.00" style="display: none;" title="boys-clothing">
                <img data-u="image" src="images/boys.jpg" />
            </div>
            <div data-p="225.00" style="display: none;"  title="girls-clothing" >
                <img data-u="image" src="images/girls.jpg"/>
            </div>
                 
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

    <!-- #endregion Jssor Slider End -->
  <div class="row">
      <div class="col-md-3">

            <a href="men.php" class="thumbnail" ><img src="images\men1.jpg" class="img-responsive"></a>
          

      </div>
      
      <div class="col-md-3"> 
     
          <a href="women.php" class="thumbnail"><img src="images\women1.jpg" class="img-responsive" ></a>

      </div>
      <div class="col-md-3"> 

         <a href="boys.php"  class="thumbnail"><img src="images\boys1.jpg" class="img-responsive" ></a>

      </div>

      <div class="col-md-3">

         <a href="girls.php"class="thumbnail"><img src="images\girls1.jpg" class="img-responsive" ></a>

      </div>

  </div>
   
<?php
  
  require ("footer.php"); 

?>

</body>
</html>
