<?php require("header.php")?>
<style>
    .header__bottom {
        background-color: #fff;
        border-bottom: 1px solid #ddd;
    }
    .header__bottom > .header-menu {
        display: none;
    }
</style>
<section class="main-section">
    <div class="container">
        <h1 class="main-section__background">
            <span class="main-section__loading"></span>
            <picture>
                <source srcset="img/mm-main-section-background.avif" media="(max-width: 768px)">
                <img src="img/main-section-background.avif" alt="">
            </picture>
        </h1>
        <div class="main-section__center">
            <div class="container">
                <h2 class="main-section__title">
                    <span>This is ASOS</span>
                </h2>
                <p class="main-section__description">
                    <span>ASOS DESIGN and 850+ brands</span>
                </p>
            </div>
            <div class="main-section__links">
                <div class="main-section__link">
                    <a href="women.php">
                        <span>SHOP WOMEN</span>
                    </a>
                </div>
                <div class="main-section__link">
                    <a href="men.php">
                        <span>SHOP MEN</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-section__bottom">
            <div class="container">
                <div class="main-section__messages">
                    <a href="" class="main-section__message">
                        <span>
                            <img src="" alt="">
                        </span>
                        <span>
                            <p>EASY WORLDWIDE DELIVERY</p>
                            <p>*minimum spends apply</p>
                        </span>
                    </a>
                    <div class="main-section__message">
                        <span>
                            <img src="" alt="">
                        </span>
                        <span>
                            <p>ASOS DESIGN and 850+ brands</p>
                            <p></p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require("footer.php")?>