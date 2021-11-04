<!DOCTYPE html>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook</title>
        <!-- css files -->
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="cre-acc-cont">
        <div class="cre-acc-body-tit">
            <h1 class="cre-acc-tit">facebook</h1>
        </div>
        <div class="cre-acc-hbox" >
            <h2 class="hbox-tit">Create a new account</h2>
            <p class="hbox-des">It's quick and easy.</p>
        </div>
        <div class="cre-acc-box" >
            <form method="post" name="creaccform" id="creacc" onsubmit="return false">
                <div class="tab">
                        <input type="text" placeholder="First name"  class="fname" name="fname"
                        onfocusout="myFunction()" onfocusin="myFunction2()" id="fname">
                        <input type="text" placeholder="Surname" class="lname"
                        onfocusout="myFunction3()" onfocusin="myFunction4()" id="lname">
                </div>
                <div  class="tab">
                        <input type="text" placeholder="Mobile number or email address" class="-email"
                        onfocusout="myFunction5()" onfocusin="myFunction6()" id="-email">
                </div>
                <div  class="tab">
                        <input type="password" placeholder="New password" class="-pass"
                        onfocusout="myFunction7()" onfocusin="myFunction8()" id="-pass">
                </div>
                <p class="-db">Date of birth</p>
                <div class="-date">
                    <select id="day"  class="-day" name="day" onclick="myFunction10()"></select>
                    <select id="month" class="-month" name="month" onclick="myFunction10()"></select>
                    <select id="year" class="-year" name="year" onclick="myFunction10()"></select>
                </div>
                <p class="-db">Gender</p>
                <div class="-date tab" >
                    <span class="female" id="female">
                        <label for="" class="-female">Female</label>
                        <input type="radio" id="gender" value="female" onclick="myFunction9()"
                        class="-cfemale" name="gender">
                    </span>
                    <span class="male" id="male">
                        <label for="" class="-male">Male</label>
                        <input type="radio" id="gender" value="male" onclick="myFunction9()"
                        class="-cmale" name="gender">
                    </span>
                </div>
                <p class="-info">By clicking Sign Up, you agree to our <a href="#" class="-a">Terms</a>,
                    <a href="#" class="-a">Data Policy</a> and <a href="#" class="-a">Cookie Policy</a>.
                    You may receive SMS notifications from us and can opt out at any time.</p>
                <div class="signup">
                        <button class="-signup" id="btnsiup">sign up</button>
                        <span class="error" id="Err-form" style="color: red;margin-bottom: 10px;"></span>
                        <a href="Already-have-account.php" class="-haveacc">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>

    <div id="firstN" style="text-align: center;  color: #1877F2;"></div>
    <div id="lastN" style="text-align: center; color: #1877F2;"></div>
    <div id="Mail" style="text-align: center; color: #1877F2;"></div>
    <div id="PassWord" style="text-align: center; color: #1877F2;"></div>
    <div id="Gender" style="text-align: center; color: #1877F2;"></div>
    <div id="Birthday" style="text-align: center; color: #1877F2;"></div>



    <footer class="end">
        <div class="err-foot">
        <div class="lang">
        <a href="#">English (UK)</a>
        <a href="#">العربيه</a>
        <a href="#">Français (France)</a>
        <a href="#">Italiano</a>
        <a href="#">Deutsch</a>
        <a href="#">Русский</a>
        <a href="#">Español</a>
        <a href="#">Bahasa Indonesia</a>
        <a href="#">Türkçe</a>
        <a href="#">Português (Brasil)</a>
        <a href="#">हिन्दी</a>
        <hr>
        </div>
        <div class="src">
        <a href="#">Sign Up</a>
        <a href="#">Log In</a>
        <a href="#">Messenger</a>
        <a href="#">Facebook Lite</a>
        <a href="#">Watch</a>
        <a href="#">Places</a>
        <a href="#">Games</a>
        <a href="#">Marketplace</a>
        <a href="#">Facebook Pay</a>
        <a href="#">Jobs</a>
        <a href="#">Oculus</a>
        <a href="#">Portal</a>
        <a href="#">Instagram</a>
        <a href="#">Local</a>
        <a href="#">Fundraisers</a>
        <a href="#">Services</a>
        <a href="#">Voting Information Centre</a>
        <a href="#">About</a>
        <a href="#">Create ad</a>
        <a href="#">Create Page</a>
        <a href="#">Developers</a>
        <a href="#">Careers</a>
        <a href="#">Privacy</a>
        <a href="#">Cookies</a>
        <a href="#">AdChoices</a>
        <a href="#">Terms</a>
        <a href="#">Help</a>
        </div>
        <div class="cpy">
        <p>Facebook © 2021</p>
        </div>
    </div>
    </footer>

<script src="js/javas.js"></script>
<script src="js/Date.js"></script>
</body>
</html>
