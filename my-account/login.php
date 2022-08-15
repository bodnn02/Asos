<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOS | Sign in</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
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
            <div class="signin-options">
                <div class="title qa-title with-link">
                    <div class="qa-header"><a class="qa-join-asos" href="register.php" id="new-to-asos-tab">Join</a></div>
                </div>
                <div class="title qa-title active">
                    <div class="qa-header" aria-current="page">Sign in</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="form form-login">
                <form action="" data-analytics="signInUsingEmail" id="signInForm" method="post" novalidate="novalidate"><input id="" name="" type="hidden" value=""><input id="SecuredTouchToken" name="SecuredTouchToken" type="hidden" value="">
                <fieldset>
                    <legend class="screenreader">Sign in with email</legend>
                    <div class="mobile-spacer">
                        <div>
                            
                        </div>
                    </div>
                    <div>
                        <div class="field">
                            <label class="qa-email-label" for="EmailAddress" id="EmailLabel">Email address</label>
                            <div class="input-wrapper" aria-labelledby="EmailLabel">
                                <input name="Username" class="qa-email-textbox" data-st-field="id-signIn-emailAddress" data-val="true" data-val-email="Email fail! Please type in your correct email address" data-val-length="Oops, that email address is too long - try again, please" data-val-length-max="255" data-val-required="Oops! You need to type your email here" id="EmailAddress" maxlength="255" type="email" value="">
                                <span class="field-validation-valid qa-email-validation" data-valmsg-for="Username" data-valmsg-replace="true"></span>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <div class="field">
                            <label class="qa-password-label" for="Password" id="PasswordLabel">Password</label>
                            <div class="input-wrapper" aria-labelledby="PasswordLabel">
                                <input autocomplete="off" class="qa-password-textbox" data-st-field="id-signIn-password" data-val="true" data-val-length="Hold up, that's too long. Less than 100 characters please" data-val-length-max="100" data-val-required="Hey, we need a password here" id="Password" name="Password" type="password" value="">
                                <button id="signin-show-me" class="reveal hidden qa-reveal" type="button" role="button">Show</button>
                                <button id="signin-hide-me" class="hide hidden qa-hide" type="button" role="button">Hide</button>
                                <span class="field-validation-valid qa-password-validation" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="submit">
                        <input data-sitekey="" data-callback="" type="submit" value="Sign in" id="signin" class="g-recaptcha qa-submit adobeTrackedButton" return="false" data-adobe="{&quot;event&quot;: &quot;tracking.identity.signIn&quot; ,&quot;data&quot; :{&quot;action&quot;:&quot;Sign In&quot;,&quot;context&quot;:&quot;Sign In&quot; ,&quot;signupmethod&quot;:&quot;Email&quot;,&quot;recognised&quot;:&quot;&quot;,&quot;socialPlatform&quot;: &quot;&quot;}}" data-st-tagname-signin="id-signIn-loginAttempt-click;id-signIn-loginAttempt-hash">
                        <div class="clear"></div>
                    </div>
                            <div class="forgotten-password">
                                <a class="qa-forgot-password adobeTrackedButton" data-analytics="alreadyRegisteredForgotPassword" data-st-tagname="id-signIn-forgotPassword-click" href="/identity/password/reset?signin=54e7ee8ab1d8bc0c970923ecf30dc80a">Forgot password?</a>
                            </div>
                </fieldset>
                </form>        
            </div>
            <div class="info info-centre">
            <h2 class="qa-subtitle">Or sign in with...</h2>
            <div class="clear"></div>
            <div class="options four-buttons ">
                <div id="social-links-container" class="social-links-container social-buttons-icon-with-text">
                    <ul id="social-signin-list" style="list-style-type: none">
                        <li class="social-register">
                            <a href="#" id="signup-google" data-analytics="signInUsingSocial" data-analytics-social="google" class="social-link gplus" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="google">
                                <div class="connect google qa-sign-up-with-google">
                                    <div class="icon qa-sign-up-with-google" role="img" aria-label="google"></div>
                                    <div class="text"><span>Google</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="social-register">
                            <a href="#" id="signup-apple" data-analytics="signInUsingSocial" data-analytics-social="apple" class="social-link apple" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="apple">
                                <div class="connect apple qa-sign-up-with-apple">
                                    <div class="icon qa-sign-up-with-apple" role="img" aria-label="apple"></div>
                                    <div class="text"><span>Apple</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="social-register">
                            <a href="#" id="signup-facebook" data-analytics="signInUsingSocial" data-analytics-social="facebook" class="social-link facebook" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="facebook">
                                <div class="connect facebook qa-sign-up-with-facebook">
                                    <div class="icon qa-sign-up-with-facebook" role="img" aria-label="facebook"></div>
                                    <div class="text"><span>Facebook</span></div>
                                </div>
                            </a>
                        </li>

                        <li class="social-register">
                            <a href="#" id="signup-twitter" data-analytics="signInUsingSocial" data-analytics-social="twitter" class="social-link twitter" data-st-tagname="id-register-checkout-socialRegistrationAttempt-click" data-st-tagvalue="twitter">
                                <div class="connect twitter qa-sign-up-with-twitter">
                                    <div class="icon " role="img" aria-label="twitter"></div>
                                    <div class="text"><span>Twitter</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
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