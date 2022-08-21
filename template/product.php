<?php require("header.php")?>
<head>
    <link rel="stylesheet" href="css/product.css">
</head>
<?php include("global-banner.php"); ?>
<div id="chrome-breadcrumb">
    <div>
        <nav aria-label="breadcrumbs" class="breadcrumbs">
            <ol>
                <li>
                    <a href="https://www.asos.com/?hrd=1">Home</a>
                </li>
                <li>
                    <span aria-hidden="true">›</span> 
                    <a href="https://www.asos.com/men/">Men</a>
                </li>
                <li>
                    <span aria-hidden="true">›</span> 
                    <a href="https://www.asos.com/men/ctas/cat/?cid=24920">CTAS</a>
                </li>
                <li>
                    <span aria-hidden="true">›</span> 
                    <a href="https://www.asos.com/men/ctas/fashion-online-41/cat/?cid=28288">Off-campus</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="asos-product single-product pg-in-stock" id="asos-product">
    <section class="core-product-container">
        <div class="layout-width">
            <div class="gallery-content-wrapper">
                <div class="product-gallery">
                    <div class="gallery-aside-wrapper">
                        <p id="thumbnailsDescription">Select thumbnail to enlarge image</p>
                        <ul class="thumbnails">
                            <li class="image-thumbnail active">
                                <button>
                                    <img class="gallery-image" src="img/product-thumbnails.webp" alt="">
                                </button>
                            </li>
                            <li class="image-thumbnail">
                                <button>
                                    <img class="gallery-image" src="img/banner.webp" alt="">
                                </button>
                            </li>
                            <li class="image-thumbnail">
                                <button>
                                    <img class="gallery-image" src="img/banner.webp" alt="">
                                </button>
                            </li>
                            <li class="image-thumbnail">
                                <button>
                                    <img class="gallery-image" src="img/banner.webp" alt="">
                                </button>
                            </li>
                        </ul>
                        <div class="social-share social-share-gallery">
                            <button class="link social-share-icon" id="social-share-button" aria-controls="share-bar" aria-expanded="false" aria-label="SHARE">
                                <span class="product-share-icon"></span>
                            </button>
                            <div class="share-bar-wrap" style="display: none;">
                                <div class="triangle-up"></div>
                                <ul id="share-bar" aria-labelledby="social-share-button">
                                    <li tabindex="-1"><a data-id="facebook" aria-label="facebook" class="product-facebook-icon" href=""></a></li>
                                    <li tabindex="-1"><a data-id="pinterest" aria-label="pinterest" class="product-pinterest-icon" href=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-carousel">
                        <div class="gallery-live-region"></div>
                        <div class="window">
                            <div class="selling-fast" style="">
                                <span class="selling-fast__label">Selling Fast</span>
                            </div>
                            <div class="gallery-images animate">
                                <div class="image-container zoomable">
                                    <img class="gallery-image" src="img/banner.webp" alt="">
                                </div>
                                <div class="image-container hide-image zoomable">
                                    <img class="gallery-image" src="img/product-image.webp" alt="">
                                </div>
                                <div class="image-container hide-image zoomable">
                                    <img class="gallery-image" src="img/product-image.webp" alt="">
                                </div>
                                <div class="image-container hide-image zoomable">
                                    <img class="gallery-image" src="img/product-image.webp" alt="">
                                </div>
                            </div>
                            <button class="arrow-button arrow-button-left" aria-controls="product-gallery" aria-label="Show next image">
                                <span aria-hidden="true" class="product-chevron-left-large-outlined"></span>
                            </button>
                            <button class="arrow-button arrow-button-right" aria-controls="product-gallery" aria-label="Show previous image">
                                <span aria-hidden="true" class="product-chevron-right-large-outlined"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-aside">
                <div id="oos-label">
                    <h3 class="product-out-of-stock-label"></h3>
                    <div class="oos-portal"></div>
                </div>
                <div id="aside-content">
                    <div class="product-hero"></div>
                </div>
                <div id="pdp-react-critical-app">
                    <h1 class="product-h1">ASOS Dark Future oversized t-shirt with graffiti graphic large back print in neutral</h1>
                    <div class="product-price-wrapper" data-test-id="product-price">
                        <span class="price-screenreader-only-text">£24.00 </span>
                        <span class="price-wrapper">
                            <span aria-hidden="true" class="current-price">£24.00</span>
                        </span>
                    </div>
                </div>
                <div class="aside-below-price">
                    <div class="product-hero">
                        <div class="overall-rating overall-rating-single-product">
                        </div>
                        <div id="product-promo">
                            <div class="pdp-promo-banner">
                                <section>
                                    <div class="blue-promo-box">
                                        <div class="promo-copy">GET 25% OFF EVERYTHING!<br>With code:<strong> WOW </strong></div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="product-promo-default"></div>
                    </div>
                    <div class="out-of-stock">
                    </div>
                    <div id="product-colour">
                        <section>
                            <div class="colour-size colour-component">
                                <div class="grid-row colour-section">
                                    <label for="colour-select" class="disabled">COLOUR:</label>
                                    <span class="product-colour">NEUTRAL</span>
                                    <div class="colour-size-select">
                                        <select id="colour-select">
                                            <option value="">Please select from 1 colours</option>
                                            <option value="">NEUTRAL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="component fit-analytics">
                        <div id="product-size">
                            <section>
                                <div class="colour-size size-component">
                                    <div class="size-section">
                                        <div style="display: table; width: 100%">
                                            <label for="main-size-select" style="display: table-cell; vertical-align: bottom">SIZE:</label>
                                            <!-- <div style="display: table-cell; vertical-align: top; width: 100%">
                                                <div class="fit-analytics upper" >
                                                    <div class="table">
                                                        <div class="cell">
                                                            <div class="circle">
                                                                <span class="no-recommendation"></span>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div id="fit-assistant-tooltip"></div>
                                                            <button id="fit-upper" class="link">Find your Fit Assistant size</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <span class="product-size"></span>
                                        <div class="colour-size-select">
                                            <select id="main-size-select" aria-label="Please select">
                                                <option value="">Please select</option>
                                                <option value="">2XS</option>
                                                <option value="">XS</option>
                                                <option value="">S</option>
                                                <option value="">M</option>
                                                <option value="">L</option>
                                                <option value="">XL</option>
                                                <option value="">2XL</option>
                                                <option value="">3XL</option>
                                                <option value="">4XL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid-row low-in-stock">
                                        <span class="clock"></span>
                                        <span>LOW IN STOCK</span>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="aside-action">
                            <div id="product-add">
                                <div class="add-item">
                                    <div class="is-add-item-saving" style="display: none;"></div>
                                    <span class="aria-live" role="status" aria-live="polite"></span>
                                    <button id="product-add-button" aria-label="Add to bag">
                                        <span class="product-tick" style="display: none;"></span>
                                        <span>Add to bag</span>
                                    </button>
                                </div>
                            </div>
                            <div class="save-for-later-portal" id="save-for-later-portal">
                                <button class="favorite-btn btn-pos">
                                    <span class="heart product-heartempty"></span>
                                    <span class="heart-wrapper">
                                        <span class="heart heart_animated product-heartfull"></span>
                                        <span class="heart heart_animated product-heartfull"></span>
                                        <span class="heart heart_animated product-heartfull"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="add-item-error error-message" style="display: none"></div>
                        </div>
                        <div id="delivery-and-returns-portal">
                            <div class="delivery">
                                <div data-test-id="deliveryAndReturns__freeDelivery" class="delivery-text-wrapper delivery-text-wrapper_free" aria-live="polite">
                                    <span class="delivery-text__flex_free">
                                        <span class="delivery-icon product-delivery-van"></span>
                                    </span>Free Delivery.
                                </div>
                                <div data-test-id="deliveryAndReturns__terms" class="delivery-text-wrapper aHXob _smHX">
                                    <span>Ts&amp;Cs apply. 
                                        <a data-test-id="deliveryAndReturns__termsLink" href="" target="_blank" aria-label="Learn more. Opens in a new window." rel="noreferrer">
                                            <span class="delivery-text" aria-hidden="true">Learn more
                                                <span class="delivery-icon product-new-page-small"></span>
                                            </span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ingredients-button" class="ingredients-button-container"></div>
                <div id="size-helper" class="size-helper-container">
                    <div class="fit-analytics lower">
                        <div class="size-guide-wrapper">
                            <label>Sizing Help</label>
                            <span>Still unsure what size to get?</span>
                            <button class="link fit-lower">Find your recommended size</button>
                            <span>or check out our </span>
                            <div class="fit-analytics-size-guide size-guide" >
                                <div class="size-guide-button">
                                    <button class="link">size guide.</button>
                                </div>
                            </div>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="stock-price-retry-oos" id="aside-content-oos">
                    <div class="out-of-stock"></div>
                </div>
                <div class="stock-price-retry" id="aside-content-retry">
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-description">
        <div class="layout-width">
            <div class="product-details">
            <div id="product-details-container" class="overflow-container">
                <div class="col">
                    <div class="product-description">
                        <h2>Product Details</h2>
                        <p>
                            <a>
                                <strong>T-Shirts &amp; Vests</strong>
                            </a> 
                            by 
                            <a href="https://www.asos.com/men/a-to-z-of-brands/asos-design/cat/?cid=27871">
                                <strong>ASOS DESIGN</strong>
                            </a>
                            <br>
                        </p>
                        <ul>
                            <li>Crew neck</li>
                            <li>Short sleeves</li>
                            <li>Branded print to reverse</li>
                            <li>Oversized fit</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <div class="product-code">
                        <h2>Product Code</h2>
                        <p>119968923</p>
                    </div>
                    
                    <div class="brand-description">
                        <h2>Brand</h2>
                        <p>This is 
                            <a>
                            <strong>ASOS DESIGN</strong>
                            </a> – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="size-and-fit">
                        <h2>Size &amp; Fit</h2>
                        <p>Model's height: 188cm/6'2"<br>Model is wearing: Size Medium</p>
                    </div>
                    <div class="care-info">
                        <h2>Look After Me</h2>
                        <p>Machine wash according to instructions on care label</p>
                    </div>
                    <div class="about-me">
                        <h2>About Me</h2>
                        <p>Main: 100% Cotton.</p>
                    </div>
                </div>
                <div class="show-more">
                    <div class="fade">
                        <a class="show">SHOW MORE</a>
                        <a>SHOW LESS</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
<div id="pdp-react-app" style="clear: both">
    <div aria-live="polite" role="status" class="polite-status"></div>
    <div id="mightLike" class="mightLike-border mightLike">
        <section class="mightLike_adaptive mightLikeContainer">
            <h2 class="mightLikeTitle__font mightLikeTitle">YOU MIGHT ALSO LIKE</h2>
            <section class="mightLikeGrid__wrapper mightLikeGrid">
                <div class="mightLike-ul__wrapper">
                    <ul class="mightLike-ul">
                        <li class="mightLike-ul__item">
                            <div class="relative-wrapper" role="group">
                                <a href="" class="title-link" aria-label="ASOS DESIGN oversized t-shirt in black with roses front &amp; back print. £24.00 ">
                                    <div class="img-wrapper">
                                        <img class="preview" src="img/also-like.webp" srcset="" sizes="168px" alt="ASOS DESIGN oversized t-shirt in black with roses front &amp; back print" loading="lazy" aria-hidden="true">
                                    </div>
                                    <div class="price-wrapper_top">
                                        <span class="price-wrapper">
                                            <span aria-hidden="true" data-test-id="current-price" class="Z8aEX">£24.00</span>
                                        </span>
                                    </div>
                                    <h3 class="product-h3 mightLike__product-h3">ASOS DESIGN</h3>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </section>
    </div>
    <div id="buyTheLook" class="buyTheLook">
        <section class="buyTheLook-wrapper" aria-label="Buy The Look Carousel">
            <h2 id="buyTheLookTitle" class="buyTheLookTitle">BUY THE LOOK</h2>
            <section data-test-id="buyTheLookCarousel">
                <div class="section-wrapper">
                    <div class="section-overflow">
                        <ul class="section-ul" aria-label="Showing 1 to 1 of 1 products" aria-hidden="false" data-test-id="carouselList" data-test-count="0">
                            <li class="section-ul__li">
                                <div class="buyTheLook-products">
                                    <div class="relative-wrapper" role="group">
                                        <a href="" class="title-link" aria-label="adidas Originals Streetball II trainers in grey tones and cream. £110.00 ">
                                            <div class="img-wrapper">
                                                <img class="preview" src="img/buy-the-look-preview.webp" srcset="" sizes="168px" alt="adidas Originals Streetball II trainers in grey tones and cream" loading="lazy" aria-hidden="true">
                                            </div>
                                            <h3 class="product-h3">adidas Originals Streetball II trainers in grey tones and cream</h3>
                                            <div class="price-wrapper__top">
                                                <span class="price-wrapper">
                                                    <span aria-hidden="true" data-test-id="current-price" class="np5x1">£110.00</span>
                                                </span>
                                            </div>
                                        </a>
                                        <button class="favorite-btn favorite-btn_top" aria-label="Save for later" data-test-id="saveForLater">
                                            <span class="heart product-heartempty"></span>
                                            <span class="heart-wrapper">
                                                <span class="heart heart_animated product-heartfull"></span>
                                                <span class="heart heart_animated product-heartfull"></span>
                                                <span class="heart heart_animated product-heartfull"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button disabled="" class="slider-btn_left" aria-label="No more products to show" data-test-id="carouselNext">
                        <span class="product-chevron-left-large_status product-chevron-left-large"></span>
                    </button>
                    <button disabled="" class="slider-btn_right" aria-label="No previous products to show" data-test-id="carouselPrevious">
                        <span class="product-chevron-right-large_status product-chevron-right-large"></span>
                    </button>
                </div>
            </section>
            <nav>
                <ul class="carouselPagination" data-test-id="carouselPagination" aria-label="Pagination" aria-describedby="recentlyViewedTitle">
                    <?php 
                    $paggination_pages = 3;
                    if($paggination_pages>1)
                    {
                        echo("<li><button class=\"carouselPagination__btn carouselPagination__btn_active\" aria-current=\"true\"></button></li>");
                        for ($i=0;$i<$paggination_pages-1;$i++)
                        {
                            echo("<li><button class=\"carouselPagination__btn\" aria-current=\"true\"></button></li>");
                        }
                    }
                    ?>
                </ul>
            </nav>
        </section>
    </div>
    <section id="recentlyViewed" class="recentlyViewed" aria-label="Recently Viewed Carousel">
        <div class="recentlyViewed-wrapper">
            <div class="recentlyViewed-header">
                <h2 id="recentlyViewedTitle" class="recentlyViewedTitle" aria-label="RECENTLY VIEWED, 2 products" aria-describedby="recentlyViewedDescription">RECENTLY VIEWED</h2>
                <p class="recentlyViewedDescription" id="recentlyViewedDescription">A list of products you have previously visited on ASOS</p>
                <button class="recentlyViewedButton recentlyViewedButton__text" aria-describedby="recentlyViewedTitle" data-test-id="recentlyViewedClearAll">Clear all</button>
            </div>
            <section data-test-id="recentlyViewedCarousel">
                <div class="section-wrapper">
                    <div class="section-overflow">
                        <ul class='section-ul'>
                            <li class='section-ul__li'>
                                <div class='relative-wrapper' role='group'>
                                    <a href='' class='title-link' aria-label='ASOS Dark Future oversized t-shirt with graffiti graphic large back print in neutral.'>
                                        <div class='img-wrapper'>
                                            <img class='preview' src='img/also-like.webp' srcset='img/also-like.webp' sizes='168px' alt='ASOS Dark Future oversized t-shirt with graffiti graphic large back print in neutral' loading='lazy'>
                                        </div>
                                    </a>
                                    <button class='favorite-btn' aria-label='Save for later' data-test-id='saveForLater'>
                                        <span class='heart product-heartempty'></span>
                                        <span class='heart-wrapper'>
                                            <span class='heart heart_animated product-heartfull'></span>
                                            <span class='heart heart_animated product-heartfull'></span>
                                            <span class='heart heart_animated product-heartfull'></span>
                                        </span>
                                    </button>
                                    <button class='remove-btn' aria-label='Remove item' data-test-id='removeProduct'>
                                        <span class='product-closesmall'></span>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button disabled="" class="slider-btn_left" aria-label="No more products to show" data-test-id="carouselNext">
                        <span class="product-chevron-left-large_status product-chevron-left-large"></span>
                    </button>
                    <button class="slider-btn_right" aria-label="No previous products to show" data-test-id="carouselPrevious">
                        <span class="product-chevron-right-large_status product-chevron-right-large"></span>
                    </button>
                </div>
            </section>
        </div>
        <nav>
            <ul class="carouselPagination" data-test-id="carouselPagination" aria-label="Pagination" aria-describedby="recentlyViewedTitle">
                <?php 
                if($paggination_pages>1)
                {
                    echo("<li><button class=\"carouselPagination__btn carouselPagination__btn_active\" aria-current=\"true\"></button></li>");
                    for ($i=0;$i<$paggination_pages-1;$i++)
                    {
                        echo("<li><button class=\"carouselPagination__btn\" aria-current=\"true\"></button></li>");
                    }
                }
                ?>
            </ul>
        </nav>
    </section>
    <button class="backToTop" data-test-id="backToTop">
        <span class="product-arrowup-wrapper product-arrowup"></span>
        Back to top
    </button>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/wheelzoom.js"></script>
<script src="js/product.js"></script>
<?php require("footer.php")?>