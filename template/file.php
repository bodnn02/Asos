<?php require("header.php")?>
<head>
    <link rel="stylesheet" href="css/file.css">
</head>

<div class="asos-product single-product" id="asos-product">
  <section id="core-product" class="core-product-container">
    <div class="layout-width">
      <div id="gallery-content" class="gallery-content-wrapper">
        <div
          class="product-gallery"
          role="region"
          data-bind='attr: {"aria-label": state.resources.pdp_media_gallery_label }, component: { name: "product-gallery", params: { state: state,  data: { product: product, rootElement: $element, id: product.id, images: product.images, media: product.media, playerParams: { scene7: { imageServer: "https://images.asos-media.com", videoServer: "https://video.asos-media.com" }}}}}'
        >
          <div class="gallery-aside-wrapper">
            <div class="thumbnails">
    <ul>
      
        
          <li class="image-thumbnail ">
            <button>
              <img
              src="https://images.asos-media.com/products/asos-dark-future-oversized-t-shirt-with-graffiti-graphic-large-back-print-in-neutral/203179162-1-neutral?$n_240w$&wid=40&fit=constrain"
              alt="Thumbnail 1 of 4"
              sizes="40w"
              />
            </button>
          </li>
          
          <li class="image-thumbnail ">
            <button>
              <img
              src="https://images.asos-media.com/products/asos-dark-future-oversized-t-shirt-with-graffiti-graphic-large-back-print-in-neutral/203179162-2?$n_240w$&wid=40&fit=constrain"
              alt="Thumbnail 2 of 4"
              sizes="40w"
              />
            </button>
          </li>
          
          <li class="image-thumbnail ">
            <button>
              <img
              src="https://images.asos-media.com/products/asos-dark-future-oversized-t-shirt-with-graffiti-graphic-large-back-print-in-neutral/203179162-3?$n_240w$&wid=40&fit=constrain"
              alt="Thumbnail 3 of 4"
              sizes="40w"
              />
            </button>
          </li>
          
          <li class="image-thumbnail ">
            <button>
              <img
              src="https://images.asos-media.com/products/asos-dark-future-oversized-t-shirt-with-graffiti-graphic-large-back-print-in-neutral/203179162-4?$n_240w$&wid=40&fit=constrain"
              alt="Thumbnail 4 of 4"
              sizes="40w"
              />
            </button>
          </li>
          
          
    </ul>
</div>

          </div>
          <div class="product-carousel">
            
<img
    src="https://images.asos-media.com/products/asos-dark-future-oversized-t-shirt-with-graffiti-graphic-large-back-print-in-neutral/203179162-1-neutral?$n_640w$&wid=513&fit=constrain"
    alt="ASOS Dark Future oversized t-shirt with graffiti graphic large back print in neutral"
    sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px"
    onload="window.asos.performance.markAndMeasure('pdp:hero_image_displayed')"
/>

          </div>
        </div>
      </div>
      <div class="layout-aside">
        <div id="oos-label">
          <h3
            class="product-out-of-stock-label"
            data-bind="text:state.resources.pdp_status_out_of_stock"
          ></h3>
          <!-- ko if: !state.productData.isInStock -->
            <div
              data-bind="{attr: {id: 'save-for-later-portal-' + product.id}}"
              class="oos-portal"
            ></div>
          <!-- /ko -->
        </div>
        <div id="aside-content">
          <div class="product-hero">
            <!-- ko if: state.productData.isInStock && product && isMobile -->
            <div
              class="social-share social-share-aside"
              data-bind='component: { name: "social-share", params: { state: state, data: product } }'
            ></div>
            <!-- /ko -->
          </div>
        </div>
        <div id="pdp-react-critical-app"><h1 class="jcdpl">ASOS Dark Future oversized t-shirt with graffiti graphic large back print in neutral</h1><script type="text/javascript">window.asos.performance.markAndMeasure(`pdp:title_displayed`);</script><div class="NOxGR"></div></div>
        <div id="aside-below-price">
          <div class="product-hero">
            <!-- ko if: state.productData.isInStock -->
            <div
              class="overall-rating overall-rating-single-product"
              data-bind='component: { name: "product-ratings", params: { state: state, ratings: state.ratings } }'
            ></div>
            <!-- /ko -->

            <div
              id="product-promo"
              data-bind='style: { display: state.isPromotable() ? "block" : "none"}'
            ></div>

            <div
              id="product-promo-default"
              data-bind='style: { display: !state.isPromotable() ? "block" : "none"}'
            ></div>
          </div>

          <div
            class="out-of-stock"
            data-bind='component: { name: "out-of-stock", params: {state: state, data: product}}'
          ></div>

          <div
            id="product-colour"
            data-bind='component:{
            name: "product-colour",
            params: {
                hideLabels: false,
                useShortSelectColourLabel: false,
                state: state,
                data: product,
                hideOnOutOfStock : true,
                context: "main",
                selectorIndex: 0}
            }'
          ></div>

          <div
            class="component fit-analytics"
            data-bind='component: {
              name: "fit-analytics",
              params: {
                  state: state,
                  data: product
              }
            }'
          >
            <div id="size-select-skeleton"></div>
            <div id="add-to-bag-skeleton"></div>
            <div id="save-for-later-skeleton"></div>
          </div>
        </div>

        

        <div id="ingredients-button" class="ingredients-button-container" data-bind='component: { name: "ingredients-button", params: {state: state, data: product}}'></div>
        <div id="size-helper" class="size-helper-container" data-bind='component: { name: "size-helper", params: {state: state, data: product}}'></div>

        <div class="stock-price-retry-oos" id="aside-content-oos">
          <div
            class="out-of-stock"
            data-bind='component: { name: "out-of-stock", params: {state: state, data: product}}'
          ></div>
        </div>
        <div class="stock-price-retry" id="aside-content-retry">
          <div
            data-bind='component: { name: "stock-price-retry", params: {state: state }}'
          ></div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="product-description">
    <div class="layout-width">
      <div class="product-details" id="product-details">
   <div id="product-details-container" class="overflow-container" data-bind="css: { open: isOpen()}, style: {'max-height':containerHeight()}">
      
      <div class="col">
         <div class="product-description">
            <h2>Product Details</h2>
            <p><a href="https://www.asos.com/men/t-shirts-vests/cat/?cid=7616"><strong>T-Shirts & Vests</strong></a> by <a href="https://www.asos.com/men/a-to-z-of-brands/asos-design/cat/?cid=27871"><strong>ASOS DESIGN</strong></a><br><ul><li>Crew neck</li><li>Short sleeves</li><li>Branded print to reverse</li><li>Oversized fit</li></ul></p>
         </div>
      </div>
      

      <div class="col">
         <div class="product-code">
            <h2>Product Code</h2>
            <p>119968923</p>
         </div>
         
         <div class="brand-description">
            <h2>Brand</h2>
            <p>This is <a href="https://www.asos.com/men/a-to-z-of-brands/asos-design/cat/?cid=27871"><strong>ASOS DESIGN</strong></a> – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.</p>
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
      
      <div class="show-more" data-bind="click:toggle">
         <div class="fade">
            <a href="#" data-bind="css: { show: isOpen() === false}">SHOW MORE</a>
            <a href="#" data-bind="css: { show: isOpen()}">SHOW LESS</a>
         </div>
      </div>
   </div>
</div>
    </div>
  </section>
  

</div>
<div id="pdp-react-app" style="clear: both"></div>
<div class="asos-product single-product">
  <div id="lower-content">
    <div data-bind='component: { name: "toast", params: {state: state}}'></div>
    <div
      data-bind='component: { name: "error-banner", params: {state: state}}'
    ></div>
  </div>
</div>

<?php require("footer.php")?>