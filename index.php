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
            <div class="mobile-product-slider_sp">
                <div class="mobile-slider-container_sp" id="mobileSlider">
                    <div class="mobile-slider-track_sp" id="mobileSliderTrack">
                        <div class="mobile-product-card_sp">
                            <div class="mobile-product-image_sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/guitar_1_sp.png" alt="Acoustic Left Handed Guitar" />
                            </div>
                            <div class="mobile-product-info_sp">
                                <h3 class="mobile-product-title_sp">Donner DDP-200PRO Digital Piano with Touchscreen...</h3>
                                <div class="mobile-price-container_sp">
                                    <span class="price">₹4,899.00</span>
                                    <span class="price-discount">₹7,506.00</span>
                                    <span class="discount-percentage">25%</span>
                                </div>
                                <button class="mobile-shop-now-button_sp">Shop now</button>
                            </div>
                        </div>
                        <div class="mobile-product-card_sp">
                            <div class="mobile-product-image_sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/guitar_2_sp.png" alt="Electric Guitar Red" />
                            </div>
                            <div class="mobile-product-info_sp">
                                <h3 class="mobile-product-title_sp">Electric Guitar Red with Accessories</h3>
                                <div class="mobile-price-container_sp">
                                    <span class="price">₹6,299.00</span>
                                    <span class="price-discount">₹8,999.00</span>
                                    <span class="discount-percentage">30%</span>
                                </div>
                                <button class="mobile-shop-now-button_sp">Shop now</button>
                            </div>
                        </div>
                        <div class="mobile-product-card_sp">
                            <div class="mobile-product-image_sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/guitar_1_sp.png" alt="Classic Acoustic Guitar" />
                            </div>
                            <div class="mobile-product-info_sp">
                                <h3 class="mobile-product-title_sp">Classic Acoustic Guitar Premium</h3>
                                <div class="mobile-price-container_sp">
                                    <span class="price">₹5,499.00</span>
                                    <span class="price-discount">₹7,999.00</span>
                                    <span class="discount-percentage">31%</span>
                                </div>
                                <button class="mobile-shop-now-button_sp">Shop now</button>
                            </div>
                        </div>
                        <div class="mobile-product-card_sp">
                            <div class="mobile-product-image_sp">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/guitar_2_sp.png" alt="Electric Guitar Red" />
                            </div>
                            <div class="mobile-product-info_sp">
                                <h3 class="mobile-product-title_sp">Electric Guitar Red with Accessories</h3>
                                <div class="mobile-price-container_sp">
                                    <span class="price">₹6,299.00</span>
                                    <span class="price-discount">₹8,999.00</span>
                                    <span class="discount-percentage">30%</span>
                                </div>
                                <button class="mobile-shop-now-button_sp">Shop now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

                <div class="product-slider">
                    <div class="product-content">
                        <div class="product-info fade-in" id="productInfo">
                            <div class="product-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/Product_1.png" alt="Product" id="productImage" />
                            </div>

                            <h3 class="product-title" id="productTitle">Donner DDP-200PRO Digital Piano with Touchscreen</h3>

                            <div class="price-container">
                                <span class="price" id="productPrice">₹4,899.00</span>
                                <span class="price-discount" id="productOriginalPrice">₹7,506.00</span>
                                <span class="discount-percentage" id="productDiscount">35% OFF</span>
                            </div>
                        </div>

                        <div class="slider-navigation">
                            <button class="nav-button" onclick="prevProduct()"><img src="<?php echo get_template_directory_uri(); ?>/Images/nav_arrow_left.svg" alt="Previous" /></button>
                            <button class="nav-button" onclick="nextProduct()"><img src="<?php echo get_template_directory_uri(); ?>/Images/nav_arrow_right.svg" alt="Next" /></button>
                        </div>
                    </div>
                </div>
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
        const products = [
            {
                id: 1,
                image: '<?php echo get_template_directory_uri(); ?>/Images/Product_1.png',
                title: 'Donner DDP-200PRO Digital Piano with Touchscreen',
                currentPrice: '₹4,899.00',
                originalPrice: '₹7,506.00',
                discount: '35% OFF'
            },
            {
                id: 2,
                image: '<?php echo get_template_directory_uri(); ?>/Images/Product_2.png',
                title: 'Donner HUSH™ I Acoustic-Electric Travel Guitar',
                currentPrice: '₹6,299.00',
                originalPrice: '₹8,999.00',
                discount: '30% OFF'
            },
            {
                id: 3,
                image: '<?php echo get_template_directory_uri(); ?>/Images/Product_3.png',
                title: 'Donner HUSH™ X PRO Electric Guitar',
                currentPrice: '₹5,499.00',
                originalPrice: '₹7,999.00',
                discount: '31% OFF'
            },
            {
                id: 4,
                image: '<?php echo get_template_directory_uri(); ?>/Images/Product_4.png',
                title: 'Donner HUSH™ C Nylon Acoustic-Electric Guitar',
                currentPrice: '₹8,499.00',
                originalPrice: '₹12,999.00',
                discount: '25% OFF'
            }
        ];

        let currentProduct = 0;
        let currentSlide = 0;
        let isAnimating = false;

        function nextProduct() {
            if (isAnimating) return;
            isAnimating = true;
            setTimeout(() => {
                currentProduct = (currentProduct + 1) % products.length;
                updateProductDisplay();
                updateImagePointers();
                setTimeout(() => isAnimating = false, 50);
            }, 150);
        }

        function prevProduct() {
            if (isAnimating) return;
            isAnimating = true;
            setTimeout(() => {
                currentProduct = (currentProduct - 1 + products.length) % products.length;
                updateProductDisplay();
                updateImagePointers();
                setTimeout(() => isAnimating = false, 50);
            }, 150);
        }

        function goToProduct(index) {
            if (isAnimating || index === currentProduct) return;
            isAnimating = true;
            setTimeout(() => {
                currentProduct = index;
                updateProductDisplay();
                updateImagePointers();
                setTimeout(() => isAnimating = false, 50);
            }, 150);
        }

        function updateProductDisplay() {
            const product = products[currentProduct];
            const productInfo = document.getElementById('productInfo');
            productInfo.classList.remove('fade-in');
            productInfo.classList.add('fade-out');
            setTimeout(() => {
                document.getElementById('productImage').src = product.image;
                document.getElementById('productTitle').textContent = product.title;
                document.getElementById('productPrice').textContent = product.currentPrice;
                document.getElementById('productOriginalPrice').textContent = product.originalPrice;
                document.getElementById('productDiscount').textContent = product.discount;
                
                productInfo.classList.remove('fade-out');
                productInfo.classList.add('fade-in');
            }, 150);
        }

        function updateImagePointers() {
            const pointers = document.querySelectorAll('.desktop-pointers .image-pointer');
            pointers.forEach((pointer, index) => {
                pointer.classList.toggle('active', index === currentProduct);
            });
        }

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
