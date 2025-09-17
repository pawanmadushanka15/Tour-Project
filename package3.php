<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Dream Adventure - Ceylon Classic Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/booking-style.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="index.html" class="logo"><i class="fas fa-hiking"></i> travel.com</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.html#home">home</a>
            <a href="index.html#category">Adventures</a>
            <a href="index.html#packages">packages</a>
            <a href="index.html#contact">contact</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    </header>

    <!-- Search form -->
    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
            <input type="search" name="" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>

    <!-- Floating Book Now Button -->
    <div class="floating-book-btn" id="floatingBookBtn" onclick="scrollToBooking(event)">
        <i class="fas fa-calendar-check"></i>
        <span>Book Now</span>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Book Your Dream Adventure</h1>
            <p>Discover the breathtaking beauty of destinations with our expertly crafted tour packages. From pristine beaches to ancient temples, wildlife safaris to cultural experiences - your perfect getaway awaits.</p>
            <div class="hero-buttons">
                <a href="#booking" class="btn primary-btn" onclick="scrollToBooking(event)">
                    <i class="fas fa-calendar-check"></i>
                    Book Now
                </a>
                <a href="#package-details" class="btn secondary-btn">
                    <i class="fas fa-info-circle"></i>
                    View Details
                </a>
            </div>
        </div>
    </section>

    <!-- Package Details Section -->
    <section class="package-details-section" id="package-details">
        <div class="container">
            <!-- Package Header -->
            <div class="package-header">
                <div class="package-title-section">
                    <h1 class="package-title">Sri Lankan Heritage Tour</h1>
                    <p class="package-subtitle">Explore Sri Lanka's cultural heritage, natural beauty, and wildlife diversity</p>
                    <div class="package-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text">5.0/5 (1 review)</span>
                    </div>
                </div>
                <div class="package-price-section">
                    <div class="price-container">
                        <span class="original-price">$680</span>
                        <span class="current-price">$515</span>
                        <span class="per-person">per person</span>
                        <div class="discount-badge">Save 20%</div>
                    </div>
                    <button class="book-now-btn" onclick="scrollToBooking(event)">
                        <i class="fas fa-calendar-check"></i>
                        Book This Package
                    </button>
                </div>
            </div>

            <!-- Modern Tour Gallery Section -->
            <div class="modern-gallery-section">
                <!-- Gallery Header -->
                <div class="gallery-header">
                    <h2>Experience the Journey</h2>
                    <p>Immerse yourself in stunning destinations and unforgettable adventures</p>
                </div>

                <!-- Main Gallery Layout -->
                <div class="tour-gallery-grid">
                    <!-- Featured Main Image -->
                    <div class="gallery-main-image" onclick="openGalleryLightbox()">
                        <img src="image galary/sigiriya1.jpg" alt="Sri Lanka Adventure" id="mainGalleryImage">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">
                                    <i class="fas fa-expand-alt"></i>
                                </div>
                                <span class="view-text">Click to explore</span>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Grid Sidebar -->
                    <div class="gallery-grid-sidebar">
                        <div class="grid-image" onclick="changeMainImage(this, 'image galary/kandyy.jpg')">
                            <img src="image galary/Temple of the tooth.jpg" alt="Temple of Sacred Tooth Relic">
                            <div class="grid-overlay">
                                <i class="fas fa-dharmachakra"></i>
                            </div>
                        </div>
                        
                        <div class="grid-image" onclick="changeMainImage(this, 'image galary/ella.jpg')">
                            <img src="image galary/Colombo.jpg" alt="Colombo City">
                            <div class="grid-overlay">
                                <i class="fas fa-mountain"></i>
                            </div>
                        </div>
                        
                        <div class="grid-image" onclick="changeMainImage(this, 'image galary/neteapl.jpg')">
                            <img src="image galary/Galle Fort.jpg" alt="Galle Fort">
                            <div class="grid-overlay">
                                <i class="fas fa-leaf"></i>
                            </div>
                        </div>
                                                
                        <div class="grid-image more-photos" onclick="openGalleryLightbox()">
                            <img src="image galary/yala-beach.jpg" alt="View More">
                            <div class="more-overlay">
                                <div class="more-content">
                                    <i class="fas fa-images"></i>
                                    <span class="more-count">+4</span>
                                    <span class="more-text">Show all photos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Features -->
                <div class="gallery-features">
                    <div class="feature-left">
                        <div class="photo-count">
                            <i class="fas fa-camera"></i>
                            <span>8 professional photos</span>
                        </div>
                        <div class="quality-badge">
                            <i class="fas fa-award"></i>
                            <span>High quality images</span>
                        </div>
                    </div>
                    <div class="feature-right">
                        <button class="gallery-action-btn" onclick="openGalleryLightbox()">
                            <i class="fas fa-expand-arrows-alt"></i>
                            View Gallery
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modern Gallery Lightbox -->
            <div class="gallery-lightbox" id="galleryLightbox">
                <div class="lightbox-backdrop" onclick="closeGalleryLightbox()"></div>
                <div class="lightbox-container">
                    <!-- Lightbox Header -->
                    <div class="lightbox-header">
                        <div class="header-left">
                            <h3>Sri Lanka Budget Tour Gallery</h3>
                            <span class="image-counter">
                                <span id="currentLightboxIndex">1</span> / <span id="totalLightboxImages">8</span>
                            </span>
                        </div>
                        <button class="close-lightbox" onclick="closeGalleryLightbox()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <!-- Main Lightbox Image -->
                    <div class="lightbox-main">
                        <div class="main-image-wrapper">
                            <img src="image galary/sigiriya1.jpg" alt="Gallery Image" id="lightboxMainImage">
                            <button class="nav-arrow nav-prev" onclick="navigateLightbox(-1)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="nav-arrow nav-next" onclick="navigateLightbox(1)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        
                        <!-- Image Info -->
                        <div class="image-info">
                            <h4 id="lightboxImageTitle">Sigiriya Rock Fortress</h4>
                            <p id="lightboxImageDesc">Experience the UNESCO World Heritage Site with ancient royal palace, stunning views, and unique mirror wall.</p>
                        </div>
                    </div>

                    <!-- Thumbnail Navigation -->
                    <div class="lightbox-thumbnails">
                        <div class="thumbnail-item active" onclick="selectLightboxImage(0)">
                            <img src="image galary/sigiriya1.jpg" alt="Sigiriya Rock Fortress">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(1)">
                            <img src="image galary/Temple of the tooth.jpg" alt="Temple of Sacred Tooth Relic">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(2)">
                            <img src="image galary/NuwaraaEliya.jpg" alt="Nuwara Eliya – Little England">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(3)">
                            <img src="image galary/Tea plantation 1.jpg" alt="Tea Plantations">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(4)">
                            <img src="image galary/Galle Fort.jpg" alt="Galle Fort">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(6)">
                            <img src="image galary/unawatuna.jpg" alt="Unawatuna Beach">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(5)">
                            <img src="image galary/yala2.jpg" alt="Yala National Park">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(7)">
                            <img src="image galary/Colombo.jpg" alt="Colombo City Tour">
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <!-- Package Overview -->
            <div class="package-overview-section">
                <h2>Package Overview</h2>
                <p class="overview-description">
                    Embark on an unforgettable 7-day journey through Sri Lanka, a small island with immense charm. Discover the country’s rich culture, heritage, diverse wildlife, and stunning beaches as you explore its most iconic sites. Visit the world-famous Sigiriya Rock Fortress, the sacred Temple of the Tooth Relic in Kandy, and the historic Galle Fort. Experience one of the most scenic train rides from Kandy to Nanu Oya, near the picturesque hill town of Nuwara Eliya. Enjoy a thrilling safari in Yala National Park to witness Sri Lanka’s incredible wildlife, and end your adventure by exploring the vibrant city of Colombo. This 7-day Sri Lanka tour is fully customizable to match your preferences—book your itinerary with us today!
                <div class="package-highlights">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h3>UNESCO Heritage Sites</h3>
                        <p>Climb the ancient rock fortress, admired for its frescoes and history, and enjoy panoramic views from the 5th-century citadel.</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-dharmachakra"></i>
                        </div>
                        <h3>Buddhist Culture</h3>
                        <p>Visit the Sacred Tooth Relic Temple in Kandy and experience spiritual Buddhist heritage</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-paw"></i>
                        </div>
                        <h3>Wildlife Safari</h3>
                        <p>Experience Yala National Park with leopards, elephants, and diverse bird species</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h3>Nuwara Eliya (Little England)</h3>
                        <p>Nuwara Eliya, Sri Lanka’s ‘Little England,’ is famed for its cool climate and colonial charm. Explore tea plantations, Victoria Park, the Sita Temple, and Lake Gregory</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <h3>Colombo City Tour</h3>
                        <p>Discover Colombo, Sri Lanka’s vibrant capital where modernity meets history. Visit Gangaramaya Temple, the National Museum, Pettah Bazaar, and enjoy lively markets with local street food</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-umbrella-beach"></i>
                        </div>
                        <h3>Galle Fort & Unawatuna Beach</h3>
                        <p>Discover the colonial charm of UNESCO-listed Galle Fort with its ramparts and lighthouse, then unwind at Unawatuna Beach with golden sands and stunning sunsets.</p>
                    </div>
                </div>
            </div>

            <!-- What Makes This Special Section -->
            <div class="special-features-section">
                <div class="section-header">
                    <h2>What Makes This Experience Unforgettable</h2>
                    <p>Join thousands of travelers who've discovered the magic of Sri Lanka</p>
                </div>

                <div class="features-showcase">
                    <!-- Feature 1 -->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="image galary/sigiriya1.jpg" alt="Sigiriya Rock Fortress">
                            <div class="feature-badge">UNESCO Site</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-landmark"></i>
                            </div>
                            <h3>Sigiriya Rock Fortress</h3>
                            <p>A towering rock formation with an ancient royal palace at the summit, featuring stunning frescoes, water gardens, and the unique mirror wall</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-star"></i> UNESCO World Heritage</span>
                                <span><i class="fas fa-mountain"></i> 200m High Rock</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="image galary/Temple of the tooth.jpg" alt="Temple of the Sacred Tooth Relic">
                            <div class="feature-badge">Sacred Site</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-praying-hands"></i>
                            </div>
                            <h3>Temple of the Sacred Tooth Relic</h3>
                            <p>One of Buddhism’s most sacred sites, the temple houses the tooth relic of Lord Buddha. Explore the complex, witness traditional rituals, and participate in the evening puja ceremony.</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-star"></i> Spiritual & Cultural Landmark</span>
                                <span><i class="fas fa-bell"></i> Daily Rituals</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="image galary/yalanat.jpg" alt="Yala National Park">
                            <div class="feature-badge">Wildlife</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-paw"></i>
                            </div>
                            <h3>Yala National Park Safari</h3>
                            <p>Embark on an exciting wildlife safari with the highest leopard density in the world, plus elephants and diverse bird species</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-paw"></i> Leopard Spotting</span>
                                <span><i class="fas fa-binoculars"></i> Wildlife Safari</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4-->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="image galary/NuwaraEliyaa.jpg" alt="Nuwara Eliya (Little England)">
                            <div class="feature-badge">Hill Country</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <h3>Nuwara Eliya (Little England)</h3>
                            <p>Famed for its cool climate and colonial charm, Nuwara Eliya offers lush tea plantations, Victoria Park, Sita Temple, and boat rides on Lake Gregory.</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-leaf"></i> Tea Plantations</span>
                                <span><i class="fas fa-water"></i> Lake Gregory</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5-->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="image galary/Galle Fort & Unawatuna Beach.jpg" alt="Galle Fort & Unawatuna Beach">
                            <div class="feature-badge">Heritage & Beach</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-umbrella-beach"></i>
                            </div>
                            <h3>Galle Fort & Unawatuna Beach</h3>
                            <p>Explore the UNESCO World Heritage Galle Fort with its colonial ramparts, lighthouse, and charming streets. Then relax at Unawatuna Beach with golden sands, clear waters, and stunning sunsets.</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-landmark"></i> UNESCO Heritage Site</span>
                                <span><i class="fas fa-water"></i> Beach & Coral Reefs</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6-->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="image galary/Colombo.jpg" alt="Colombo City Tour">
                            <div class="feature-badge">City Tour</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-city"></i>
                            </div>
                            <h3>Colombo City Tour</h3>
                            <p>Explore Sri Lanka’s bustling capital, visiting Gangaramaya Temple, the National Museum, Pettah Bazaar, and colonial landmarks. Enjoy lively markets, local street food, and the city’s vibrant atmosphere.</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-landmark"></i> Historic & Modern Landmarks</span>
                                <span><i class="fas fa-utensils"></i> Street Food & Markets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Trust Indicators -->
                <div class="trust-indicators">
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="trust-content">
                            <h4>100% Safe</h4>
                            <p>Certified guides & safety equipment</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-undo"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Free Cancellation</h4>
                            <p>Cancel up to 24 hours before</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="trust-content">
                            <h4>24/7 Support</h4>
                            <p>Round-the-clock assistance</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Award Winning</h4>
                            <p>Top-rated tour operator</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Itinerary Overview -->
                <div class="quick-itinerary">
                    <h3>7-Day Sri Lanka Tour Overview</h3>
                    <div class="itinerary-overview-grid">

                        <div class="overview-day">
                            <div class="day-num">1</div>
                            <div class="day-info">
                                <h4>Arrival & Transfer to Sigiriya</h4>
                                <p>Arrive at Bandaranaike International Airport and transfer to Sigiriya. Relax at the hotel and enjoy dinner after your flight.</p>
                            </div>
                        </div>

                        <div class="overview-day">
                            <div class="day-num">2</div>
                            <div class="day-info">
                                <h4>Sigiriya Rock Fortress</h4>
                                <p>Visit Sigiriya Rock Fortress, admire the Apsara frescoes, and enjoy the water gardens. Travel to Kandy and overnight at a hotel.</p>
                            </div>
                        </div>

                        <div class="overview-day">
                            <div class="day-num">3</div>
                            <div class="day-info">
                                <h4>Temple of the Tooth & Cultural Show</h4>
                                <p>Explore the Temple of the Tooth Relic and watch traditional Kandyan dances. Dinner and overnight stay in Kandy.</p>
                            </div>
                        </div>

                        <div class="overview-day">
                            <div class="day-num">4</div>
                            <div class="day-info">
                                <h4>Kandy to Nuwara Eliya by Train</h4>
                                <p>Enjoy a scenic train ride to Nuwara Eliya, passing tea plantations, waterfalls, and Adam’s Peak. Overnight stay in Nuwara Eliya.</p>
                            </div>
                        </div>

                        <div class="overview-day">
                            <div class="day-num">5</div>
                            <div class="day-info">
                                <h4>Nuwara Eliya to Yala Safari</h4>
                                <p>Travel to Yala via Ella, stop at Ravana Falls, and enjoy an evening safari to spot leopards, elephants, and other wildlife. Overnight at Yala.</p>
                            </div>
                        </div>

                        <div class="overview-day">
                            <div class="day-num">6-7</div>
                            <div class="day-info">
                                <h4>Galle, Unawatuna & Departure</h4>
                                <p>Visit Galle Fort, relax at Unawatuna Beach, explore Colombo city sights, and finally transfer to the airport for departure.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Package Inclusions & Exclusions -->
            <div class="inclusions-section">
                <div class="inclusions-grid">
                    <div class="inclusions-card">
                        <h3><i class="fas fa-check-circle"></i> What's Included</h3>
                        <ul class="inclusions-list">
                            <li><i class="fas fa-bed"></i> Comfortable accommodation throughout the tour</li>
                            <li><i class="fas fa-plane-arrival"></i> Airport pickup and drop-off in a private vehicle</li>
                            <li><i class="fas fa-tint"></i> Bottled drinking water provided daily</li>
                            <li><i class="fas fa-coffee"></i> Daily breakfast at your hotel</li>
                            <li><i class="fas fa-utensils"></i> Selected dinners featuring authentic Sri Lankan cuisine</li>
                            <li><i class="fas fa-user-tie"></i> Services of an English-speaking driver throughout the tour</li>
                            <li><i class="fas fa-shield-alt"></i> Local travel insurance coverage during the trip</li>
                            <li><i class="fas fa-car"></i> Private, air-conditioned transportation for all transfers and sightseeing</li>
                        </ul>
                    </div>

                    <div class="exclusions-card">
                        <h3><i class="fas fa-times-circle"></i> What's Not Included</h3>
                        <ul class="exclusions-list">
                            <li><i class="fas fa-ticket-alt"></i> Entrance fees to monuments, temples, and national parks</li>
                            <li><i class="fas fa-suitcase-rolling"></i> Excess luggage charges, if applicable</li>
                            <li><i class="fas fa-hand-holding-usd"></i> Tips and gratuities for drivers, guides, and hotel staff</li>
                            <li><i class="fas fa-utensils"></i> Lunches not mentioned in the inclusions</li>
                            <li><i class="fas fa-train"></i> Scenic train tickets (optional and can be arranged at extra cost)</li>
                        </ul>
                    </div>
                </div>
            </div>

    </section>

    <!-- Customer Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-1.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Lisa K.</h4>
                            <span class="customer-location">Switzerland</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Lishan was a great help with every step of the booking, available at all times to reply to our questions. We had a wonderful driver and guide SAMAN during our 8 day tour. He knew the best restaurants and helped us with everything we needed. Lishan selected the hotels carefully and the pickup/drop off was excellent. Thanks to Lishan and Saman for everything!"
                    </p>
                    <div class="testimonial-date">December 2023</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-2.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Robert</h4>
                            <span class="customer-location">Poland</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "As a family of four, we came to Sri Lanka for 7 days tour. We needed everything organized from arrival to departure at Colombo airport. Our Polish friend recommended Ceylon Classic Tours. We visited Sigiriya, Kandy, Nuwara Eliya, Yala, Mirissa, then Galle. We had the best driver and very nice hotels. Some hotels even exceeded our expectations. I can highly recommend their services!"
                    </p>
                    <div class="testimonial-date">December 2023</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-3.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Raj Patel</h4>
                            <span class="customer-location">London, UK</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Outstanding service and value for money! The itinerary was well-planned with perfect 
                        balance of culture and nature. Sigiriya Rock Fortress was breathtaking, and the wildlife 
                        safari was an incredible experience. Will definitely book again!"
                    </p>
                    <div class="testimonial-date">February 2024</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Travel With Us?</h2>
                <p>Experience the difference with our award-winning tour services</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>15+ Years Experience</h3>
                    <p>Over a decade of expertise in organizing unforgettable Sri Lankan adventures and cultural experiences across the Pearl of the Indian Ocean.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>50,000+ Happy Travelers</h3>
                    <p>Join thousands of satisfied customers who have created lifelong memories exploring Sri Lanka's ancient heritage and natural wonders.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Customer Support</h3>
                    <p>Round-the-clock assistance before, during, and after your trip. We're always here to help you.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Safe & Secure</h3>
                    <p>Your safety is our priority. All activities are conducted with highest safety standards and experienced guides.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Best Price Guarantee</h3>
                    <p>We offer competitive pricing with no hidden costs. Get the best value for your money with premium services.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Customizable Tours</h3>
                    <p>Flexible itineraries that can be tailored to your preferences, group size, and special requirements.</p>
                </div>
            </div>
        </div>
    </section>







    <!-- Booking Form Section -->
    <section class="booking-section" id="booking">
        <div class="heading">Complete Your Booking</div>
        <div class="booking-container">
            <div class="booking-form-wrapper">
                <div class="booking-form-header">
                    <h2>Secure Your Adventure</h2>
                    <p>Fill in your details below and we'll contact you within 24 hours to confirm your booking</p>
                </div>

                <form id="bookingForm" class="booking-form" action="process_booking.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullName">
                                <i class="fas fa-user"></i>
                                Full Name
                            </label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <i class="fas fa-envelope"></i>
                                Email Address
                            </label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">
                                <i class="fas fa-phone"></i>
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone" placeholder="Your contact number" required>
                        </div>

                        <div class="form-group">
                            <label for="packageSelect">
                                <i class="fas fa-map-marked-alt"></i>
                                Choose Your Package
                            </label>
                            <select id="packageSelect" name="packageSelect" required>
                                <option value="">-- Select your preferred package --</option>

                                <option value="Highlights of Sri Lanka – 10 Days" data-price="865" selected>
                                        Highlights of Sri Lanka – 10 Days – $865
                                </option>
                                <option value="Highlights of Sri Lanka 5 Days" data-price="380">
                                         Highlights of Sri Lanka 5 Days – $380
                                </option>
                                <option value="Sri Lanka 9 Day Tour Package" data-price="660">
                                        Sri Lanka 9 Day Tour Package – $660
                                </option>
                                <option value="Sri Lanka Budget Tour Package" data-price="640">
                                        Sri Lanka Budget Tour Package – $640
                                </option>
                                <option value="Sri Lankan Heritage Tour" data-price="515">
                                        Sri Lankan Heritage Tour – $515
                                </option>
                                <option value="Sri Lanka Beach Holiday" data-price="495">
                                        Sri Lanka Beach Holiday – $495
                                </option>

                            </select>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="travelDate">
                                <i class="fas fa-calendar-alt"></i>
                                Preferred Travel Date
                            </label>
                            <input type="date" id="travelDate" name="travelDate" required>
                        </div>

                        <div class="form-group">
                            <label for="numTravelers">
                                <i class="fas fa-users"></i>
                                Number of Travelers
                            </label>
                            <input type="number" id="numTravelers" name="numTravelers" min="1" max="20" value="1" required>
                        </div>
                    </div>

                    <div class="price-summary" 
     style="background:#f9fafc; border:2px solid #e0e6ed; border-radius:12px; 
            padding:20px; margin:20px 0; text-align:center; 
            box-shadow:0 4px 12px rgba(0,0,0,0.05); transition:all 0.3s ease-in-out;">

    <h3 style="font-size:1.6rem; font-weight:bold; color:#2c3e50; margin-bottom:10px;">
        Total Price: 
        <span id="totalPrice" style="color:#27ae60; font-size:1.8rem; font-weight:700;">$0</span>
    </h3>

    <p id="priceBreakdown" style="font-size:1rem; color:#555; margin:0;"></p>
</div>



                    <div class="form-group full-width">
                        <label for="message">
                            <i class="fas fa-comment-dots"></i>
                            Special Requests & Notes
                        </label>
                        <textarea id="message" name="message" rows="4" placeholder="Any special requirements, dietary restrictions, or specific interests? Let us know how we can make your adventure perfect!"></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit-booking">
                            <i class="fas fa-check-circle"></i>
                            Secure My Adventure
                        </button>
                    </div>
                </form>

                <div id="bookingMessage" class="booking-message"></div>
            </div>

            <div class="booking-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Secure Booking</h3>
                    <p>Your personal information and payment details are protected with bank-level encryption and security measures.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Expert Support 24/7</h3>
                    <p>Our experienced travel consultants are available round the clock to help plan your perfect Sri Lankan adventure.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Exclusive Perks</h3>
                    <p>Enjoy complimentary upgrades, welcome gifts, and special access to unique experiences not available elsewhere.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Location Section -->
    <section class="location-section">
    <div class="container">
        <div class="location-header">
            <h2>Where you'll be</h2>
            <p class="location-name">Sri Lanka – Pearl of the Indian Ocean</p>
        </div>
        
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15856.798967826285!2d80.36289520964041!3d7.293163915728061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35fcfe2a1c1f3%3A0x3d7c3b85b0b0e1de!2sColombo%2C%20Sri%20Lanka!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4615d8a1f2e4b%3A0x1234567890abcdef!2sSigiriya%2C%20Sri%20Lanka!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae12345a1b2c3d%3A0xabcdef1234567890!2sKandy%2C%20Sri%20Lanka!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4567a1b2c3d4%3A0xabcdef1234567890!2sNuwara%20Eliya%2C%20Sri%20Lanka!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae5678a1b2c3d5%3A0xabcdef1234567890!2sYala%20National%20Park%2C%20Sri%20Lanka!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae6789a1b2c3d6%3A0xabcdef1234567890!2sGalle%2FUnawatuna%2C%20Sri%20Lanka!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae7890a1b2c3d7%3A0xabcdef1234567890!2sNegombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>

            <div class="map-controls">
                <button class="map-control-btn" onclick="openInMaps()" title="Open in Google Maps">
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                        <path d="m20.666 20.666 10 10"></path>
                        <path d="m24.0002 12.6668c0 6.2593-5.0741 11.3334-11.3334 11.3334-6.2592 0-11.3333-5.0741-11.3333-11.3334 0-6.2592 5.0741-11.3333-11.3333 6.2593 0 11.3334 5.0741 11.3334 11.3333z" fill="none"></path>
                    </svg>
                </button>
                <button class="map-control-btn" onclick="toggleFullscreen()" title="Fullscreen">
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                        <g fill="none">
                            <path d="m14 29h-10.2c-.4418278 0-.8-.3581722-.8-.8v-10.2"></path>
                            <path d="m4 28 10-10"></path>
                            <g stroke-linejoin="round">
                                <path d="m18 3h10c.5522847 0 1 .44771525 1 1v10"></path>
                                <path d="m18 14 11-11"></path>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
        </div>


        <div class="location-description">
                <h3>About the Journey</h3>
                <p>Experience the wonders of Sri Lanka, a tropical gem in the Indian Ocean. Explore golden beaches, historic temples, rolling tea plantations, and diverse wildlife. Journey through the cultural treasures of Sigiriya and Kandy, enjoy scenic train rides in the hill country, and relax along the serene shores of Unawatuna and Mirissa. Sri Lanka offers a perfect blend of culture, adventure, and natural beauty for every traveler.</p>

            <button class="show-more-btn" onclick="showMoreLocation()">
                <span>Show more</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false">
                    <path fill="none" d="m12 4 11.3 11.3a1 1 0 0 1 0 1.4L12 28"></path>
                </svg>
            </button>
        </div>
    </div>
</section>


    <!-- Footer -->
    <section class="footer">
        <div class="footer-intro">
            <p>Experience the luxuries of Sri Lanka with our specially crafted luxury tours and indulge in its quintessential charms.</p>   
        </div>        
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="index.html#home">home</a>
                <a href="index.html#packages">packages</a>
                <a href="index.html#contact">ask questions</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+94763936557"> <i class="fas fa-phone"></i>+94 76 393 6557</a>
                <a href="https://www.google.com/maps/search/?api=1&query=59%2F58+Hanthana+Gemunu+Mawatha,+Kandy,+Sri+Lanka" target="_blank"><i class="fas fa-map"></i>59/58 Hanthana Gemunu Mawatha Kandy</a>
                <a href="mailto: info@ceylonclassictours.com"><i class="fas fa-envelope"></i>info@ceylonclassictours.com</a>
            </div>

            <div class="box">
                <h3 class="cen">Corporate Registration Numbers</h3>
                <p>CR NO: PV00232694</p>
                <p>SLTDA/SQA/PRO/TA00511</p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/ceyloncclassictours/"> <i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="https://www.instagram.com/ceylon.ctour/?hl=en"> <i class="fab fa-instagram"></i>Instagram</a>
                <a href="tel:+353873839726"> <i class="fas fa-phone"></i>+353873839726</a>
                <a href="https://www.youtube.com/channel/UClH9GsgZyDERbvGj680THRQ"> <i class="fab fa-youtube"></i>Youtube</a>
                <a href="https://www.google.com/maps/search/?api=1&query=Apt+4+M.J.s+Diner+Cloon+Moor,+Tralee,+V92T975" target="_blank"><i class="fab fa-map"></i>Apt 4 M.J.s Diner Cloon Moor, Tralee, V92T975</a>
                <a href="mailto: lishan@ceylonclassictours.com"><i class="fas fa-envelope"></i>lishan@ceylonclassictours.com</a>
            </div>
        </div>
        <div class="credit">@ 2025 Ceylon Classic Tours. All rights Reserved.<br>Designed & Developed by <span>PixAll Designs</span></div>
    </section>

    <!-- Scripts -->
    <script src="js/script.js"></script>
    <script src="booking-script.js"></script>
    <script>
        // Smooth Scroll to Booking Section
        function scrollToBooking(event) {
            event.preventDefault();
            const bookingSection = document.getElementById('booking');
            if (bookingSection) {
                bookingSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Add a visual highlight effect
                bookingSection.style.animation = 'highlightSection 2s ease-in-out';
                setTimeout(() => {
                    bookingSection.style.animation = '';
                }, 2000);
            }
        }
        
        // Modern Tour Gallery Functions
        let currentLightboxIndex = 0;
        
        const galleryData = [
            { src: 'image galary/sigiriya1.jpg', title: 'Ancient Sigiriya Rock Fortress', description: 'Experience the magnificent ancient rock fortress and palace ruins of Sigiriya, a UNESCO World Heritage Site.' },
            { src: 'image galary/Temple of the tooth.jpg', title: 'Sacred Temple of Tooth Relic', description: 'Visit the most sacred Buddhist temple in Kandy, home to the tooth relic of Lord Buddha.' },
            { src: 'image galary/NuwaraaEliya.jpg', title: 'Nuwara Eliya – Little England', description: 'Explore the charming town of Nuwara Eliya with its cool climate, colonial architecture, lush tea plantations, Victoria Park, and serene Lake Gregory.' },
            { src: 'image galary/Tea plantation 1.jpg', title: 'Tea Plantation Paradise', description: 'Explore the rolling hills of tea plantations in Nuwara Eliya, the heart of Sri Lankan tea country.' },
            { src: 'image galary/Galle Fort.jpg', title: 'Galle Fort', description: 'Discover the historic Galle Fort, a UNESCO World Heritage Site with Dutch colonial architecture, charming streets, quaint shops, and stunning ocean views. '},
            { src: 'image galary/unawatuna.jpg', title: 'Unawatuna Beach', description: 'Relax on the golden sands of Unawatuna, swim in crystal-clear waters, snorkel among vibrant coral reefs, and enjoy breathtaking sunsets over the Indian Ocean.' },
            { src: 'image galary/yala2.jpg', title: 'Yala National Park Safari', description: 'Experience thrilling wildlife safari with leopards, elephants and diverse bird species.' },
            { src: 'image galary/Colombo.jpg', title: 'Colombo City Tour', description: 'Explore Sri Lanka’s bustling capital, Colombo, with its mix of modern life and colonial history, including Gangaramaya Temple, Pettah Bazaar, and vibrant streets filled with culture and local cuisine.' },
        ];

        function changeMainImage(element, imageSrc) {
            const mainImage = document.getElementById('mainGalleryImage');
            
            if (mainImage) {
                // Find the index of the clicked image
                const imageIndex = galleryData.findIndex(img => img.src === imageSrc);
                currentLightboxIndex = imageIndex !== -1 ? imageIndex : 0;
                
                // Smooth transition
                mainImage.style.opacity = '0.7';
                mainImage.style.transform = 'scale(0.98)';
           
                setTimeout(() => {
                    mainImage.src = imageSrc;
                    mainImage.style.opacity = '1';
                    mainImage.style.transform = 'scale(1)';
                }, 200);
                
                // Add click feedback
                element.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    element.style.transform = 'scale(1)';
                }, 150);
            }
        }

        function openGalleryLightbox() {
            const lightbox = document.getElementById('galleryLightbox');
            if (lightbox) {
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
                updateLightboxImage(currentLightboxIndex);
                
                // Smooth entrance
                setTimeout(() => {
                    lightbox.querySelector('.lightbox-container').style.transform = 'scale(1)';
                    lightbox.querySelector('.lightbox-container').style.opacity = '1';
                }, 50);
            }
        }

        function closeGalleryLightbox() {
            const lightbox = document.getElementById('galleryLightbox');
            if (lightbox) {
                lightbox.querySelector('.lightbox-container').style.transform = 'scale(0.95)';
                lightbox.querySelector('.lightbox-container').style.opacity = '0';
                
                setTimeout(() => {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }, 300);
            }
        }

        function updateLightboxImage(index) {
            const lightboxImage = document.getElementById('lightboxMainImage');
            const imageTitle = document.getElementById('lightboxImageTitle');
            const imageDesc = document.getElementById('lightboxImageDesc');
            const currentIndex = document.getElementById('currentLightboxIndex');
            const totalImages = document.getElementById('totalLightboxImages');
            
            if (galleryData[index]) {
                const imageData = galleryData[index];
                
                // Update image with transition
                lightboxImage.style.opacity = '0.5';
                setTimeout(() => {
                    lightboxImage.src = imageData.src;
                    lightboxImage.style.opacity = '1';
                    
                    if (imageTitle) imageTitle.textContent = imageData.title;
                    if (imageDesc) imageDesc.textContent = imageData.description;
                    if (currentIndex) currentIndex.textContent = index + 1;
                    if (totalImages) totalImages.textContent = galleryData.length;
                }, 150);
            }
            
            updateLightboxThumbnails(index);
        }

        function updateLightboxThumbnails(activeIndex) {
            const thumbnails = document.querySelectorAll('.lightbox-thumbnails .thumbnail-item');
            thumbnails.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === activeIndex);
            });
        }

        function selectLightboxImage(index) {
            currentLightboxIndex = index;
            updateLightboxImage(index);
        }

        function navigateLightbox(direction) {
            currentLightboxIndex += direction;
            
            if (currentLightboxIndex >= galleryData.length) {
                currentLightboxIndex = 0;
            } else if (currentLightboxIndex < 0) {
                currentLightboxIndex = galleryData.length - 1;
            }
            
            updateLightboxImage(currentLightboxIndex);
        }

        // Keyboard navigation for lightbox
        document.addEventListener('keydown', function(e) {
            const lightbox = document.getElementById('galleryLightbox');
            if (lightbox && lightbox.classList.contains('active')) {
                switch(e.key) {
                    case 'ArrowLeft':
                        navigateLightbox(-1);
                        break;
                    case 'ArrowRight':
                        navigateLightbox(1);
                        break;
                    case 'Escape':
                        closeGalleryLightbox();
                        break;
                }
            }
        });

        // Enhanced Share Gallery Function
        function shareGallery() {
            if (navigator.share) {
                navigator.share({
                    title: 'Sri Lanka Budget Tour Package Gallery',
                    text: 'Check out these amazing photos from our Manali tour package! 🏔️✨',
                    url: window.location.href
                }).catch(console.error);
            } else {
                // Fallback for browsers without Web Share API
                const url = window.location.href;
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(url).then(() => {
                        showToast('Gallery link copied to clipboard! 📋');
                    });
                } else {
                    // Fallback for older browsers
                    const textArea = document.createElement('textarea');
                    textArea.value = url;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    showToast('Gallery link copied! 📋');
                }
            }
        }

        // Toast notification function
        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'toast-notification';
            toast.textContent = message;
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);
            
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        }

        // Add modern ripple effect on click
        function createRippleEffect(element) {
            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 107, 53, 0.6)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.left = '50%';
            ripple.style.top = '50%';
            ripple.style.width = '20px';
            ripple.style.height = '20px';
            ripple.style.marginLeft = '-10px';
            ripple.style.marginTop = '-10px';
            ripple.style.pointerEvents = 'none';
            
            element.style.position = 'relative';
            element.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        }

        // Open Ella, Sri Lanka location in Google Maps
        function openInMaps() {
            const ellaLocation = "https://www.google.com/maps/search/?api=1&query=Ella,+Sri+Lanka";
            window.open(ellaLocation, '_blank');
        }

        // Toggle fullscreen for map
        function toggleFullscreen() {
            const mapContainer = document.querySelector('.map-container');
            if (mapContainer) {
                if (!document.fullscreenElement) {
                    mapContainer.requestFullscreen();
                } else {
                    document.exitFullscreen();
                }
            }
        }

        // Add CSS for ripple animation
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);

        // Enhanced form interaction - Does NOT affect backend processing
        document.addEventListener('DOMContentLoaded', function() {
            // Pre-select Manali package if coming from main page
            const urlParams = new URLSearchParams(window.location.search);
            const selectedPackage = urlParams.get('package');
            if (selectedPackage === 'manali') {
                document.getElementById('packageSelect').value = 'Sri Lanka Budget Tour Package';
            }

            // Add smooth scrolling to booking section
            document.querySelectorAll('a[href="#booking"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('booking').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Floating booking button scroll detection
            const floatingBtn = document.getElementById('floatingBookBtn');
            const bookingSection = document.getElementById('booking');
            
            function handleFloatingButton() {
                if (bookingSection && floatingBtn) {
                    const heroSection = document.querySelector('.hero-section');
                    const bookingSectionTop = bookingSection.offsetTop;
                    const scrollPosition = window.scrollY;
                    const heroHeight = heroSection ? heroSection.offsetHeight : 600;
                    
                    // Show button after scrolling past hero section
                    // Hide button when reaching booking section
                    if (scrollPosition > heroHeight && scrollPosition < bookingSectionTop - 200) {
                        floatingBtn.classList.add('visible');
                    } else {
                        floatingBtn.classList.remove('visible');
                    }
                }
            }
            
            window.addEventListener('scroll', handleFloatingButton);
            handleFloatingButton(); // Check initial state

            // Set minimum date to today for travel date
            const today = new Date().toISOString().split('T')[0];
            const travelDateInput = document.getElementById('travelDate');
            
            if (travelDateInput) travelDateInput.min = today;

            // Add visual feedback for form submission (without changing backend)
            const bookingForm = document.getElementById('bookingForm');
            const submitButton = document.querySelector('.submit-booking');
            
            if (bookingForm && submitButton) {
                bookingForm.addEventListener('submit', function() {
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                    submitButton.disabled = true;
                });
            }
        });
    </script>
    <script src="calculate.js"></script>
</body>

</html>