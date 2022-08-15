<!DOCTYPE html>
<html lang="en" class="layout-v2">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOS | Join ASOS</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <section class="auth-main">
        <div class="auth-main__header">
            <h1>
                <a href="/" class="home" id="asos-logo">
                    <img src="../img/logo.svg" height="28" width="93" alt="ASOS Logo" loading="lazy">
                </a>
            </h1>
        </div>
        <div class="container">
            <div class="info info-centre">
                <div class="signin-options">
                    <div class="title qa-title active">
                        <div class="qa-header" aria-current="page">Join</div>
                    </div>
                    <div class="title qa-title with-link qa-sign-in">
                        <div class="qa-header"><a href="login.php" class="qa-sign-in-link" id="sign-in">Sign in</a></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <h2 class="qa-subtitle">Sign up with...</h2>
                <div class="options three-buttons ">
                <div id="social-links-container" class="social-links-container social-buttons-icon-with-text">
                <ul id="social-signin-list" style="list-style-type: none">
                    <li class="social-register">
                        <a href="#" id="signup-google" data-analytics="registerSocialLinkClicked" data-analytics-social="google" class="social-link gplus" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="google">
                        <div class="connect google qa-sign-up-with-google">
                            <div class="icon qa-sign-up-with-google" role="img" aria-label="google"></div>
                            <div class="text"><span>Google</span></div>
                        </div>
                        </a>
                    </li>
                    <li class="social-register">
                    <a href="#" id="signup-apple" data-analytics="registerSocialLinkClicked" data-analytics-social="apple" class="social-link apple" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="apple">
                        <div class="connect apple qa-sign-up-with-apple">
                            <div class="icon qa-sign-up-with-apple" role="img" aria-label="apple"></div>
                            <div class="text"><span>Apple</span></div>
                        </div>
                    </a>
                    </li>
                    <li class="social-register">
                        <a href="#" id="signup-facebook" data-analytics="registerSocialLinkClicked" data-analytics-social="facebook" class="social-link facebook" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="facebook">
                            <div class="connect facebook qa-sign-up-with-facebook">
                                <div class="icon qa-sign-up-with-facebook" role="img" aria-label="facebook"></div>
                                <div class="text"><span>Facebook</span></div>
                            </div>
                        </a>
                    </li>
                </ul>
                </div>
                </div>
                <div id="registration-subtitle">
                    <p class="subtitle">Signing up with social is super quick. No extra passwords to remember - no brain fail. Don't worry, we'd never share any of your data or post anything on your behalf #notevil</p>
                </div>    
            </div>

            <div id="register-form" class="form form-register js-form tran1  ">
            <h2 class="qa-use-email last-child">Or sign up with email</h2>
            <form action="" data-analytics="registerUsingEmail" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value=""><input id="SecuredTouchToken" name="SecuredTouchToken" type="hidden" value="">
            <div class="mobile-spacer">
            </div>
            <fieldset>
            <legend class="screenreader">Or sign up with email</legend>
            <div>
            <div class="field">
            <label class="qa-email-label" for="Email" id="EmailLabel">Email address</label>
            <div class="input-wrapper" aria-labelledby="EmailLabel">
            <div class="eac-input-wrap" style="display: block; position: relative; font-size: 14px; width: 100%;"><input alt="Email" aria-describedby="emailHint" class="qa-email-textbox" data-st-field="id-register-email" data-val="true" data-val-email="Email fail! Please type in your correct email address" data-val-length="Oops, that email address is too long - try again, please" data-val-length-max="255" data-val-required="Oops! You need to type your email here" id="Email" maxlength="255" name="Email" type="email" value=""><span class="eac-sugg" style="display: block; box-sizing: content-box; height: 49.7969px; line-height: 23.8px; margin-top: 0px; margin-bottom: 0px; border-top: 1px solid transparent; border-bottom: 1px solid transparent; padding-top: 12px; padding-bottom: 12px; font-family: futura-pt, Tahoma, Geneva, Verdana, Arial, sans-serif; font-weight: 400; letter-spacing: 0.4px; position: absolute; top: 0px; left: 0px;"></span><span class="eac-cval" style="visibility: hidden; position: fixed; bottom: 0px; left: 0px; display: inline-block; font-family: futura-pt, Tahoma, Geneva, Verdana, Arial, sans-serif; font-weight: 400; letter-spacing: 0.4px; white-space: nowrap;"></span></div>
            <span class="field-validation-valid qa-email-validation" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </div>
            <span class="hint qa-email-hint" id="emailHint">We'll send your order confirmation here</span>
            <div class="clear"></div>
            </div>
            <div class="field">
            <label class="qa-firstname-label" for="FirstName" id="FirstNameLabel">First name</label>
            <div class="input-wrapper" aria-labelledby="FirstNameLabel">
            <input class="qa-firstname-textbox" data-st-field="id-register-firstName" data-val="true" data-val-length="Erm, this bit needs to be under 100 characters" data-val-length-max="100" data-val-regex="First name must not contain <, >, &amp;, &quot; or ." data-val-regex-pattern="^(?!.*[<>\.&amp;&quot;]).*$" data-val-required="We need your first name – it’s nicer that way" id="FirstName" maxlength="100" name="FirstName" type="text" value="">
            <span class="field-validation-valid qa-firstname-validation" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
            </div>
            <div class="clear"></div>
            </div>
            <div class="field">
            <label class="qa-lastname-label" for="LastName" id="LastNameLabel">Last name</label>
            <div class="input-wrapper" aria-labelledby="LastNameLabel">
            <input class="qa-lastname-textbox" data-st-field="id-register-lastName" data-val="true" data-val-length="Too long! Less than 100 characters, please" data-val-length-max="100" data-val-regex="Last name must not contain <, >, &amp;, &quot; or ." data-val-regex-pattern="^(?!.*[<>\.&amp;&quot;]).*$" data-val-required="Last name, too, please!" id="LastName" maxlength="100" name="LastName" type="text" value="">
            <span class="field-validation-valid qa-lastname-validation" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
            </div>
            <div class="clear"></div>
            </div>
            <div class="field">
            <label class="qa-password-label" for="Password" id="PasswordLabel">Password</label>
            <div class="input-wrapper" aria-labelledby="PasswordLabel">
            <input aria-describedby="PasswordHint" autocomplete="off" class="qa-password-textbox" data-st-field="id-register-password" data-val="true" data-val-length="Hold up, that's too long. Less than 100 characters please" data-val-length-max="100" data-val-minlength="Erm, you need 10 or more characters" data-val-minlength-min="10" data-val-required="Hey, we need a password here" id="Password" name="Password" type="password" value="">
            <button id="registration-show-me" class="reveal hidden qa-reveal" type="button" role="button" aria-label="Show me">Show</button>
            <button id="registration-hide-me" class="hide hidden qa-hide" type="button" role="button">Hide</button>
            <span class="field-validation-valid qa-password-validation" data-valmsg-for="Password" data-valmsg-replace="true" id="passwordValidationMessage"></span>
            </div>
            <span class="hint qa-password-hint" id="PasswordHint">Must be 10 or more characters</span>
            <div class="clear"></div>
            </div>
            <div class="field js-birthday ">
            <fieldset>
            <legend for="BirthDay" class="qa-birthday-label">Date of birth<span class="optional">(Optional)</span></legend>
            <div class="subfield select-list">
            <label for="BirthDay" id="birthDateLabel" class="screenreader screenreaderlabel">Day</label>
            <select aria-describedby="BirthdayHint" aria-label="Date of birth Day" class="qa-birthday-textbox" data-val="true" data-val-number="The field Date of birth must be a number." data-val-regex="Enter your full date of birth" data-val-regex-pattern="^(([0]?[0-9])|([1-2][0-9])|(3[01]))$" data-val-required="The Date of birth field is required." data-val-validbirthdate="Oops. Looks like you're too young to use ASOS." data-val-validbirthdate-daypropertyname="BirthDay" data-val-validbirthdate-monthpropertyname="BirthMonth" data-val-validbirthdate-yearpropertyname="BirthYear" data-val-validbirthdayformonth="That doesn't look right… Add your date of birth to get a birthday treat!" data-val-validbirthdayformonth-monthid="BirthMonth" data-val-validbirthdayformonth-yearid="BirthYear" id="BirthDay" name="BirthDay"><option selected="selected" value="0">DD</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            </select>
            </div>
            <div class="subfield long-subfield select-list">
            <label for="BirthMonth" id="birthMonthLabel" class="screenreader screenreaderlabel">Month</label>
            <select aria-describedby="BirthdayHint" aria-label="Date of birth Month" class="qa-birthmonth-textbox" data-val="true" data-val-number="The field Date of birth must be a number." data-val-regex="Enter your full date of birth" data-val-regex-pattern="^(1[0-2])$|^([0-9])$" data-val-required="The Date of birth field is required." id="BirthMonth" name="BirthMonth"><option selected="selected" value="0">Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
            </select>
            </div>
            <div class="subfield last-subfield select-list">
            <label for="BirthYear" id="birthYearLabel" class="screenreader screenreaderlabel">Year</label>
            <select aria-describedby="BirthdayHint" aria-label="Date of birth Year" class="qa-birthyear-textbox" data-val="true" data-val-number="The field Date of birth must be a number." data-val-regex="Enter your full date of birth" data-val-regex-pattern="^\d{4}|[0]$" data-val-required="The Date of birth field is required." data-val-validatebirthyear="That doesn't look right… Add your date of birth to get a birthday treat!" data-val-validatebirthyear-dayid="BirthDay" data-val-validatebirthyear-max="150" data-val-validatebirthyear-min="0" data-val-validatebirthyear-monthid="BirthMonth" id="BirthYear" name="BirthYear"><option selected="selected" value="0">YYYY</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
            <option value="1935">1935</option>
            <option value="1934">1934</option>
            <option value="1933">1933</option>
            <option value="1932">1932</option>
            <option value="1931">1931</option>
            <option value="1930">1930</option>
            <option value="1929">1929</option>
            <option value="1928">1928</option>
            <option value="1927">1927</option>
            <option value="1926">1926</option>
            <option value="1925">1925</option>
            <option value="1924">1924</option>
            <option value="1923">1923</option>
            <option value="1922">1922</option>
            <option value="1921">1921</option>
            <option value="1920">1920</option>
            <option value="1919">1919</option>
            <option value="1918">1918</option>
            <option value="1917">1917</option>
            <option value="1916">1916</option>
            <option value="1915">1915</option>
            <option value="1914">1914</option>
            <option value="1913">1913</option>
            <option value="1912">1912</option>
            <option value="1911">1911</option>
            <option value="1910">1910</option>
            <option value="1909">1909</option>
            <option value="1908">1908</option>
            <option value="1907">1907</option>
            <option value="1906">1906</option>
            <option value="1905">1905</option>
            <option value="1904">1904</option>
            <option value="1903">1903</option>
            <option value="1902">1902</option>
            <option value="1901">1901</option>
            <option value="1900">1900</option>
            </select>
            <span class="field-message js-message"></span>
            <span class="field-message-format">##0## sleeps to go!</span>
            <span class="field-message-result">Happy birthday!</span>
            </div>
            <span class="field-validation-valid qa-birthday-validation subfield-validation" data-valmsg-for="BirthDay" data-valmsg-replace="true"></span><span class="field-validation-valid qa-birthmonth-validation subfield-validation" data-valmsg-for="BirthMonth" data-valmsg-replace="true"></span><span class="field-validation-valid qa-birthyear-validation subfield-validation" data-valmsg-for="BirthYear" data-valmsg-replace="true"></span>
            <span class="hint qa-birthday-hint" id="BirthdayHint">
            You need to be 16 or over to use ASOS
            </span>
            <div class="clear"></div>
            </fieldset>
            </div>
            <div class="field gender ">
            <fieldset>
            <legend for="Gender" class="qa-gender-label">MOSTLY INTERESTED IN<span class="optional">(Optional)</span></legend>
            <div class="tickbox-container subfield qa-gender-female selected">
            <input aria-describedby="femaleLabel" checked="checked" class="tickbox radio hidden-radio" data-val="true" data-val-regex="Tell us, so we can tell you about stuff you'll love" data-val-regex-pattern="^M|F$" id="female" name="Gender" type="radio" value="F">                                <label for="female" class="radio qa-gender-female-label" id="femaleLabel">Womenswear</label>
            </div>
            <div class="tickbox-container subfield last-subfield  qa-gender-male">
            <input class="tickbox radio hidden-radio" id="male" name="Gender" type="radio" value="M">
            <label for="male" class="radio qa-gender-male-label">Menswear</label>
            </div>
            <span class="field-validation-valid qa-gender-validation" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
            <div class="clear"></div>
            </fieldset>
            </div>
            <div class="checkbox-container consent">
            <fieldset>
            <legend class="col-xs-12">
            <h2 class="qa-contact-preferences">Contact preferences</h2>
            </legend>
            <div id="consent-preferences-multi-option" style="display: block;">
            <div class="col-xs-12 flex-wrapper container-all-checkbox">
            <div class="col-md-8">
            <span class="qa-preferences-message">Tell us which emails you’d like:</span>
            </div>
            <div class="all-check all-check-multiple-checkboxes">
            <button class="checkbox qa-all-pref-label-all" id="clear-all-checkbox-button" aria-label="Select all contact preferences" aria-pressed="false" type="button" data-text-all="Select All" data-text-clear="Clear" data-aria-label-all="Select all contact preferences" data-aria-label-clear="Deselect all contact preferences">
            Select All
            </button>
            </div>
            </div>
            <div class="col-xs-12 flex-wrapper">
            <div id="placeholder-multi-option-preferences-checkboxlist" class="width100pc"><div id="preferences-checkboxlist-container" style="display: block;">
            <label class="container-checkbox col-md-6">
            <div class="checkbox-label qa-marketing-label" id="promosLabel" for="promos" style="text-transform: initial;">Discounts and sales</div>
            <input aria-describedby="promosLabel" class="checkbox2 qa-marketing-checkbox core-preference" data-val="true" data-val-required="The PreSelected field is required." id="promos" name="ServicePreferences[0].PreSelected" type="checkbox" value="true"><input name="ServicePreferences[0].PreSelected" type="hidden" value="false">        <span class="checkmark"></span>
            </label>
            <input id="ServicePreferences_0__PreferenceId" name="ServicePreferences[0].PreferenceId" type="hidden" value="promos"><input id="ServicePreferences_0__ActionText" name="ServicePreferences[0].ActionText" type="hidden" value="Discounts and sales">    <label class="container-checkbox col-md-6">
            <div class="checkbox-label qa-marketing-label" id="newnessLabel" for="newness" style="text-transform: initial;">New stuff</div>
            <input aria-describedby="newnessLabel" class="checkbox2 qa-marketing-checkbox core-preference" data-val="true" data-val-required="The PreSelected field is required." id="newness" name="ServicePreferences[1].PreSelected" type="checkbox" value="true"><input name="ServicePreferences[1].PreSelected" type="hidden" value="false">        <span class="checkmark"></span>
            </label>
            <input id="ServicePreferences_1__PreferenceId" name="ServicePreferences[1].PreferenceId" type="hidden" value="newness"><input id="ServicePreferences_1__ActionText" name="ServicePreferences[1].ActionText" type="hidden" value="New stuff">    <label class="container-checkbox col-md-6">
            <div class="checkbox-label qa-marketing-label" id="lifestyleLabel" for="lifestyle" style="text-transform: initial;">Your exclusives</div>
            <input aria-describedby="lifestyleLabel" class="checkbox2 qa-marketing-checkbox core-preference" data-val="true" data-val-required="The PreSelected field is required." id="lifestyle" name="ServicePreferences[2].PreSelected" type="checkbox" value="true"><input name="ServicePreferences[2].PreSelected" type="hidden" value="false">        <span class="checkmark"></span>
            </label>
            <input id="ServicePreferences_2__PreferenceId" name="ServicePreferences[2].PreferenceId" type="hidden" value="lifestyle"><input id="ServicePreferences_2__ActionText" name="ServicePreferences[2].ActionText" type="hidden" value="Your exclusives">    <label class="container-checkbox col-md-6">
            <div class="checkbox-label qa-marketing-label" id="partnerLabel" for="partner" style="text-transform: initial;">ASOS partners</div>
            <input aria-describedby="partnerLabel" class="checkbox2 qa-marketing-checkbox core-preference" data-val="true" data-val-required="The PreSelected field is required." id="partner" name="ServicePreferences[3].PreSelected" type="checkbox" value="true"><input name="ServicePreferences[3].PreSelected" type="hidden" value="false">        <span class="checkmark"></span>
            </label>
            <input id="ServicePreferences_3__PreferenceId" name="ServicePreferences[3].PreferenceId" type="hidden" value="partner"><input id="ServicePreferences_3__ActionText" name="ServicePreferences[3].ActionText" type="hidden" value="ASOS partners">
            </div></div>
            <div class="clear"></div>
            </div>
            </div>
            </fieldset>
            </div>
            <input aria-hidden="true" checked="checked" class="checkbox qa-tandc-checkbox" data-val="true" data-val-enforcetrue="You need to accept the Terms and Conditions first" data-val-required="The I accept the Terms and Conditions field is required." id="TermsAndConditions" name="TermsAndConditions" style="display: none" type="checkbox" value="true"><input name="TermsAndConditions" type="hidden" value="false"><span class="field-validation-valid qa-tandc-validation" data-valmsg-for="TermsAndConditions" data-valmsg-replace="true"></span>            </div>
            <div class="submit">
            <input type="submit" data-sitekey="" data-callback="" return="false" value="Join ASOS" id="register" class="g-recaptcha qa-submit qa-css3-transition-finished" data-st-tagname-reg="id-register-siteRegistrationAttempt-click" aria-label="Join ASOS">
            <div class="clear"></div>
            <input id="submitting" name="submitting" type="hidden" value="Submitting...">
            </div>
            </fieldset>
            </form>    </div>
        </div>
    </section>
    <div class="terms">
        <label>
            <a target="_blank" href="http://www.asos.com/privacy-policy/" id="privacy-policy" class="qa-privacypolicy-link" data-st-tagname="id-register-privacyPolicy-click" rel="noopener">Privacy Policy</a> | <a href="http://www.asos.com/terms-and-conditions/" id="terms-and-conditions" class="qa-tandc-link" data-st-tagname="id-register-termsAndConditions-click" target="_blank" rel="noopener">Terms and Conditions</a>
        </label>
    </div>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/auth.js"></script>
<style>
    body {
        background-color: #eee;
    }
</style>
</html>