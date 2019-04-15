<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- style -->
<style>
    
    nav{
      position: fixed;
      background: rgba(0, 0, 0, 0.2);
      padding:0px 20px;
      z-index: 12;
      box-shadow: 1px 1px 8px black;
    }
    .box{
      margin-top: 20px;
      height: 1000px;
    }

    .tez-color{
      background-color: #3ad18a !important;
    }

    footer{
        position: relative;
        width: 100%;
        padding-bottom:0px;
        text-align: center;
        background-color: #3ad18a;
        background-image: url(./images/footer-img.png);
        background-repeat: repeat;
    }
    .page-footer{
      background-color: #3ad18a;
      padding-top: 1%;
    }


    /*side menu*/

    .var_nav
    {
    background:#ccc; 
    width:300px;
    height:70px;
    margin-bottom:5px;
    }
    .link_bg
    {
     width:70px;
     height:70px;
     background:#3ad18a;
     color:#fff;
     z-index: 2;
    }

    .link_title
    {
    position:absolute;
    width:100%;
    z-index:3;
    color:#fff;
    }
    .link_title:hover .iconNav
    {
    -webkit-transform:rotate(360deg);
    -moz-transform:rotate(360deg);
    -o-transform:rotate(360deg);
    -ms-transform:rotate(360deg);
    transform:rotate(360deg);  
    }
    .var_nav:hover .link_bg
    {
    width:100%;
    background:#3ad18a;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;  
    }
    .var_nav:hover a
    {
    font-weight:bold;
    -webkit-transition:all .5s ease-in-out;
    -moz-transition:all .5s ease-in-out; 
    -o-transition:all .5s ease-in-out; 
    -ms-transition:all .5s ease-in-out;
     transition:all .5s ease-in-out;  
    }
    .iconNav
    {
    position:relative;
    width:70px;
    height:70px;
    text-align:center;
    color:#fff;
    -webkit-transition:all .5s ease-in-out;
    -moz-transition:all .5s ease-in-out; 
    -o-transition:all .5s ease-in-out; 
    -ms-transition:all .5s ease-in-out;   
    float:left;
    transition:all .5s ease-in-out;   
    float:left;  
    }
    .iconNav i{top:22px;position:relative;}
    .anker{
    display:block;
    position:absolute;
    float:left;
    font-family:arial;
    color:#fff;
    text-decoration:none;
    width:100%;
    height:70px;
    text-align:center;
    }
    .anker span
    {
    margin-top:25px;
    display:block;
    font-size: 18px;
    font-weight: bold;
    }
    .sidenav{
      background-image: url(./images/footer-img.png) !important;
    }
    .sidediv{
      background-image: url(./images/footer-img.png);
      background-color: #2098d1;
    }
    .material-icons{
      font-size: 32px;
    }
</style>


  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="./images/logo.png" style="max-width: 50%;"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">format_list_bulleted</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Mobile</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li>
      <div class="sidediv">
        <img src="./images/logo.png" style="max-width: 50%;">
      </div>
    </li>
    <li class="var_nav">
      <div class="link_bg">
        <div class="link_title">
          <div class=iconNav> 
          <i class="icon-home icon-2x"></i>
          </div>
          <a class="anker" href="/"><span>Home</span></a>
        </div>
      </div>
     </li>
   <li class="var_nav">
      <div class="link_bg">
        <div class="link_title">
          <div class=iconNav> 
          <i class="icon-mobile-phone icon-2x"></i>
          </div>
          <a class="anker" href="#"><span>About Us</span></a>
        </div>
      </div>
   </li>
   <li class="var_nav">
      <div class="link_bg">
      <div class="link_title">
        <div class=iconNav> 
        <i class="icon-wrench icon-2x"></i>
        </div>
        <a class="anker" href="#"><span>Services</span></a>
      </div>
    </div>
   </li>
   <li class="var_nav">
      <div class="link_bg">
      <div class="link_title">
        <div class=iconNav> 
        <i class="icon-briefcase icon-2x"></i>
        </div>
      <a class="anker" href="product.php"><span>Product</span></a>
      </div>
    </div>
   </li>
  </ul>
         

<!-- script -->


  <script>
     
     $(document).ready(function(){
          
          $(window).scroll(function(){

            if($(window).scrollTop()>300){
              $('nav').addClass('tez-color');
            }else{
              $('nav').removeClass('tez-color');
            }

          });
     });
  </script>
 
