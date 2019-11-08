<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> EVENT </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Fjalla+One|Tajawal|Inconsolata|Open+Sans+Condensed:300|Pathway+Gothic+One|Poiret+One|Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>
    <body onload="start('<?php echo $_SESSION["curr_user"]; ?>')">

        <div id="welcome">
            <div id="navbar">
                
                <ul>
                    <a href="#" id="logo"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="50" height="50"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M83.3125,0c-1.48022,0 -2.6875,1.20728 -2.6875,2.6875v13.50049c-34.90601,1.38574 -63.05127,29.53101 -64.43701,64.43701h-13.50049c-1.48022,0 -2.6875,1.20728 -2.6875,2.6875c0,1.48022 1.20728,2.6875 2.6875,2.6875h13.50049c1.38574,34.90601 29.53101,63.05127 64.43701,64.42651v13.51099c0,1.48022 1.20728,2.6875 2.6875,2.6875c1.48022,0 2.6875,-1.20728 2.6875,-2.6875v-13.51099c34.90601,-1.37524 63.05127,-29.52051 64.42651,-64.42651h13.51099c1.48022,0 2.6875,-1.20728 2.6875,-2.6875c0,-1.48022 -1.20728,-2.6875 -2.6875,-2.6875h-13.51099c-1.37524,-34.90601 -29.52051,-63.05127 -64.42651,-64.43701v-13.50049c0,-1.48022 -1.20728,-2.6875 -2.6875,-2.6875zM80.625,21.56299v37.56201c0,1.48022 1.20728,2.6875 2.6875,2.6875c1.48022,0 2.6875,-1.20728 2.6875,-2.6875v-37.56201c31.94556,1.38574 57.67627,27.11645 59.05151,59.06201h-41.81372l8.84985,-8.84985c1.0498,-1.0498 1.0498,-2.75049 0,-3.80029c-1.0498,-1.0498 -2.75049,-1.0498 -3.80029,0l-13.4375,13.4375c-1.0498,1.0498 -1.0498,2.75049 0,3.80029l13.4375,13.4375c0.5249,0.5249 1.20728,0.78735 1.90015,0.78735c0.69287,0 1.37524,-0.26245 1.90015,-0.78735c1.0498,-1.0498 1.0498,-2.75049 0,-3.80029l-8.84985,-8.84985h41.81372c-1.37524,31.94556 -27.10596,57.67627 -59.05151,59.05151v-37.55151c0,-1.48022 -1.20728,-2.6875 -2.6875,-2.6875c-1.48022,0 -2.6875,1.20728 -2.6875,2.6875v37.55151c-31.94556,-1.37524 -57.67627,-27.10596 -59.06201,-59.05151h41.82422l-8.84985,8.84985c-1.0498,1.0498 -1.0498,2.75049 0,3.80029c0.5249,0.5249 1.20728,0.78735 1.90015,0.78735c0.69287,0 1.37524,-0.26245 1.90015,-0.78735l13.4375,-13.4375c1.0498,-1.0498 1.0498,-2.75049 0,-3.80029l-13.4375,-13.4375c-1.0498,-1.0498 -2.75049,-1.0498 -3.80029,0c-1.0498,1.0498 -1.0498,2.75049 0,3.80029l8.84985,8.84985h-41.82422c1.38574,-31.94556 27.11645,-57.67627 59.06201,-59.06201zM73.15039,33.46777c-0.34643,-0.06299 -0.70337,-0.06299 -1.0603,0.021c-18.98047,4.25171 -34.09766,19.24292 -38.50684,38.19189c-0.33594,1.44873 0.5564,2.89746 2.00513,3.2334c0.20996,0.04199 0.40942,0.06299 0.60889,0.06299c1.22827,0 2.33057,-0.82935 2.61401,-2.07861c3.95777,-16.94385 17.47925,-30.36035 34.45459,-34.17114c1.44873,-0.31494 2.35156,-1.75317 2.02612,-3.2019c-0.24146,-1.0918 -1.11279,-1.87915 -2.1416,-2.05762zM93.48511,33.46777c-1.02881,0.18897 -1.91064,0.96582 -2.1521,2.05762c-0.32544,1.43823 0.58789,2.88696 2.02612,3.2019c2.24658,0.51441 4.47217,1.18628 6.62427,2.03662c0.31494,0.12598 0.65088,0.17847 0.97632,0.17847c1.0708,0 2.08911,-0.64038 2.50903,-1.71118c0.5354,-1.37524 -0.14697,-2.92895 -1.52222,-3.47485c-2.40405,-0.94483 -4.89209,-1.70068 -7.40112,-2.26758c-0.35693,-0.08398 -0.71387,-0.08398 -1.0603,-0.021zM110.7334,41.12085c-0.68237,0.11548 -1.31226,0.49341 -1.74267,1.0918c-0.86084,1.21777 -0.5669,2.89746 0.65088,3.7583c9.17529,6.47729 15.63159,16.05151 18.17212,26.92749c0.28345,1.24927 1.38574,2.07861 2.61401,2.07861c0.19946,0 0.39893,-0.021 0.60889,-0.06299c1.44873,-0.33594 2.34106,-1.78467 2.00512,-3.2334c-2.83447,-12.16724 -10.04663,-22.86474 -20.30322,-30.1084c-0.60889,-0.43042 -1.33325,-0.56689 -2.00513,-0.45142zM83.3125,77.9375c-2.97095,0 -5.375,2.40405 -5.375,5.375c0,2.97095 2.40405,5.375 5.375,5.375c2.97095,0 5.375,-2.40405 5.375,-5.375c0,-2.97095 -2.40405,-5.375 -5.375,-5.375zM130.17578,90.41968c-1.03931,0.20996 -1.87915,1.01831 -2.09961,2.09961c-3.60083,17.56323 -17.2168,31.45215 -34.71704,35.37842c-1.43823,0.31494 -2.35156,1.75317 -2.02612,3.2019c0.28345,1.24927 1.39624,2.09961 2.62451,2.09961c0.19946,0 0.38843,-0.02099 0.58789,-0.06299c19.54736,-4.38818 34.78003,-19.9043 38.79028,-39.53565c0.29395,-1.45923 -0.64038,-2.87646 -2.08911,-3.17041c-0.36743,-0.07349 -0.73486,-0.07349 -1.0708,-0.0105zM43.97632,98.11475c-0.34643,0.0105 -0.70337,0.08398 -1.0393,0.23096l-4.90259,2.18359c-1.36475,0.60889 -1.97363,2.19409 -1.37524,3.54834c0.45142,0.99731 1.42773,1.5957 2.46704,1.5957c0.35693,0 0.73486,-0.07349 1.0918,-0.23096l4.90259,-2.18359c1.35425,-0.60889 1.96313,-2.19409 1.36474,-3.54834c-0.45142,-1.01831 -1.45923,-1.6167 -2.50903,-1.5957zM53.39307,111.56274c-0.69287,0.0105 -1.36475,0.28345 -1.87915,0.80835l-3.7373,3.87378c-1.02881,1.0708 -0.99732,2.77148 0.06299,3.80029c0.5249,0.50391 1.19678,0.75586 1.86865,0.75586c0.70337,0 1.40674,-0.27295 1.93164,-0.82935l3.7373,-3.86328c1.02881,-1.0708 0.99732,-2.77148 -0.07349,-3.80029c-0.5354,-0.51441 -1.21777,-0.76636 -1.91064,-0.74536zM67.15601,120.49658c-1.0393,0.02099 -2.02612,0.65088 -2.44604,1.67969l-2.01562,4.97607c-0.5459,1.38574 0.11548,2.94995 1.49072,3.50635c0.32544,0.13647 0.67188,0.18896 1.00781,0.18896c1.0603,0 2.06811,-0.62988 2.49853,-1.67969l2.00513,-4.97607c0.5564,-1.37524 -0.10498,-2.94995 -1.49072,-3.50635c-0.33594,-0.13647 -0.69287,-0.19946 -1.0498,-0.18896z"></path></g></g></svg></a>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="pages/events.php">Events</a></li>
                    <li><a href="pages/support.php">Support</a></li>
                </ul>

            </div>

            <div id="timer">

                <h1>It all begins in:</h1>
                <p id="time-rem"></p>

            </div>

            <div id="login">
                <div><button id="login_tab" class="tab" style="border-right: 2px solid rgba(255, 255, 255, 0.6)" onclick="changeFocus(1)">Log in</button><button id="signup_tab" class="tab" onclick="changeFocus(2)">Sign Up</button></div>
                <form action="pages/login.php" method="post" name="signin">
                    <p class="mar" ><input class="mar" type="text" placeholder="username.." name='uname' value=""/><br></p>
                    <p class="mar" id="email_box"><input class="mar" type="email" placeholder="email.."  name='email' value=""/></p>
                    <p class="mar" ><input class="mar" type="password" placeholder="password.."  name='pass' value=""/></p>
                    <input class="mar" type="submit" name="login" value="login" id="submit_btn"/>
                    <?php
                        if($_SESSION["invalid_user"] == 1){
                            echo '<p style="color: tomato; font-family: Tajawal;font-size: 15px;"> Sorry that didn\'t work out </p>';
                        }
                    ?>
                </form>
            </div>

        </div>


        <div class="others" id="about">

            <h3>About</h3>

            <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

        </div>

        <div class="others" id="support">
            <ul>
                <li><a href="#">lorem-ipsum@gmail.com</a></li>
                <li><a href="#">lorem-ipsum@gmail.com</a></li>
                <li><a href="#">lorem-ipsum@gmail.com</a></li>
                <li><a href="#">lorem-ipsum@gmail.com</a></li>
            </ul>
        </div>

        <script src="scripts/homescript.js"></script>

        <script>

            var session_set = '<?php echo $_SESSION["curr_user"];?>';

            var x = 1;
            function changeFocus(n){
                x = n;
                change();
            }

            function change(){
                var tab1 = document.getElementById("login_tab");
                var tab2 = document.getElementById("signup_tab");
                var sub = document.getElementById("submit_btn");
                if(x==1){
                    tab1.style.borderBottom = "1.5px solid chartreuse";
                    tab1.style.color = "white";
                    tab2.style.color = "rgba(255, 255, 255, 0.6)";
                    tab2.style.border = "none";
                    document.getElementById("email_box").style.display = "none";
                    sub.value = "Log in";
                }
                else{
                    tab2.style.borderBottom = "1.5px solid chartreuse";
                    tab1.style.color = "rgba(255, 255, 255, 0.6)";
                    tab2.style.color = "white";
                    tab1.style.borderBottom = "none";
                    document.getElementById("email_box").style.display = "block";
                    sub.value = "Sign up";
                }
            }
            
            function start(sess){
                if(sess){
                    document.getElementById("login").style.display = "none";
                }
                else{
                    document.getElementById("login").style.display = "block";
                    change();
                }
            }            

        </script>
    </body>
</html>