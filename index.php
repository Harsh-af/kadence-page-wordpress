<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadence - Musical Instruments</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;400;700&family=Instrument+Sans:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="website-content">
        <!-- Moving Text Strip -->
        <div class="moving-text-strip">
            <div class="moving-text-content">
                <span>
                    Express delivery &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy returns &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Courses &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy EMI &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Delivery &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; 
                </span>
                <span>
                    Express delivery &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy returns &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Courses &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy EMI &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Delivery •
                </span>
                <span>
                    Express delivery &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy returns &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Courses &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy EMI &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Delivery •
                </span>
                <span>
                    Express delivery &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy returns &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Courses &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy EMI &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Delivery •
                </span>
                <span>
                    Express delivery &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy returns &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Courses &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Easy EMI &nbsp;  &nbsp; &nbsp; • &nbsp;  &nbsp; &nbsp; Free Delivery •
                </span>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/Logo.svg" alt="Logo" class="navbar-logo" />
            
            <div class="navbar-search">
                <input type="text" class="search-input" placeholder='SEARCH FOR " GUITARS "' />
                <img src="<?php echo get_template_directory_uri(); ?>/Images/Search icon.svg" alt="Search" class="search-icon" />
            </div>
            
            <div class="navbar-right">
                <img src="<?php echo get_template_directory_uri(); ?>/Images/Cart icon.svg" alt="Cart" class="navbar-icon" />
                <img src="<?php echo get_template_directory_uri(); ?>/Images/User icon.svg" alt="User" class="navbar-icon" />
                <button class="signup-login-btn">Sign up / Log in</button>
            </div>
        </nav>

        <!-- Text Strip -->
        <div class="text-strip">
            <p>ACCESSORIES</p>
            <p>GUITARS</p>
            <p>UKULELES</p>
            <p>VIOLINS</p>
            <p>DIGITAL PIANOS</p>
            <p>FLUTES & MORE</p>
            <p>DRUMS</p>
            <p>PERCUSSIONS</p>
            <p>AMPLIFIERS</p>
        </div>

        <!-- Main View PC -->
        <div class="main-view_pc">
            <div class="title-container_pc">
                <h1 class="main-title_pc">Back to school</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/Images/music_icon.svg" alt="Music Icon" class="music-icon_pc" />
            </div>
            <p class="main-subtitle_pc">
                We are also involved in educating music enthusiasts at different skill levels.
            </p>
        </div>

        <!-- Main View Mobile -->
        <div class="main-view_sp">
            <div class="title-container_sp">
                <h1 class="main-title_sp">Back to school</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/Images/music_icon.svg" alt="Music Icon" class="music-icon_sp" />
            </div>
            <p class="main-subtitle_sp">
                Find the perfect instrument for your musical journey
            </p>
            <div class="main-image-container_sp">
                <div class="mobile-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/Images/Image_sp.png" alt="Main" class="main-image_sp" />

                    <!-- Mobile Image Pointers -->
                    <div class="image-pointers mobile-pointers">
                        <button class="image-pointer mobile-image-pointer active" style="left: 10%; top: 50%;" onclick="goToSlide(0)"></button>
                        <button class="image-pointer mobile-image-pointer" style="left: 45%; top: 53%;" onclick="goToSlide(1)"></button>
                        <button class="image-pointer mobile-image-pointer" style="left: 72%; top: 55%;" onclick="goToSlide(2)"></button>
                        <button class="image-pointer mobile-image-pointer" style="left: 74%; top: 69%;" onclick="goToSlide(3)"></button>
                    </div>
                </div>
            </div>
            <?php
            $mobile_args = array(
                'post_type' => 'product',
                'posts_per_page' => 4
            );
            $mobile_loop = new WP_Query($mobile_args);
            if ($mobile_loop->have_posts()) :
            ?>
            <div class="mobile-product-slider_sp">
                <div class="mobile-slider-container_sp" id="mobileSlider">
                    <div class="mobile-slider-track_sp" id="mobileSliderTrack">
                        <?php while ($mobile_loop->have_posts()) : $mobile_loop->the_post();
                            global $product; ?>
                            <div class="mobile-product-card_sp">
                                <div class="mobile-product-image_sp">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo $product->get_image(); ?>
                                    </a>
                                </div>
                                <div class="mobile-product-info_sp">
                                    <h3 class="mobile-product-title_sp"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="mobile-price-container_sp">
                                        <?php 
                                        $regular_price = $product->get_regular_price();
                                        $sale_price = $product->get_sale_price();
                                        $current_price = $product->get_price();
                                        
                                        if ($sale_price) {
                                            $discount = round((($regular_price - $sale_price) / $regular_price) * 100);
                                        ?>
                                            <span class="price">₹<?php echo number_format($sale_price, 2, '.', ','); ?></span>
                                            <span class="price-discount">₹<?php echo number_format($regular_price, 2, '.', ','); ?></span>
                                            <span class="discount-percentage"><?php echo $discount; ?>% OFF</span>
                                        <?php } else { ?>
                                            <span class="price">₹<?php echo number_format($current_price, 2, '.', ','); ?></span>
                                        <?php } ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"><button class="mobile-shop-now-button_sp">Shop now</button></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>

        <!-- Slider View -->
        <div class="slider-view">
            <div class="slider-container">
                <div class="static-image">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/Image_pc.png" alt="Static Image" class="desktop-image" />
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/Image_sp.png" alt="Static Image Mobile" class="mobile-image" />

                        <!-- PC Image Pointers -->
                        <div class="image-pointers desktop-pointers">
                            <button class="image-pointer active" style="left: 15%; top: 40%;" onclick="goToProduct(0)"></button>
                            <button class="image-pointer" style="left: 35%; top: 25%;" onclick="goToProduct(1)"></button>
                            <button class="image-pointer" style="left: 55%; top: 60%;" onclick="goToProduct(2)"></button>
                            <button class="image-pointer" style="left: 75%; top: 45%;" onclick="goToProduct(3)"></button>
                        </div>
                    </div>
                </div>

                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                ?>
                    <div class="product-slider" style="display: flex; flex-direction: column;">
                        <div class="product-content" style="position: relative; min-height: 400px;">
                            <?php while ($loop->have_posts()) : $loop->the_post();
                                global $product; ?>
                                <div class="product-info fade-in" data-product-id="<?php echo get_the_ID(); ?>" style="position: absolute; top: 0; left: 0; width: 100%; opacity: 0; transition: opacity 0.3s ease;">
                                    <div class="product-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo $product->get_image(); ?>
                                        </a>
                                    </div>

                                    <h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                    <div class="price-container">
                                        <?php 
                                        $regular_price = $product->get_regular_price();
                                        $sale_price = $product->get_sale_price();
                                        $current_price = $product->get_price();
                                        
                                        if ($sale_price) {
                                            $discount = round((($regular_price - $sale_price) / $regular_price) * 100);
                                        ?>
                                            <span class="price">₹<?php echo number_format($sale_price, 2, '.', ','); ?></span>
                                            <span class="price-discount">₹<?php echo number_format($regular_price, 2, '.', ','); ?></span>
                                            <span class="discount-percentage"><?php echo $discount; ?>% OFF</span>
                                        <?php } else { ?>
                                            <span class="price">₹<?php echo number_format($current_price, 2, '.', ','); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <div class="slider-navigation" style="position: relative; z-index: 10; margin-top: 20px; text-align: center;">
                            <button class="nav-button" onclick="prevProduct()"><img src="<?php echo get_template_directory_uri(); ?>/Images/nav_arrow_left.svg" alt="Previous" /></button>
                            <button class="nav-button" onclick="nextProduct()"><img src="<?php echo get_template_directory_uri(); ?>/Images/nav_arrow_right.svg" alt="Next" /></button>
                        </div>
                    </div>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <div class="footer-container">
        <div class="banner-image">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/banner_image_pc.png" alt="Banner" class="desktop-image" />
            <img src="<?php echo get_template_directory_uri(); ?>/Images/banner_image_sp.png" alt="Banner" class="mobile-image" />
        </div>
        
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo-section">
                    <img src="<?php echo get_template_directory_uri(); ?>/Images/Logo.svg" alt="KADENCE Logo" class="company-logo" />
                    
                    <div class="country-flags">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/countries.png" alt="Country Flags" />
                    </div>
                    
                    <p class="company-unit">A UNIT OF CREDURGE PVT LTD.</p>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/map-pin.svg" alt="Location" class="contact-icon" />
                            <span>3RD FLOOR, MAHANANDI PLAZA, ST. Marks Road, Bangalore -560001</span>
                        </div>
                        
                        <div class="contact-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/mail.svg" alt="Email" class="contact-icon" />
                            <span>support@kadence.in</span>
                        </div>
                    </div>
                    
                    <div class="social-media">
                        <p class="follow-text">FOLLOW US AT</p>
                        <div class="social-icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/facebook.svg" alt="Facebook" class="social-icon" />
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/instagram.svg" alt="Instagram" class="social-icon" />
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/linkedin.svg" alt="LinkedIn" class="social-icon" />
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-section">
                <h3 class="footer-title">RECENT POSTS</h3>
                <div class="recent-posts">
                    <div class="post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/recent_posts_1.png" alt="Recent Post 1" />
                        <div class="post-content">
                            <h4 class="post-title">Do Digital pianos ever go out of tune ?</h4>
                            <p class="post-date">JUNE 23,2025</p>
                        </div>
                    </div>
                    
                    <div class="post-separator"></div>
                    
                    <div class="post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/recent_posts_2.png" alt="Recent Post 2" />
                        <div class="post-content">
                            <h4 class="post-title">Do Digital pianos ever go out of tune ?</h4>
                            <p class="post-date">JUNE 23,2025</p>
                        </div>
                    </div>
                    
                    <div class="post-separator"></div>
                    
                    <div class="post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/recent_posts_3.png" alt="Recent Post 3" />
                        <div class="post-content">
                            <h4 class="post-title">Do Digital pianos ever go out of tune ?</h4>
                            <p class="post-date">JUNE 23,2025</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-section">
                <h3 class="footer-title">QUICK LINKS</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ's & service</a></li>
                    <li><a href="#">Kadence xperience Stores</a></li>
                    <li><a href="#">Kadence Pro</a></li>
                    <li><a href="#">Track Your Order</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="terms-links">
                    <a href="#">Terms & conditions</a>
                    <span class="separator">|</span>
                    <a href="#">privacy Policy</a>
                </div>
                <div class="copyright">
                    © Copyright 2025 KADENCE.IN All Rights Reserved
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentProduct = 0;
        let currentSlide = 0;
        let isAnimating = false;

        // Get all product info elements dynamically
        function getProductElements() {
            return document.querySelectorAll('.product-info');
        }

        function nextProduct() {
            if (isAnimating) return;
            isAnimating = true;
            const productElements = getProductElements();
            const products = Array.from(productElements);
            
            // Hide current product
            if (products[currentProduct]) {
                products[currentProduct].style.opacity = '0';
            }
            
            setTimeout(() => {
                currentProduct = (currentProduct + 1) % products.length;
                
                // Show next product
                setTimeout(() => {
                    if (products[currentProduct]) {
                        products[currentProduct].style.opacity = '0';
                        setTimeout(() => {
                            products[currentProduct].style.opacity = '1';
                            updateImagePointers();
                            setTimeout(() => isAnimating = false, 50);
                        }, 50);
                    }
                }, 150);
            }, 150);
        }

        function prevProduct() {
            if (isAnimating) return;
            isAnimating = true;
            const productElements = getProductElements();
            const products = Array.from(productElements);
            
            // Hide current product
            if (products[currentProduct]) {
                products[currentProduct].style.opacity = '0';
            }
            
            setTimeout(() => {
                currentProduct = (currentProduct - 1 + products.length) % products.length;
                
                // Show previous product
                setTimeout(() => {
                    if (products[currentProduct]) {
                        products[currentProduct].style.opacity = '0';
                        setTimeout(() => {
                            products[currentProduct].style.opacity = '1';
                            updateImagePointers();
                            setTimeout(() => isAnimating = false, 50);
                        }, 50);
                    }
                }, 150);
            }, 150);
        }

        function goToProduct(index) {
            if (isAnimating || index === currentProduct) return;
            isAnimating = true;
            const productElements = getProductElements();
            const products = Array.from(productElements);
            
            // Hide current product
            if (products[currentProduct]) {
                products[currentProduct].style.opacity = '0';
            }
            
            setTimeout(() => {
                currentProduct = index;
                
                // Show target product
                setTimeout(() => {
                    if (products[currentProduct]) {
                        products[currentProduct].style.opacity = '0';
                        setTimeout(() => {
                            products[currentProduct].style.opacity = '1';
                            updateImagePointers();
                            setTimeout(() => isAnimating = false, 50);
                        }, 50);
                    }
                }, 150);
            }, 150);
        }

        function updateImagePointers() {
            const pointers = document.querySelectorAll('.desktop-pointers .image-pointer');
            pointers.forEach((pointer, index) => {
                pointer.classList.toggle('active', index === currentProduct);
            });
        }

        // Initialize: hide all products except the first one
        document.addEventListener('DOMContentLoaded', function() {
            const products = getProductElements();
            products.forEach((product, index) => {
                if (index !== 0) {
                    product.style.opacity = '0';
                } else {
                    product.style.opacity = '1';
                }
            });
        });

        function nextSlide() {
            currentSlide = (currentSlide + 1) % 4;
            updateMobileSlider();
            updateMobileImagePointers();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + 4) % 4;
            updateMobileSlider();
            updateMobileImagePointers();
        }

        function goToSlide(index) {
            if (index >= 0 && index < 4) {
                currentSlide = index;
                updateMobileSlider();
                updateMobileImagePointers();
            }
        }

        function updateMobileSlider() {
            const track = document.getElementById('mobileSliderTrack');
            track.style.transform = `translateX(-${currentSlide * 280}px)`;
        }

        function updateMobileImagePointers() {
            const pointers = document.querySelectorAll('.mobile-pointers .image-pointer');
            pointers.forEach((pointer, index) => {
                pointer.classList.toggle('active', index === currentSlide);
            });
        }

        let startX = 0;
        let startY = 0;
        let isScrolling = false;
        let isDragging = false;

        document.getElementById('mobileSlider').addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            isScrolling = false;
            isDragging = false;
        }, { passive: true });

        document.getElementById('mobileSlider').addEventListener('touchmove', function(e) {
            if (!isDragging) {
                const deltaX = Math.abs(e.touches[0].clientX - startX);
                const deltaY = Math.abs(e.touches[0].clientY - startY);
                isScrolling = deltaY > deltaX;
                isDragging = deltaX > 10 || deltaY > 10;
            }
        }, { passive: true });

        document.getElementById('mobileSlider').addEventListener('touchend', function(e) {
            if (!isScrolling && isDragging) {
                const endX = e.changedTouches[0].clientX;
                const deltaX = endX - startX;
                const threshold = 30;

                if (Math.abs(deltaX) > threshold) {
                    if (deltaX > 0) {
                        prevSlide();
                    } else {
                        nextSlide();
                    }
                }
            }
            isDragging = false;
        }, { passive: true });
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft') {
                prevProduct();
                prevSlide();
            } else if (event.key === 'ArrowRight') {
                nextProduct();
                nextSlide();
            }
        });
    </script>
</body>
</html>
