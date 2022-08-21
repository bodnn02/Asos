<?php require("header.php")?>
<head>
    <link rel="stylesheet" href="css/bag.css">
</head>
<?php include("global-banner.php"); ?>
<div id="bagApp">
    <div class="bag-app is-not-error-page is-recognised has-bag-items">
        <h1 class="bag-title bag-title--items-mobile sr-only dismissed-message-focus" aria-label="MY BAG"></h1>
        <bag-total class="bag-total-holder-root bag-total-holder-root--quicklink">
            <div class="bag-total-wrapper">
                <div class="bag-total-holder bag-title-holder bag-title-holder--total bag-total-holder--quickLink">

                    <span class="bag-title-quicklink bag-title-quicklink--meta">
                        <span class="sr-only">BAG SUB-TOTAL £17.00</span>
                        <h2 class="bag-title bag-title--total" aria-hidden="true">BAG SUB-TOTAL</h2>

                        <p class="bag-total-title-holder bag-total-title-holder--subtotal" role="text">
                            <span class="bag-total-price bag-total-price--subtotal" aria-hidden="true">£17.00</span>
                        </p>
                    </span>
                    <span class="bag-title-quicklink bag-title-quicklink--checkout">
                        <p class="bag-total-button-holder">
                            <a href="#"
                                class="bag-total-button bag-total-button--checkout bag-total-button--checkout--quicklink">CHECKOUT</a>
                        </p>
                    </span>
                </div>
            </div>
        </bag-total>
        <bag-messages class="bag-messages-application" params="messages: messages">
            <div id="ndd-portal">
            </div>
            <div class="bag-messaging-looper">
                <div class="bag-messaging-holder bag-messaging-holder--marketing" id="bag-messaging-holder-48583">
                    <div class="bag-messaging-icon bag-messaging-looper">
                        <p role="alert" class="bag-messaging-displayText">Can we tempt you? Spend another £18.00 to
                            qualify for FREE Standard Delivery to UK.</p>
                    </div>
                </div>
            </div>
        </bag-messages>
        <div class="bag-holder">
            <div class="bag-contents-wrapper">
                <div class="bag-contents-holder bag-contents-holder--items">
                    <div class="bag-contents-holder-panel bag-title-holder" tabindex="-1">
                        <h1 class="bag-title bag-title--items">MY BAG</h1>
                        <p class="bag-expiry-warning bag-expiry-warning--desktop">Items are reserved for 60 minutes</p>
                    </div>

                    <div id="bag-react-portal"></div>

                    <bag-messages class="bag-messages-panel-product" params="messages: panelMessages.product">
                        <div id="ndd-portal">
                        </div>
                    </bag-messages>

                    <bag-group-list>
                        <ul class="bag-groups">
                            <li class="bag-contents-holder-panel bag-group-holder">
                                <bag-item-list>
                                    <ul class="bag-items">
                                        <li class="bag-item-holder">
                                            <span role="alert" class="deleteNotification">Item deleted</span>
                                            <span role="alert" class="savedNotification">Item saved for later</span>
                                            <div class="bag-item-padding">
                                                <div class="bag-item-border">
                                                    <div class="bag-item-zoomer">
                                                        <bag-item-product class="bag-item bag-item--product">
                                                            <div
                                                                class="bag-item-generic bag-item-container bag-item-container--product bag-item-generic--showing">
                                                                <div class="bag-item__left">
                                                                    <bag-item-image class="bag-item-image">
                                                                        <span class="bag-item-image">
                                                                            <a
                                                                                href="https://www.asos.com/prd/203023732?CTARef=Bag+Item+Image">
                                                                                <img class="bag-item-image-img"
                                                                                    src="//images.asos-media.com/products/south-beach-overlock-stitching-t-shirt-in-black/203023732-1-black"
                                                                                    alt="South Beach overlock stitching t-shirt in black">
                                                                            </a>
                                                                        </span>
                                                                    </bag-item-image>
                                                                </div>
                                                                <div class="bag-item-descriptions">
                                                                    <bag-price class="bag-item-price">
                                                                        <div class="bag-item-price-holder" role="text">
                                                                            <span class="sr-only">Price:</span>
                                                                            <span
                                                                                class="bag-item-price bag-item-price--current">£17.00</span>
                                                                        </div>
                                                                    </bag-price>
                                                                    <p class="bag-item-name">
                                                                        <a href="https://www.asos.com/prd/203023732">South
                                                                            Beach overlock stitching t-shirt in
                                                                            black</a>
                                                                    </p>
                                                                    <p class="bag-item-variants">
                                                                        <span class="bag-item-colour">BLACK</span>
                                                                        <span
                                                                            class="bag-item-size-holder bag-item-select2-holder">
                                                                            <select
                                                                                class="bag-item-size bag-item-selector "
                                                                                data-select2-id="1" tabindex="-1"
                                                                                aria-hidden="true">
                                                                                <option value="203023751"
                                                                                    data-select2-id="3">XS</option>
                                                                            </select>
                                                                        </span>
                                                                        <span
                                                                            class="bag-item-quantity-holder bag-item-select2-holder">
                                                                            <select
                                                                                class="bag-item-quantity bag-item-selector "
                                                                                data-select2-id="4" tabindex="-1"
                                                                                aria-hidden="true">
                                                                                <option value="1" data-select2-id="6">1
                                                                                </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                            </select>
                                                                        </span>
                                                                        <span class="bag-item-quantity-holder">
                                                                            <span
                                                                                class="bag-item-quantity bag-item-quantity--pre bag-item-variant--mobile"
                                                                                aria-hidden="true">Qty</span>
                                                                            <span>
                                                                                <span
                                                                                    class="bag-item-quantity bag-item-variant--mobile">1</span>
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                    <bag-move-to-saved class="bag-item-save"
                                                                        params="item: item"> <button
                                                                            class="bag-item-moveToSaved">Save for
                                                                            later</button>
                                                                    </bag-move-to-saved>
                                                                </div>
                                                                <bag-edit-actions class="bag-item-actions-holder"
                                                                    params="onCancel: reset, onUpdate: updateItemSelection, beingEdited: item.beingEdited">
                                                                </bag-edit-actions>
                                                                <bag-messages
                                                                    params="messages: item.messages, isProduct: true">
                                                                    <div id="ndd-portal">
                                                                    </div>
                                                                </bag-messages>
                                                            </div>
                                                        </bag-item-product>
                                                        <bag-remove class="bag-item-remove-holder"
                                                            params="item: $data, index: $index">
                                                            <div class="bag-item-generic bag-item-generic--showing">
                                                                <button class="bag-item-remove"
                                                                    aria-label="Delete this item"
                                                                    data-id="5fb6bea1-f3f9-4dd0-8294-0509caf1bb2c"></button>
                                                            </div>
                                                        </bag-remove>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </bag-item-list>
                            </li>
                        </ul>
                    </bag-group-list>

                    <div class="bag-contents-holder-panel">
                        <div class="bag-subtotal" role="text">
                            <span class="bag-subtotal-subtotal">Sub-total</span>
                            <span class="bag-subtotal-price">£17.00</span>
                        </div>
                    </div>
                </div>
                <div class="bag-main-bottom-panel">
                    <p class="bag-expiry-warning bag-expiry-warning--mobile">Items are reserved for 60 minutes
                    </p>
                    <bag-subscription-options>
                    </bag-subscription-options>
                    <bag-delivery-information params="bag: bag"><a class="
bag-panel-link
bag-panel-link--delivery
" target="_blank" title="FREE* STANDARD DELIVERY" href="https://www.asos.com/customer-service/delivery/">
                            <div class="
bag-panel-container
bag-panel-container--delivery
">
                                <h2 class="bag-panel-title">FREE* STANDARD DELIVERY</h2>
                                <p class="bag-panel-content">Faster delivery options available to most countries.</p>
                                <p class="
    bag-panel-content
    bag-panel-content--underline
">More info</p>
                            </div>
                        </a>
                    </bag-delivery-information>
                </div>
            </div>
            <div class="bag-secondary-content-wrapper" style="top: 10px;">
                <div class="bag-contents-holder bag-contents-holder-panel bag-contents-holder--total">
                    <bag-total class="bag-total-holder-root bag-total-holder-root--main" params="
                        subTotal: bag.summary.totalPrice.text,
                        delivery: bag.delivery,
                        items: bag.items,
                        deliveryAddress:
                        bag.deliveryAddress,
                        quickLink: false,
                        canShowDelivery: canShowDelivery
                    ">
                        <div class="bag-total-wrapper">
                            <div class="bag-total-holder bag-title-holder bag-title-holder--total">
                                <span class="bag-title-quicklink bag-title-quicklink--meta">
                                    <h2 class="bag-title bag-title--total">Total</h2>
                                    <p class="bag-total-title-holder bag-total-title-holder--subtotal" role="text">
                                        <span class="bag-total-title bag-total-title--subtotal">Sub-total</span>
                                        <span class="bag-total-price bag-total-price--subtotal">£17.00</span>
                                    </p>
                                </span>
                                <bag-delivery-options params="delivery: delivery">
                                    <p class="bag-total-title-holder bag-total-title-holder--delivery">
                                        <span class="bag-total-title bag-total-title--delivery">Delivery</span>
                                        <a class="bag-delivery-options-link" target="_blank"
                                            title="Read about our delivery options by clicking here"
                                            href="https://www.asos.com/customer-service/delivery/?CTARef=Bag+Delivery+Info+Button"></a>
                                    </p>
                                    <div class="delivery-dropdown-holder">
                                        <span class="bag-item-selector--desktop">
                                            <select class="bag-item-selector "
                                                data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                <option value="1" data-select2-id="9">Standard Delivery (£4.00)</option>
                                                <option value="9">Click &amp; Collect - Standard (£4.00)</option>
                                                <option value="10">Click &amp; Collect - Next Day Delivery (£5.95)
                                                </option>
                                                <option value="2">Next Day Delivery (£5.95)</option>
                                                <option value="6">Next Day Delivery (NI) (£5.95)</option>
                                                <option value="12">Click &amp; Collect - DPD Next Day Delivery AM
                                                    (£5.95)</option>
                                                <option value="11">Next Day Delivery (OA) (£5.95)</option>
                                                <option value="4">Nominated Day (£5.95)</option>
                                                <option value="25">ASOS Staff Orders (Free)</option>
                                                <option value="7">ASOS Instant / Evening Delivery (£7.95)</option>
                                            </select>
                                        </span>
                                        <span class="bag-item-selector--mobile">
                                            <select class="bag-item-selector "
                                                data-select2-id="10" tabindex="-1" aria-hidden="true">
                                                <option value="1" data-select2-id="12">Standard Delivery (£4.00)
                                                </option>
                                                <option value="9">Click &amp; Collect - Standard (£4.00)</option>
                                                <option value="10">Click &amp; Collect - Next Day Delivery (£5.95)
                                                </option>
                                                <option value="2">Next Day Delivery (£5.95)</option>
                                                <option value="6">Next Day Delivery (NI) (£5.95)</option>
                                                <option value="12">Click &amp; Collect - DPD Next Day Delivery AM
                                                    (£5.95)</option>
                                                <option value="11">Next Day Delivery (OA) (£5.95)</option>
                                                <option value="4">Nominated Day (£5.95)</option>
                                                <option value="25">ASOS Staff Orders (Free)</option>
                                                <option value="7">ASOS Instant / Evening Delivery (£7.95)</option>
                                            </select>
                                        </span>
                                    </div>
                                </bag-delivery-options>
                                <span class="bag-title-quicklink bag-title-quicklink--checkout">
                                    <p class="bag-total-button-holder">
                                        <a href="#"
                                            class="bag-total-button bag-total-button--checkout bag-total-button--checkout--total">CHECKOUT</a>
                                    </p>
                                </span>
                            </div>
                        </div>
                    </bag-total>
                    <bag-payment-options params="bag: bag">
                        <div class="bag-payment-options">
                            <div class="bag-payment-options-title">WE ACCEPT:</div>
                            <img class="bag-payment-options-image"
                                src="https://assets.asosservices.com/asos-finance/images/marketing/gb/singleV2.png"
                                alt="Apple Pay, American Express, VISA, VISA Electron, VISA Debit, VISA Carte Bleue, VISA Electron Carte Bleue, VISA Debit Carte Bleue, VISA Purchasing, Maestro, Mastercard, Debit Mastercard, PayPal, Pay in 3 with PayPal Pay Later, Pay Later With Klarna, Pay in 3 with Klarna, Clearpay, Gift voucher, Google Pay">
                        </div>
                    </bag-payment-options>
                    <div class="bag-discount-message">Got a
                        discount code? Add it in the next step.</div>
                    <bag-messages class="bag-messages-panel-totals" params="messages: panelMessages.totals">
                        <div id="ndd-portal">
                        </div>
                    </bag-messages>
                </div>
            </div>
            <bag-expired-items-message-block>
                <div class="bag-view-saved-items-holder">
                    <h2 class="bag-expired-items-header">
                        Wondering where your items have gone?</h2>
                    <p class="bag-expired-items-text">No
                        worries – you'll find them in your Saved Items.</p>
                    <a class="view-saved-items-btn" href="https://www.asos.com/saved-lists/">VIEW ALL SAVED ITEMS</a>
                </div>
            </bag-expired-items-message-block>
        </div>
    </div>
    <div class="bag-app-modals" aria-hidden="true" style="
/* display: block; */
">
    </div>
</div>
<?php require("footer.php")?>