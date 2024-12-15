<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="search/search.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>

    <script>
        $(document).ready(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $( ".a4" ).click(function() {
                $( ".search" ).slideToggle( "slow" );
            });
        }); 
    </script>

     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<!--=======================header========================-->

<div id="header">
    <div class="brd">
        <div class="container_12">
            <div class="grid_12">
                <div class="socials">
                    <a href="#"><span class="fa-google-plus fa"></span></a>
                    <a href="#"><span class="fa-twitter fa"></span></a>
                    <a href="#"><span class="fa-facebook fa"></span></a>
                    <a href="#"><span class="fa-pinterest fa"></span></a>
                    <a href="#"><span class="fa-linkedin fa"></span></a>
                    <a href="#"><span class="fa-rss fa"></span></a>
                </div>
                <div class="div1">
                    <div class="div2">
                        <span class="sp1">24/7 Support:</span>
                        <span class="fa-phone fa"></span>+1 959 603 6035</div>
                    <div class="div2"><a href="#"><span class="fa-envelope-o fa"></span>mail@demolink.org</a></div>
                    <div class="div2">
                        <a class="a4" href="#"><span><img src="images/search.png" alt=""></span>Search</a>
                        <div class="search">
                            <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                                <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}"/>
                                <a class="a7" onclick="document.getElementById('search').submit()"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="brd2">
        <div class="container_12">
            <div class="grid_12">
                <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
                <div class="menu clearfix">
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="index.html">Home</a> </li>
                            <li><a href="index-1.html">About Us</a></li>
                            <li><a href="index-2.html">Profile</a>
                                <ul>
                                    <li><a href="#">Vestibulum iaculis</a></li>
                                    <li><a href="#">Fusce euismod conuat</a>
                                        <ul>
                                            <li><a href="#">Pellentesque sed</a></li>
                                            <li><a href="#">Aliquam congue ferm</a></li>
                                            <li><a href="#">Mauris accum</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pellentesque</a></li>
                               </ul>
                            </li>
                            <li><a href="index-3.html">Products</a></li>
                            <li><a href="index-4.html">Sales Network</a></li>
                            <li><a href="index-5.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>

<!--====================content===================-->
<div id="content">
    <div class="container_12">
        <div class="grid_12 ">
            <h6>Search result:</h6>
        	<div id="search-results"></div>
        </div>
    </div> 
</div>

<!--====================footer====================-->

<footer>
    <div class="container_12">
        <div class="row">
            <div class="grid_3">
                <div class="div6 maxheight">
                    <h6>Products</h6>
                    <ul class="list2">
                        <li><a href="#">Ceiling system</a></li>
                        <li><a href="#">Drywall partition</a></li>
                        <li><a href="#">Wall angle</a></li>
                        <li><a href="#">Corner bead</a></li>
                        <li><a href="#">Accessory</a></li>
                        <li><a href="#">Tee grid</a></li>
                    </ul>
                </div>
            </div>
            <div class="grid_3">
                <div class="div6 maxheight">
                    <h6>Industries</h6>
                    <ul class="list2">
                        <li><a href="#">Apartments &amp; Hospitality</a></li>
                        <li><a href="#">Commercial &amp; Industrial</a></li>
                        <li><a href="#">Condominiums</a></li>
                        <li><a href="#">Municipalities</a></li>
                        <li><a href="#">Retail</a></li>
                        <li><a href="#">Schools and Universities</a></li>
                    </ul>
                </div>
            </div>
            <div class="grid_3">
                <div class="div6 maxheight">
                    <h6>GLOBAL NETWORK</h6>
                    <ul class="list2">
                        <li><a href="#">Asia Pacific</a></li>
                        <li><a href="#">Canada</a></li>
                        <li><a href="#">Europe, Middle East &amp; Africa</a></li>
                        <li><a href="#">Latin America</a></li>
                        <li><a href="#">United States</a></li>
                    </ul>
                    <h6 class="pad4">About</h6>
                    <ul class="list2">
                        <li><a href="#">Philosophy</a></li>
                        <li><a href="#">Fact Sheet</a></li>
                        <li><a href="#">Leadership Team</a></li>
                        <li><a href="#">Advisors</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="grid_3">
                <div class="maxheight">
                    <h1><a href="index.html"><img src="images/logo_footer.png" alt=""></a></h1>
                    <div class="div7">Quisque nulla. Vestiero nisl, porta vel, scelerisque eget, malesda at, neque. Vivamus eget nibh. Etiarsus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultricposuere cubilia Curae; Suspendisse sollicitudin velit s pharetra augue n augue. Nam eliagna, endametincidunt ac, viva sed, nulla. Donec porta diam. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede.</div>
                    <p class="p4">+1 959 603 6035</p>
                    <div class="privacy">&copy; <span id="copyright-year"></span>Damien’s Metal Import-Export.<div><a href="index-6.html">Privacy Policy</a></div></div>
                </div>
            </div>
        </div>
        <div class="grid_12">
            <div class="div8">
                <ul id="footer_menu">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="index-1.html">About Us</a></li>
                    <li><a href="index-2.html">Profile</a></li>
                    <li><a href="index-3.html">Products</a></li>
                    <li><a href="index-4.html">Sales Network</a></li>
                    <li><a href="index-5.html">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>