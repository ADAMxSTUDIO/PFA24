<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Bi3 Smart</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <div class="logo_section bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo"><a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <form action="<?php echo e(route('order.store', ['product_id' => $product->id])); ?>" method="POST" class="ml-3">
        <?php echo csrf_field(); ?>
        <div class="fashion_section mt-5">
            <div class="container-fluid">
                <?php if(session()->has('orderError')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i>
                        <?php echo e(session('orderError')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                    <h1 class="fashion_taital" style="margin-bottom: 100px;"><?php echo e($product->category->label); ?></h1>
                    <div class="fashion_section_2 d-flex" style="gap: 70px;">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4" style="min-width: 600px; min-hight: 100%;">
                                <div class="box_main">
                                    <h4 class="shirt_text"><?php echo e($product->label); ?></h4>
                                    <p class="price_text">Price <span style="color: #262626;">$
                                            <?php echo e($product->price); ?></span></p>
                                    <div class="tshirt_img"><img src="<?php echo e(asset('storage/' . $product->poster)); ?>">
                                    </div>
                                    <div class="btn_main">
                                        <?php if($product->quantity <= 0): ?>
                                            <input type="disabled" class="buy_bt btn btn-light w-100"
                                                value="OUT OF STOCK">
                                        <?php else: ?>
                                            <input type="submit" class="buy_bt btn btn-warning w-100" value="BUY NOW">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h1><strong>Specifications</strong></h1><br>
                            <div class="label">
                                <h3>Label</h3>
                                <p><?php echo e($product->label); ?></p>
                            </div>
                            <div class="price">
                                <h3>Price</h3>
                                <p><?php echo e($product->price); ?> $</p>
                            </div>
                            <div class="category">
                                <h3>Category</h3>
                                <p><?php echo e($product->category->label); ?></p>
                            </div>
                            <div class="description" style="max-width: 500px;">
                                <h3>Description</h3>
                                <p><?php echo e($product->description); ?></p>
                            </div>
                            <div class="quantity">
                                <h3 class="mb-2">Quantity</h3>
                                <input type="number" name="quantity" value="1">
                                <small class="ml-3"><?php echo e($product->quantity); ?> article(s) are left</small>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </form>
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
                <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
                <ul>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Gift Ideas</a></li>
                    <li><a href="#">New Releases</a></li>
                    <li><a href="#">Today's Deals</a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
            </div>
            <div class="location_main">Help Line Number : <a href="#">+1 1800 1200 1200</a></div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">G5 - 3IIR: LAZREK ABDERRAHMANE</p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
<?php /**PATH C:\Users\ADAM\OneDrive\Documents\EMSI\3rd Grade\Phase 2\Projects\PFA\Realisation\app\resources\views/product/show.blade.php ENDPATH**/ ?>