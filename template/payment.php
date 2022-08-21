<head>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/app.desktop.en-gb.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<div class="l-page" data-bind="component: { name: 'chrome' }">
    <header role="banner"><a class="logo"
            data-bind="attr: { href: logoLinkUrl, title: content.web_checkout_chromeheader_chkfilename_logo_title }"
            href="https://www.asos.com" title="ASOS Secure Checkout"><span class="is-hidden-text"
                data-bind="content: 'web_checkout_chromeheader_chkfilename_logo_title'">ASOS Secure Checkout</span></a>
        <h1 data-bind="content: 'web_checkout_chromeheader_chkfilename_checkout_heading'">Checkout</h1>
        <div data-bind="attr: { id: digiCertId }" class="digi-cert-seal" id="DigiCertClickID_dQkJvi0b">
            <div id="DigiCertClickID_dQkJvi0bSeal"
                style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;">
                <img src="img/digicert.png" alt="DigiCert Secured Site Seal" tabindex="0" role="link"
                    style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;">
            </div>
        </div>
    </header>
    <main role="main" style="min-height: 157px;">
        <div class="l-lc is-card-animator" data-bind="directChildRevealAnimator: true">
            <div class="l-card delivery-country is-seen"
                data-bind="scrollToOn: scrollOnTrackingEvents, focusOutAction: { action: close.bind($data), guard: isOpen }, css: { 'is-masked': isDeliveryCountryMasked }">
                <h2 data-bind="content: 'web_checkout_deliverycountry_chkfilename_delivery_country_label'">Delivery
                    country</h2>
                <div class="l-field">
                    <div class="select"><label for="countryCode" class="is-screen-reader-text"
                            data-bind="content: 'web_checkout_deliverycountry_chkfilename_delivery_country_label'">Delivery
                            country</label>
                        <div>
                            <div class="input-container">
                                <div data-bind="preloadBackgroundImage: { replaceTokens: [{ tokenKey: 'empty-flag-image', tokenValue: selectedCountryCode }] }"
                                    class="country-image"
                                    style="background-image: url(img/flags/ru.png);">
                                </div> <select id="countryCode">
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brazil</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island (Australia)</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CG">Congo, the Republic of</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="SZ">Eswatini</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GU">Guam</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland, Republic of</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JP">Japan</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KR">Korea, Republic of (South Korea)</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MK">North Macedonia</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestine</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="GB">UK</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="US">United States</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div class="delivery-country-message is-seen"
                data-bind="css: { 'is-masked': isDeliveryCountryMessageMasked }">
                <div class="mask-overlay"></div>
            </div>
            <div class="discount-vouchers-container is-seen"
                data-bind="scrollToOn: scrollOnTrackingEvents, css: { 'is-loading': isLoading, 'is-masked': isMasked }">
                <div class="l-card l-expandable discount-and-vouchers">
                    <a href="#" class="expandable-heading-container">
                        <div class="header">
                            <h2 data-bind="content: 'web_checkout_discountandvouchers_chkfilename_header'">Promo/student
                                code or vouchers</h2>
                        </div>
                    </a>
                    <div class="l-tabbed-dialog" id="discount-and-vouchers-container" style="display: none;">
                        <nav>
                            <ul role="tablist">
                                <li class="add-discount is-active"
                                    data-bind="css: { 'is-active': mode() === 'discount' }">
                                    <h4>
                                        <a>
                                            <span class="icon icon-tag">Promo/student code</span>
                                        </a>
                                    </h4>
                                </li>
                                <li class="add-voucher" data-bind="css: { 'is-active': mode() === 'voucher' }">
                                    <h4>
                                        <a>
                                            <span class="icon icon-gift">Voucher</span>
                                        </a>
                                    </h4>
                                </li>
                            </ul>
                        </nav>
                        <div class="add-discount" id="add-discount-tab" role="tabpanel"
                            aria-labelledby="add-discount-controls">
                            <div class="discount-voucher-wrapper">
                                <h4 tabindex="0">Add a promo/student code</h4>
                                <div class="l-field" data-bind="validationElement: discountCode">
                                    <form data-bind="submit: applyCode" autocomplete="on">
                                        <label for="discountCode"
                                            data-bind="content: 'web_checkout_adddiscount_chkfilename_promo_subheader'">Promo/student
                                            code</label>
                                        <input type="text" id="discountCode" data-bind="textInput: discountCode"
                                            spellcheck="false" autocorrect="off" aria-describedby="discount-code">
                                        <span class="validation-error" id="discount-code" style="opacity: 0;"></span>
                                        <button class="btn primary apply-code" type="submit">Apply code</button>
                                    </form>
                                </div>
                            </div>
                            <div class="need-to-know">
                                <h4>Need to know</h4>
                                <ul>
                                    <li>
                                        <span>You can only use one discount/promo code per order.<br>This applies to our
                                            free-delivery codes, too.</span>
                                    </li>
                                    <li>
                                        <span>Discount/promo codes cannot be used when buying gift vouchers.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-voucher" id="add-voucher-tab" role="tabpanel"
                            aria-labelledby="add-voucher-controls" style="display: none;">
                            <div class="discount-voucher-wrapper">
                                <h4 data-bind="content: 'web_checkout_addvoucher_chkfilename_voucher_subheading'">Add a
                                    voucher</h4>
                                <div>
                                    <div class="l-field">
                                        <form data-bind="submit: applyCode" autocomplete="off">
                                            <label for="voucherCode"
                                                data-bind="content: 'web_checkout_addvoucher_chkfilename_voucher_code_label'">16-digit
                                                voucher code</label>
                                            <div class="input-wrapper">
                                                <input type="text" id="voucherCode" data-bind="textInput: voucherCode"
                                                    spellcheck="false" autocorrect="off"
                                                    aria-describedby="voucher-code">
                                                <span class="validation-error" id="voucher-code"></span>
                                                <button class="btn primary apply-code" type="submit">Add
                                                    voucher</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="message info-desc icon icon-info">
                                        <span data-bind="text: myAccountGiftCardPromptForRegistered1">Got a gift card?
                                            Visit </span>
                                        <a target="_blank"
                                            href="https://my.asos.com/my-account/gift-cards-and-vouchers/add/card?country=UA&amp;keyStoreDataversion=dup0qtf-35&amp;ctaRef=giftcard">My
                                            Account</a>
                                        <span data-bind="text: myAccountGiftCardPromptForRegistered2"> to add it to your
                                            gift-voucher balance before you can redeem it at checkout.</span>
                                    </div>
                                </div>
                                <div class="customer-vouchers-container">
                                    <div class="mask-overlay"></div>
                                </div>
                                <div class="mask-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="applied-messages">
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div class="l-card email-address is-seen"
                data-bind="scrollToOn: scrollOnTrackingEvents, focusOutAction: { action: close.bind($data), guard: isOpen }, css: { 'is-saving': isSaving, 'is-masked': isMasked }">
                <h2 class="replay-label"
                    data-bind="content: 'web_checkout_emailaddress_chkfilename_email_address_label'">Email address</h2>
                <div class="l-field"
                    data-bind="validationElement: emailAddress, validationOptions: {insertMessages: false, messagesOnModified: false, decorateElementOnModified: false, errorsAsTitle: false, errorElementClass: 'is-error'}"
                    title="">


                    <span class="replay-value" data-cs-mask="" data-bind="text: emailAddress">darkid71@gmail.com</span>


                </div>
                <div class="mask-overlay"></div>
            </div>

            <div class="l-card delivery-address is-seen"
                data-bind="scrollToOn: scrollOnTrackingEvents, focusOutAction: { action: close.bind($data), guard: isOpen }, css: { 'is-disabled': !isEnabled(), 'is-loading': isDeliveryAddressLoading, 'is-masked': isMasked }">
                <h2 data-bind="content: 'web_checkout_deliveryaddress_chkfilename_delivery_address_heading'">Delivery
                    address</h2>
                <div class="l-tabbed-dialog">
                    <nav>
                        <ul role="tablist">
                            <li class="postal is-active" data-bind="css: {'is-active': isPostalTabActive}">
                                <h4><a href="#" data-bind="click: showPostal" role="tab"
                                        aria-controls="address-container"><span class="icon icon-home"
                                            data-bind="content: 'web_checkout_deliveryaddress_chkfilename_postal_address'">Postal
                                            address</span></a></h4>
                            </li>
                            <li class="collection"
                                data-bind="css: {'is-active': !isPostalTabActive(), 'is-disabled': hasDTSRestriction()}">
                                <h4><a href="#"
                                        data-bind="click: showCollectionPoint, attr: {'tabindex': hasDTSRestriction() ? '-1' : null}"
                                        role="tab" aria-controls="collection-point address"><span class="icon icon-pin"
                                            data-bind="content: 'web_checkout_deliveryaddress_chkfilename_shared_chksubkey_collection_point'">Click
                                            &amp; Collect</span></a></h4>
                            </li>
                        </ul>
                    </nav>
                    <div class="address">
                        <div class="add-address">
                            <div class="l-heading-with-button">
                                <h4 tabindex="-1"
                                    data-bind="content: 'web_checkout_addpostaladdress_chkfilename_add_address_heading'">
                                    Add address</h4>

                            </div>
                            <div class="address-entry"
                                data-bind="validationOptions: {insertMessages: false,  messagesOnModified: false, decorateElementOnModified: false, errorsAsTitle: false, errorElementClass: 'is-error'}">
                                <form data-bind="submit: saveAndDeliver" autocomplete="on">
                                    <div>
                                        <div class="l-field" data-bind="validationElement: firstName"><label
                                                for="firstName">
                                                First
                                                name
                                            </label> <input id="firstName" type="text" name="firstname"
                                                data-bind="textInput: firstName" spellcheck="false" autocorrect="off"
                                                autocomplete="given-name" aria-describedby="first-name-error"> <span
                                                class="validation-error"
                                                data-bind="validationError: 'firstName', errorMessagePrefix: 'web_checkout_contactdetails_chkfilename_'"
                                                id="first-name-error" style="opacity: 0;"></span></div>
                                        <div class="l-field" data-bind="validationElement: lastName"><label
                                                for="lastName">
                                                Last
                                                name
                                            </label> <input id="lastName" type="text" name="lastname"
                                                data-bind="textInput: lastName" spellcheck="false" autocorrect="off"
                                                autocomplete="family-name" aria-describedby="last-name-error"> <span
                                                class="validation-error"
                                                data-bind="validationError: 'lastName', errorMessagePrefix: 'web_checkout_contactdetails_chkfilename_'"
                                                id="last-name-error" style="opacity: 0;"></span></div>
                                        <div class="l-field" data-bind="validationElement: contactNumber"><label
                                                for="contactNumber">
                                                Mobile
                                                &nbsp;
                                                <em>(
                                                    For
                                                    delivery updates
                                                    )
                                                </em>
                                            </label> <input id="contactNumber" type="tel" name="phone"
                                                data-bind="textInput: contactNumber" spellcheck="false"
                                                autocorrect="off" autocomplete="tel"
                                                aria-describedby="contact-number-error"> <span class="validation-error"
                                                data-bind="validationError: 'contactNumber', errorMessagePrefix: 'web_checkout_contactdetails_chkfilename_'"
                                                id="contact-number-error" style="opacity: 0;"></span></div>
                                        <div class="l-field"><label for="address_finder">
                                                Address
                                                finder
                                            </label>
                                            <div class="autocomplete address-finder"
                                                data-bind="template: { afterRender: setupHidingHandlers.bind($component) }">
                                                <input id="address_finder" class="icon icon-find" type="text"
                                                    data-bind="attr: {'aria-activedescendant': searchBoxActiveDescendant, 'aria-expanded': resultsVisible}, textInput: userEntry, placeholder: 'web_checkout_checkout_chkfilename_shared_chksubkey_placeholder', event: { keydown: handleKeyDown }, hasFocus: userEntryHasFocus"
                                                    autocomplete="off" spellcheck="false" autocorrect="off"
                                                    aria-owns="searchResults"
                                                    placeholder="Start typing the first line of your address.">
                                            </div>
                                        </div>
                                        <div class="l-field country"><span class="replay-label"
                                                data-bind="content: 'web_checkout_postaladdressentry_chkfilename_shared_chksubkey_country_name_label'">Country</span>
                                            <span class="replay-value" data-cs-mask=""
                                                data-bind="text: countryName">UK</span>
                                        </div>
                                        <div class="l-field address-manual-entry"><a class="link-enter-manually"
                                                href="#"
                                                data-bind="content: 'web_checkout_postaladdressentry_chkfilename_shared_chksubkey_enter_manually_link', click: editAddress">Enter
                                                address manually</a></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mask-overlay"></div>
            </div>
            <div class="l-card delivery-address is-seen">
                <h2>Delivery address</h2>
                <div class="l-tabbed-dialog">
                    <nav>
                        <ul role="tablist">
                            <li class="postal is-active" data-bind="css: {'is-active': isPostalTabActive}">
                                <h4><a href="#" data-bind="click: showPostal" role="tab"
                                        aria-controls="address-container"><span class="icon icon-home"
                                            data-bind="content: 'web_checkout_deliveryaddress_chkfilename_postal_address'">Postal
                                            address</span></a></h4>
                            </li>
                            <li class="collection"
                                data-bind="css: {'is-active': !isPostalTabActive(), 'is-disabled': hasDTSRestriction()}">
                                <h4><a href="#"
                                        data-bind="click: showCollectionPoint, attr: {'tabindex': hasDTSRestriction() ? '-1' : null}"
                                        role="tab" aria-controls="collection-point address"><span class="icon icon-pin"
                                            data-bind="content: 'web_checkout_deliveryaddress_chkfilename_shared_chksubkey_collection_point'">Click
                                            &amp; Collect</span></a></h4>
                            </li>
                        </ul>
                    </nav>
                    <div class="address">
                        <div class="address-container">
                            <div class="address-summary"
                                data-bind="foreach: { data: $data, afterRender: $parent.afterRender.bind($parent) }">
                                <span data-cs-mask="" data-bind="html:$data">Max Wings</span>
                                <br><span data-cs-mask="" data-bind="html:$data">1 Britannia, Bronygarth</span>
                                <br><span data-cs-mask="" data-bind="html:$data">Oswestry</span><br>
                                <span data-cs-mask="" data-bind="html:$data">Shropshire</span>
                                <br><span data-cs-mask="" data-bind="html:$data">SY10 7LZ</span><br>
                                <span data-cs-mask="" data-bind="html:$data">UK</span>
                                <br><span data-cs-mask="" data-bind="html:$data">380932559626</span>

                            </div>

                            <div class="address-actions"><button class="btn tertiary change"
                                    data-bind="content: 'web_checkout_postaladdress_chkfilename_change', click: change">Change</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div class="l-card delivery-options is-disabled is-seen"
                data-bind="css: { 'is-disabled': !isDeliveryOptionsEnabled(), 'is-loading': isDeliveryOptionsLoading, 'is-masked': isDeliveryOptionsMasked }">
                <h2 data-bind="content: 'web_checkout_delivery_chkfilename_delivery_options_heading'">Delivery options
                </h2>
                <div>
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div class="l-card delivery-options is-seen">
                <div>
                    <fieldset>
                        <legend class="deliveryTitle"
                            data-bind="content: 'web_checkout_delivery_chkfilename_delivery_options_heading'">Delivery
                            options
                        </legend>
                        <ul class="option-list">
                            <li class="delivery-option"
                                data-bind="css: { 'nominated-date' : $data.availableDeliveryDates().length > 0 }">
                                <div class="option-wrapper"
                                    data-bind="click: function() { $parent.deliveryOptionId($data.deliveryOptionId()); return true; }">
                                    <div class="option-summary"
                                        data-bind="attr: {'id': $data.name().replace(/\s+/g,'') + 'Details'}"
                                        id="StandardDeliveryDetails">
                                        <div class="price">
                                            <span data-bind="currency: $data.price().priceToPay().value()">£4.00</span>
                                        </div>
                                        <div class="details"><label class="title"
                                                data-bind="text: $parent.getDeliveryOptionLabel($data), attr: {'for' : 'delivery_' + $data.deliveryOptionId() }"
                                                for="delivery_1">Standard Delivery</label>
                                            <div class="description l-field select"><span
                                                    data-bind="restrictedHtml: $parent.propositionForOption($data)">Delivered
                                                    on or
                                                    before Wednesday, 24 August, 2022</span>
                                            </div>
                                            <div class="delivery-options-information-message icon icon-info is-collapsed"
                                                data-bind="css: { 'is-collapsed': isCollapsed }">
                                                <div data-bind="restrictedHtml: $data">BFPO delivery is possible on
                                                    Standard
                                                    Delivery. Parcel Locker delivery is possible for Jersey (JE)
                                                    postcodes. Delivery
                                                    is excluded on Public Holidays. </div>
                                                <a class="link-tertiary" href="#"
                                                    data-bind="click: toggleFullMessage, clickBubble: false">
                                                    more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-radio l-custom-field"><input type="radio"
                                            name="selectedDeliveryOption"
                                            data-bind=""
                                            value="1" aria-label="Standard Delivery"
                                            aria-describedby="StandardDeliveryDetails" id="delivery_1"> <span role="img"
                                            aria-hidden="true">&nbsp;</span></div>
                                </div>
                            </li>
                            <li class="delivery-option"
                                data-bind="css: { 'nominated-date' : $data.availableDeliveryDates().length > 0 }">
                                <div class="option-wrapper"
                                    data-bind="click: function() { $parent.deliveryOptionId($data.deliveryOptionId()); return true; }">
                                    <div class="option-summary"
                                        data-bind="attr: {'id': $data.name().replace(/\s+/g,'') + 'Details'}"
                                        id="NextDayDeliveryDetails">
                                        <div class="price"><span
                                                data-bind="currency: $data.price().priceToPay().value()">£5.95</span>
                                        </div>
                                        <div class="details"><label class="title"
                                                data-bind="text: $parent.getDeliveryOptionLabel($data), attr: {'for' : 'delivery_' + $data.deliveryOptionId() }"
                                                for="delivery_2">Next Day Delivery</label>
                                            <div class="description l-field select"><span
                                                    data-bind="restrictedHtml: $parent.propositionForOption($data)">Delivered
                                                    between 7am and 10pm on Sunday, 21 August, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-radio l-custom-field"><input type="radio"
                                            name="selectedDeliveryOption"
                                            data-bind=""
                                            value="2" aria-label="Next Day Delivery"
                                            aria-describedby="NextDayDeliveryDetails" id="delivery_2"> <span role="img"
                                            aria-hidden="true">&nbsp;</span></div>
                                </div>
                            </li>
                            <li class="delivery-option nominated-date"
                                data-bind="css: { 'nominated-date' : $data.availableDeliveryDates().length > 0 }">
                                <div class="option-wrapper"
                                    data-bind="click: function() { $parent.deliveryOptionId($data.deliveryOptionId()); return true; }">
                                    <div class="option-summary"
                                        data-bind="attr: {'id': $data.name().replace(/\s+/g,'') + 'Details'}"
                                        id="NominatedDayDetails">
                                        <div class="price">
                                            <span data-bind="currency: $data.price().priceToPay().value()">£5.95</span>
                                        </div>
                                        <div class="details"><label class="title"
                                                data-bind="text: $parent.getDeliveryOptionLabel($data), attr: {'for' : 'delivery_' + $data.deliveryOptionId() }"
                                                for="delivery_4">Nominated Day</label>
                                            <div class="description l-field select"><span
                                                    data-bind="restrictedHtml: $parent.propositionForOption($data)">Choose
                                                    a day
                                                    that suits you</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-radio l-custom-field"><input type="radio"
                                            name="selectedDeliveryOption"
                                            data-bind=""
                                            value="4" aria-label="Nominated Day" aria-describedby="NominatedDayDetails"
                                            id="delivery_4"> <span role="img" aria-hidden="true">&nbsp;</span></div>
                                </div>
                            </li>
                        </ul>
                    </fieldset>
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div data-bind="css: { 'is-masked': isMasked }" class="is-seen">
                <div class="l-card payment is-disabled"
                    data-bind="scrollToOn: scrollOnTrackingEvents, css: { 'is-disabled': isDisabled, 'is-loading': isLoading }">
                    <h2 data-bind="content: 'web_checkout_payment_chkfilename_payment_heading'">Payment</h2>
                    <div class="mask-overlay"></div>
                </div>
                <div class="payment-marketing-image"
                    data-bind="css : { 'is-masked': isPaymentOptionsMarketingImagesMasked }">
                    <div class="mask-overlay"></div>
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div data-bind="css: { 'is-masked': isMasked }" class="is-seen">
                <div class="l-card payment"
                    data-bind="scrollToOn: scrollOnTrackingEvents, css: { 'is-disabled': isDisabled, 'is-loading': isLoading }">
                    <h2 data-bind="content: 'web_checkout_payment_chkfilename_payment_heading'">Payment</h2>
                    <div class="l-tabbed-dialog">
                        <div class="address billing-address is-initialised"
                            data-bind="focusOutAction: { action: close.bind($data), guard: isOpen.bind($data), containerSelectorOverride: '.l-card.payment, .l-card.payment *:not(.payment-details *)' }, css: { 'is-masked': isMasked, 'is-loading': isLoading, 'is-initialised': isInitialised }">
                            <div class="address-container">
                                <div class="address-summary">
                                    <h4
                                        data-bind="content: 'web_checkout_billingaddress_chkfilename_billing_address_heading'">
                                        Billing address</h4>
                                    <div class="address-summary"
                                        data-bind="foreach: { data: $data, afterRender: $parent.afterRender.bind($parent) }">
                                        <span data-cs-mask="" data-bind="html:$data">Max Wings</span>
                                        <br><span data-cs-mask="" data-bind="html:$data">1 Britannia, Bronygarth</span>
                                        <br><span data-cs-mask="" data-bind="html:$data">Oswestry</span>
                                        <br><span data-cs-mask="" data-bind="html:$data">Shropshire</span>
                                        <br><span data-cs-mask="" data-bind="html:$data">SY10 7LZ</span>
                                        <br><span data-cs-mask="" data-bind="html:$data">UK</span><br>
                                        <span data-cs-mask="" data-bind="html:$data">380932559626</span>
                                    </div>

                                </div>
                                <div class="address-actions"><a class="btn tertiary change" href="#"
                                        data-bind="content: 'web_checkout_billingaddress_chkfilename_change', click: change">Change</a>
                                </div>
                            </div>
                            <div class="mask-overlay"></div>
                        </div>
                        <div class="payment-details"
                            data-bind="focusOutAction: { action: setModeToHub.bind($data), guard: isOpenNotCardDetails.bind($data) }, css: { 'is-disabled': isDisabled(), 'is-loading': isLoading, 'is-masked': isMasked, 'has-payment-providers-message': showPaymentProvidersMessage() }, validationOptions: { insertMessages: false, messagesOnModified: false, decorateElementOnModified: false, errorsAsTitle: false, errorElementClass: 'is-error' }">
                            <div class="l-card-heading">
                                <h4
                                    data-bind="content: 'web_checkout_payonasospaymentdetails_chkfilename_payment_details_heading'">
                                    Payment type</h4>
                            </div>
                            <div class="payment-methods">
                                <ul>
                                    <li>
                                        <button class="btn secondary payment-method card"
                                            data-bind="css: buttonClasses(), click: $data.onClick, content: 'web_checkout_addpaymentbutton_chkfilename_payment_method_' + $data.paymentMethod.id, style: { backgroundImage: 'url(\'' + ($data.paymentMethod.imageUrl || '/images/payment/payment-method/card.png') + '\')' },  attr: { disabled: $data.paymentMethod.hasAmountRestriction, 'aria-label': ariaLabel }"
                                            aria-label="Credit/debit card"
                                            style="background-image: url(&quot;https://assets.asosservices.com/asos-finance/images/paymentmethods/card.png&quot;);">Add
                                            credit/debit card</button>
                                        <span class="divider-text"
                                            data-bind="content: 'web_checkout_paymentmethods_chkfilename_payment_method_divider_text'">Or</span>
                                    </li>
                                    <li>
                                        <button class="btn secondary payment-method payPal"
                                            data-bind="css: buttonClasses(), click: $data.onClick, content: 'web_checkout_addpaymentbutton_chkfilename_payment_method_' + $data.paymentMethod.id, style: { backgroundImage: 'url(\'' + ($data.paymentMethod.imageUrl || '/images/payment/payment-method/card.png') + '\')' },  attr: { disabled: $data.paymentMethod.hasAmountRestriction, 'aria-label': ariaLabel }"
                                            aria-label="PayPal"
                                            style="background-image: url(&quot;https://assets.asosservices.com/asos-finance/images/paymentmethods/paypal.png&quot;);">PayPal</button>
                                    </li>
                                    <li>
                                        <button class="btn secondary payment-method payPalPayIn3"
                                            data-bind="css: buttonClasses(), click: $data.onClick, content: 'web_checkout_addpaymentbutton_chkfilename_payment_method_' + $data.paymentMethod.id, style: { backgroundImage: 'url(\'' + ($data.paymentMethod.imageUrl || '/images/payment/payment-method/card.png') + '\')' },  attr: { disabled: $data.paymentMethod.hasAmountRestriction, 'aria-label': ariaLabel }"
                                            disabled="true" aria-label="Pay in 3 with PayPal Pay Later"
                                            style="background-image: url(&quot;https://assets.asosservices.com/asos-finance/images/paymentmethods/paypal.png&quot;);">Pay
                                            In 3 <span class="button-subtitle">with PayPal Pay Later</span></button>
                                        <div class="payment-method-not-available-message">
                                            In 3 is only available for orders above £30.00 and below £2,000.00

                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn secondary payment-method klarnaPAD"
                                            data-bind="css: buttonClasses(), click: $data.onClick, content: 'web_checkout_addpaymentbutton_chkfilename_payment_method_' + $data.paymentMethod.id, style: { backgroundImage: 'url(\'' + ($data.paymentMethod.imageUrl || '/images/payment/payment-method/card.png') + '\')' },  attr: { disabled: $data.paymentMethod.hasAmountRestriction, 'aria-label': ariaLabel }"
                                            aria-label="Pay Later With Klarna"
                                            style="background-image: url(&quot;https://assets.asosservices.com/asos-finance/images/paymentmethods/klarnainstalments.png&quot;);">Pay
                                            later <span class="button-subtitle">with Klarna</span></button>
                                    </li>
                                    <li>
                                        <button class="btn secondary payment-method klarnaPayIn3"
                                            data-bind="css: buttonClasses(), click: $data.onClick, content: 'web_checkout_addpaymentbutton_chkfilename_payment_method_' + $data.paymentMethod.id, style: { backgroundImage: 'url(\'' + ($data.paymentMethod.imageUrl || '/images/payment/payment-method/card.png') + '\')' },  attr: { disabled: $data.paymentMethod.hasAmountRestriction, 'aria-label': ariaLabel }"
                                            disabled="true" aria-label="Pay in 3 with Klarna"
                                            style="background-image: url(&quot;https://assets.asosservices.com/asos-finance/images/paymentmethods/klarnainstalments.png&quot;);">Pay
                                            In 3 <span class="button-subtitle">with Klarna</span></button>
                                        <div class="payment-method-not-available-message">
                                            In 3 with Klarna is only available for orders above £25.00 and below £800.00

                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn secondary payment-method clearpay"
                                            data-bind="css: buttonClasses(), click: $data.onClick, content: 'web_checkout_addpaymentbutton_chkfilename_payment_method_' + $data.paymentMethod.id, style: { backgroundImage: 'url(\'' + ($data.paymentMethod.imageUrl || '/images/payment/payment-method/card.png') + '\')' },  attr: { disabled: $data.paymentMethod.hasAmountRestriction, 'aria-label': ariaLabel }"
                                            disabled="true" aria-label="Clearpay"
                                            style="background-image: url(&quot;https://assets.asosservices.com/asos-finance/images/paymentmethods/afterpayV2.png&quot;);">Clearpay</button>
                                        <div class="payment-method-not-available-message">
                                            is only available for orders above £25.00 and below £800.00

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mask-overlay"></div>
                        </div>
                    </div>
                    <div class="mask-overlay"></div>
                </div>
                            <div class="payment-marketing-image"
                                data-bind="css : { 'is-masked': isPaymentOptionsMarketingImagesMasked }">
                                <div class="cards-accepted"><span class="label">
                                        We accept:
                                    </span> <img data-bind="attr: { src: marketingImageUrl, alt: marketingImageAltTag }"
                                        src="https://assets.asosservices.com/asos-finance/images/marketing/gb/singleV2.png"
                                        alt="American Express, VISA, VISA Electron, VISA Debit, VISA Carte Bleue, VISA Electron Carte Bleue, VISA Debit Carte Bleue, VISA Purchasing, Maestro, Mastercard, Debit Mastercard, PayPal, Pay Later With Klarna">
                                </div>
                                <div class="mask-overlay"></div>
                            </div>
                            <div class="mask-overlay"></div>
                        </div>
                        <div data-bind="css: { 'is-masked': isMasked }" class="is-seen">
                <div class="l-card payment"
                    data-bind="scrollToOn: scrollOnTrackingEvents, css: { 'is-disabled': isDisabled, 'is-loading': isLoading }">
                    <h2 data-bind="content: 'web_checkout_payment_chkfilename_payment_heading'">Payment</h2>
                    <div class="l-tabbed-dialog">
                        <div class="address billing-address is-initialised is-masked">
                            <div class="address-container">
                                <div class="address-summary">
                                    <h4 data-bind="content: 'web_checkout_billingaddress_chkfilename_billing_address_heading'">
                                        Billing address</h4>
                                    <div class="address-summary"
                                        data-bind="foreach: { data: $data, afterRender: $parent.afterRender.bind($parent) }"><span
                                            data-cs-mask="" data-bind="html:$data">Max Wings</span>
                                        <br><span data-cs-mask=""
                                            data-bind="html:$data">1 Britannia, Bronygarth</span>
                                        <br><span data-cs-mask=""
                                            data-bind="html:$data">Oswestry</span>
                                        <br><span data-cs-mask=""
                                            data-bind="html:$data">Shropshire</span>
                                        <br><span data-cs-mask=""
                                            data-bind="html:$data">SY10 7LZ</span>
                                        <br><span data-cs-mask=""
                                            data-bind="html:$data">UK</span><br>
                                        <span data-cs-mask="" data-bind="html:$data">380932559626</span>
                                    </div>
                                </div>
                                <div class="address-actions"><a class="btn tertiary change" href="#"
                                        data-bind="content: 'web_checkout_billingaddress_chkfilename_change', click: change">Change</a>
                                </div>
                            </div>
                            <div class="mask-overlay"></div>
                        </div>
                        <div class="payment-details">
                            <div class="l-card-heading">
                                <h4 data-bind="content: 'web_checkout_payonasospaymentdetails_chkfilename_payment_details_heading'">
                                    Payment type</h4>
                            </div>
                            <div data-bind="focusOutAction: { action: focusOut.bind($data), containerSelectorOverride: '.l-card.payment, .l-card.payment *:not(.billing-address *)' }, attr: { 'class' : 'card-details ' + ( isPciFormVisible() ? '' : 'is-invisible' ) }"
                                class="card-details ">
                                <div class="l-heading-with-button">
                                    <h4 data-bind="content: 'web_checkout_carddetails_chkfilename_card_details_heading'">Add
                                        credit/debit card</h4><a class="btn tertiary" href="#"
                                        data-bind="content: 'web_checkout_carddetails_chkfilename_cancel_link', click: cancel">Cancel</a>
                                </div>
                                <form data-bind="submit: submit, css: { 'is-masked': pciConnectionSuccess() === false }"
                                    novalidate="novalidate" autocomplete="on">
                                    <div
                                        data-bind="validationOptions: { insertMessages: false,  messagesOnModified: false, decorateElementOnModified: false, errorsAsTitle: false, errorElementClass: 'is-error'}">
                                        <div id="pci-secure-form-container">
                                        <div id="output" class="new-card-payment">
                                            <div class="fieldsetContainer">
                                                <fieldset autocomplete="on">
                                                    <label for="cardNumber" id="cardNumberLabel">Card Number</label>
                                                    <div class="input-field-wrapper">
                                                        <input type="text" pattern="^[0-9]*$" inputmode="numeric" spellcheck="false" autocorrect="off"
                                                            maxlength="23" id="cardNumber" autocomplete="cc-number" class="input-field"
                                                            aria-describedby="validationErrorForNumber" data-raw-value="">
                                                        <img aria-hidden="true" class="card-scheme-image"
                                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAzMiAyMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHJlY3QgaWQ9ImEiIHg9IjAiIHk9IjAiIHdpZHRoPSIzMiIgaGVpZ2h0PSIyMCIgcng9IjEiLz48bWFzayBpZD0iYiIgbWFza0NvbnRlbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIG1hc2tVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHg9IjAiIHk9IjAiIHdpZHRoPSIzMiIgaGVpZ2h0PSIyMCIgZmlsbD0iI2ZmZiI+PHVzZSB4bGluazpocmVmPSIjYSIvPjwvbWFzaz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIHN0cm9rZT0iIzc3NyIgbWFzaz0idXJsKCNiKSIgc3Ryb2tlLXdpZHRoPSIyIiB4bGluazpocmVmPSIjYSIvPjxwYXRoIGZpbGw9IiM3NzciIGQ9Ik0xIDVoMzB2M0gxeiIvPjwvZz48L3N2Zz4="
                                                            alt="" draggable="false">
                                                    </div>
                                                    <span class="validation" id="validationErrorForNumber">{validationContent}</span>
                                                </fieldset>
                                            </div>
                                            <div class="fieldsetContainer">
                                                <fieldset id="expiryDateFieldset" class="clearfix">
                                                    <legend id="expiryDateLegend">Expiry Date</legend>
                                                    <div>
                                                        <label for="expiryMonth" id="expiryMonthLabel">
                                                            <span class="labelText">Expiry Month</span>

                                                            <select id="expiryMonth" autocomplete="cc-exp-month" aria-describedby="validationErrorForDate">
                                                                <option value="">Month</option>
                                                                <option value="01">01</option>
                                                                <option value="02">02</option>
                                                                <option value="03">03</option>
                                                                <option value="04">04</option>
                                                                <option value="05">05</option>
                                                                <option value="06">06</option>
                                                                <option value="07">07</option>
                                                                <option value="08">08</option>
                                                                <option value="09">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label for="expiryYear" id="expiryYearLabel">
                                                            <span class="labelText">Expiry Year</span>

                                                            <select id="expiryYear" autocomplete="cc-exp-year" aria-describedby="validationErrorForDate">
                                                                <option value="">Year</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                                <option value="2032">2032</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <span class="hr-line"></span>
                                                    <span class="validation" id="validationErrorForDate">{validationContent}</span>
                                                </fieldset>
                                            </div>
                                            <div class="fieldsetContainer">
                                                <fieldset id="cardNameFieldset">
                                                    <label for="cardName" id="nameLabel">Name on card</label>
                                                    <input id="cardName" type="text" spellcheck="false" maxlength="75" autocorrect="off" autocomplete="cc-name"
                                                        class="input-field" aria-describedby="validationErrorForName">
                                                    <span class="validation" id="validationErrorForName">{validationContent}</span>
                                                </fieldset>
                                            </div>
                                            <div class="fieldsetContainer">
                                                <fieldset id="cardCodeFieldset">
                                                    <label for="cardCode" id="cardCodeLabel">CVV</label>
                                                    <input id="cardCode" type="tel" pattern="^[0-9]*$" spellcheck="false" maxlength="4" autocorrect="off"
                                                        autocomplete="cc-csc" class="{fieldClassName}" aria-describedby="validationErrorForCVV">
                                                    <span class="validation" id="validationErrorForCVV">{validationContent}</span>
                                                </fieldset>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="l-field l-custom-field save-card"><label class="inline-label" for="saveCard">
                                                Save
                                                card details for next time
                                                <input id="saveCard" type="checkbox" data-bind="checked: saveCard">
                                                <span role="img" aria-hidden="true">&nbsp;</span>
                                            </label></div>
                                    </div><button class="btn primary save-card" type="submit"
                                        data-bind="content: 'web_checkout_carddetails_chkfilename_use_card_button'">Use this
                                        card</button>
                                    <div class="mask-overlay"></div>
                                </form>
                            </div>
                            <div class="mask-overlay"></div>
                        </div>
                    </div>
                    <div class="mask-overlay"></div>
                </div>
                <div class="payment-marketing-image" data-bind="css : { 'is-masked': isPaymentOptionsMarketingImagesMasked }">
                    <div class="cards-accepted"><span class="label">
                            We accept
                            :
                        </span> <img data-bind="attr: { src: marketingImageUrl, alt: marketingImageAltTag }"
                            src="https://assets.asosservices.com/asos-finance/images/marketing/gb/singleV2.png"
                            alt="American Express, VISA, VISA Electron, VISA Debit, VISA Carte Bleue, VISA Electron Carte Bleue, VISA Debit Carte Bleue, VISA Purchasing, Maestro, Mastercard, Debit Mastercard, PayPal, Pay Later With Klarna">
                    </div>
                    <div class="mask-overlay"></div>
                </div>
                <div class="mask-overlay"></div>
            </div>
            <div class="place-order is-seen" data-bind="css: { 'is-masked': isPlaceOrderMasked }">
                <button class="btn cta place-order is-disabled"
                    data-bind="content: placeOrderButtonContent, disable: isDisabled, click: submit,  css: { 'is-disabled': isDisabled }, hasFocus: placeOrderButtonHasFocus"
                    disabled="">Place order</button><span class="tandc"
                    data-bind="content: {name: 'web_checkout_placeorder_chkfilename_terms_and_conditions', params: [termsAndConditionsUrl, privacyUrl, returnsPolicyUrl]}">By
                    placing your order you agree to our <a target="_blank"
                        href="https://www.asos.com/terms-and-conditions">Terms &amp; Conditions</a>, <a target="_blank"
                        href="https://www.asos.com/privacy-policy">privacy</a> and <a target="_blank"
                        href="https://www.asos.com/returnspolicy">returns policies</a> . You also consent to some of
                    your data being stored by ASOS, which may be used to make future shopping experiences better for
                    you.</span>
                <div class="mask-overlay"></div>

            </div>
        </div>
        <div class="l-rc is-card-animator" data-bind="directChildRevealAnimator: true">
            <div class="l-card is-seen" style="width: 360px; top: 0px;">
                <div class="l-card-inner">
                    <section class="bag">
                        <div class="bag-header">
                            <h2>1 item</h2>
                            <a class="edit-bag" data-bind="attr: { href: editBagUrl }"
                                href="https://www.asos.com/bag/">Edit
                            </a>
                        </div>
                        <hr>
                        <div class="item-list">
                            <div class="items-wrapper one"
                                data-bind="css:{ 'one': !isManyItems(), 'many': isManyItems(), 'voucher': isVoucherPurchase(), 'asf': !!finalSaleAdvisoryMessage() }">
                                <ul class="items"
                                    data-bind="template: {foreach : items, beforeRemove: itemRemoved.bind($data)}">
                                    <li class="item product-item"><img data-bind="attr: { src: imageSrc, alt: name }"
                                            src="https://images.asos-media.com/products/south-beach-overlock-stitching-t-shirt-in-black/203023732-1-black?$s$"
                                            alt="South Beach overlock stitching t-shirt in black">
                                        <div><span class="item-price" data-bind="currency: price">£17.00</span>
                                            <span class="item-description" data-bind="text: name">South Beach overlock
                                                stitching t-shirt in black</span>
                                            <div class="item-options-wrapper"><span class="item-colour"
                                                    data-bind="text: colour">BLACK</span><span class="item-size"
                                                    data-bind="text: size">XS</span> <span class="item-quantity">Qty
                                                    :&nbsp;<strong>
                                                        1

                                                    </strong>
                                                </span></div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div class="bag-totals">
                        <hr>
                        <table>
                            <thead class="is-screen-reader-text">
                                <tr>
                                    <th data-bind="content: 'web_checkout_bagtotals_chkfilename_price_description'"
                                        scope="col">Price
                                        description</th>
                                    <th data-bind="content: 'web_checkout_bagtotals_chkfilename_amount'" scope="col">
                                        Amount</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="total">
                                    <td class="l-ltc">
                                        <div data-bind="content: 'web_checkout_bagtotals_chkfilename_total_to_pay'">
                                            Total to pay</div>
                                    </td>
                                    <td class="l-rtc">
                                        <div data-bind="currency: total">£21.00</div>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr class="sub-total">
                                    <td class="l-ltc">
                                        <div data-bind="content: 'web_checkout_bagtotals_chkfilename_sub_total'">
                                            Subtotal</div>
                                    </td>
                                    <td class="l-rtc">
                                        <div data-bind="currency: itemsSubTotal">£17.00</div>
                                    </td>
                                </tr>
                                <tr class="delivery">
                                    <td class="l-ltc">
                                        <div data-bind="content: 'web_checkout_bagtotals_chkfilename_delivery'">Delivery
                                        </div>
                                    </td>
                                    <td class="l-rtc">
                                        <div data-bind="currency: totalDelivery">£4.00</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="upgrade-message message marketing icon icon-info">
                        <span data-bind="restrictedHtml: $data">FREE Standard
                            Delivery to UK when you spend over £35.00</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer role="contentinfo" data-bind="template: { afterRender: initialise }">
        <ul>
            <li><a target="_blank" data-bind="attr: { href: helpUrl }" href="https://www.asos.com/help">
                    ASOS Help

                </a></li>
        </ul>
    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/checkout.js"></script>