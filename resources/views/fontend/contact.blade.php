<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_20/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 02:33:07 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>
<body>
<div class="page-wrapper">
    <header class="header">
        <div class="header-middle sticky-header">
            <div class="container-fluid">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-center">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li>
                                <a href="#" class="sf-with-ul">Shop</a>

                                <ul>
                                    @foreach($ca as $value)
                                        <li><a href="{{url("/details")}}">{{$value->cate_name}}</a></li>
                                        @endforeach
                                        </li>
                                </ul>
                            </li>
                            <li><a href="{{"/home"}}">My account</a></li>
                            <li><a href="{{"/contact"}}">Contact</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                        </ul>
                    </nav>
                    <div class="header-contact">
                        <i class="icon-phone"></i>
                        <a href="tel:#">+123 457 9012</a>
                    </div><!-- End .header-contact -->
                </div><!-- End .header-center -->

                <div class="header-right">
                    <button class="mobile-menu-toggler" type="button">
                        <i class="icon-menu"></i>
                    </button>
                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span class="cart-count">2</span>
                        </a>

                        <div class="dropdown-menu" >
                            <div class="dropdownmenu-wrapper">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Woman Ring</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $99.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                        </figure>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Woman Necklace</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $35.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                        </figure>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$134.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn">View Cart</a>
                                    <a href="checkout-shipping.html" class="btn">Checkout</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdownmenu-wrapper -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container-fluid -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div><!-- End .container-fluid -->
        </nav>

        <div class="page-header">
            <div class="container">
                <h1>Contact Us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="container">
            <div id="map"></div><!-- End #map -->

            <div class="row">
                <div class="col-md-8">
                    <h2 class="light-title">Write <strong>Us</strong></h2>

                    <form action="#">
                        <div class="form-group required-field">
                            <label for="contact-name">Name</label>
                            <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="contact-email">Email</label>
                            <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                        </div><!-- End .form-group -->

                        <div class="form-group">
                            <label for="contact-phone">Phone Number</label>
                            <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="contact-message">What’s on your mind?</label>
                            <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                        </div><!-- End .form-group -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-8 -->

                <div class="col-md-4">
                    <h2 class="light-title">Contact <strong>Details</strong></h2>

                    <div class="contact-info">
                        <div>
                            <i class="icon-phone"></i>
                            <p><a href="tel:">0201 203 2032</a></p>
                            <p><a href="tel:">0201 203 2032</a></p>
                        </div>
                        <div>
                            <i class="icon-mobile"></i>
                            <p><a href="tel:">201-123-3922</a></p>
                            <p><a href="tel:">302-123-3928</a></p>
                        </div>
                        <div>
                            <i class="icon-mail-alt"></i>
                            <p><a href="mailto:#">porto@gmail.com</a></p>
                            <p><a href="mailto:#">porto@portotemplate.com</a></p>
                        </div>
                        <div>
                            <i class="icon-skype"></i>
                            <p>porto_skype</p>
                            <p>porto_template</p>
                        </div>
                    </div><!-- End .contact-info -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-8"></div><!-- margin -->
    </main><!-- End .main -->

    <footer class="footer">
        <div class="footer-middle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <img src="assets/images/logo-white.png" alt="Porto footer logo" class="footer-logo">
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-2 -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Featured</h4>
                            <ul class="links">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">women</a></li>
                                <li><a href="#">boys</a></li>
                                <li><a href="#">Girls</a></li>
                                <li><a href="#">new arrivals</a></li>
                                <li><a href="#">shoes</a></li>
                                <li><a href="#">clothes</a></li>
                                <li><a href="#">accessories</a></li>
                            </ul>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-2 -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Menu</h4>

                            <ul class="links">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#" class="login-link">Login</a></li>
                            </ul>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-2 -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="contact-info">
                                <li>
                                    <span class="contact-info-label">Address:</span>123 Street Name, City, <br>United states
                                </li>
                                <li>
                                    <span class="contact-info-label">Phone:</span><a href="tel:">(123) 456-7890</a>
                                </li>
                                <li>
                                    <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                </li>
                                <li>
                                    <span class="contact-info-label">Working Days/Hours:</span>
                                    Mon - Sun / 9:00AM - 8:00PM
                                </li>
                            </ul>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-2 -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Follow Us</h4>

                            <ul class="social-info">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icon-facebook"></i>
                                        <span>/portoeccomerce</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icon-instagram"></i>
                                        <span>/porto</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icon-twitter"></i>
                                        <span>/portoofficial</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-2 -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget widget-newsletter">
                            <h4 class="widget-title">Join Us</h4>

                            <p>Join the world <br>of porto ecommerce</p>

                            <form action="#">
                                <input type="email" class="form-control" placeholder="YOUR EMAIL" required>

                                <input type="submit" class="btn" value="Send">
                            </form>
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-2 -->

                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .footer-middle -->
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-2">
                        <p class="footer-copyright">&copy; Porto eCommerce. 2017. All Rights Reserved</p>
                    </div><!-- End .col-lg-10 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html">Categories</a>
                    <ul>
                        <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">Product List Item Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                        <li><a href="category-3col.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle"></h4>
                <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                    <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>



<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.min.js"></script>

<!-- Google Map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
<script src="assets/js/map.js"></script>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_20/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 02:33:08 GMT -->
</html>
