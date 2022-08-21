<?php require("header.php")?>
<head>
    <link rel="stylesheet" href="css/bag.css">
</head>
<?php include("global-banner.php"); ?>
<div id="bagApp">
    <div class="bag-app is-not-error-page is-recognised has-empty-bag">
        <bag-messages class="bag-messages-application" params="messages: messages">
            <div id="ndd-portal"></div>
        </bag-messages>
        <div class="bag-holder bag-holder--fadeout bag-holder--empty">
                <div class="bag-contents-holder bag-contents-holder-panel bag-contents-holder--empty bag-contents-holder--animate">
                    <div class="empty-bag-contents-holder">
                        <h1 class="empty-bag-title">Your bag is empty</h1>
                            <p class="bag-no-items-text" >Items remain in your bag for 60 minutes, and then they’re moved to your Saved Items.</p>
                                <p class="empty-bag-view-saved-button button-holder">
                                    <button role="link">VIEW SAVED ITEMS</button>
                                </p>

                                <p class="empty-bag-start-shopping-button start-shopping-button-holder">
                                    <a href="https://www.asos.com">Continue Shopping</a>
                                </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="bag-app-modals" aria-hidden="true"></div>
</div>
<?php require("footer.php")?>