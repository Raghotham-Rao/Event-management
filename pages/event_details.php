<?php
    session_start();
    include "db.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../styles/redundant.css"/>
        <link href="https://fonts.googleapis.com/css?family=Bangers|Fjalla+One|Inconsolata|Open+Sans+Condensed:300|Tajawal|Pathway+Gothic+One|Poiret+One|Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>

    <body>

        <div id="navbar">
                
        </div>


        <div id="restof">
            <h1> <?php echo $_GET["event"]; ?> </h1>
            
            <?php

                $conn = OpenCon();

                $query = 'select * from event_description as ed, event_list as e where e.name="'.$_GET["event"].'" and e.name = ed.name';
                $result=$conn->query($query);
                while($row=$result->fetch_assoc()){
                    echo '<div class="register-card"><h6>Organizer:'.$row["organizer"].'</h6><h6>Date:'.$row["eve_date"].'</h6><h6>Time:'.$row["eve_time"].'</h6><h6>Venue:'.$row["venue"].'</h6><h6>Entry Fee:'.$row["entry_fee"].'</h6>';
                    echo '<a id="reg-btn" href="register.php?eve_name='.$_GET["event"].'">Register</a></div>';
                    echo '<div class="divisions"><h3>Format</h3><p>'.$row["format"].'</p></div>';
                    echo '<div class="divisions"><h3>Rules</h3><p>'.$row["rules"].'</p></div>';
                    echo '<div class="divisions"><h3>Prizes</h3><p>'.$row["prizes"].'</p></div>';
                }

                $registered = 0;
                $query = 'select * from registrations where event_name="'.$_GET["event"].'" and participant_uname="'.$_SESSION["curr_user"].'"';
                $result=$conn->query($query);
                if($result->num_rows > 0)
                    $registered = 1;
                $conn->close();
            ?>

        </div>


        <script src="../scripts/load-nav.js"></script>

        <script>
            var x = '<?php echo $_SESSION["curr_user"]; ?>';
            var reg = '<?php echo $registered; ?>';
            
            if(x.length > 0){
                var elem = document.getElementById("nav_signup");
                elem.innerHTML = x;
                elem.setAttribute("href", "welcome_get1.php");
                document.getElementById("logout-btn").display = "inline";
            }
            else{
                var ul = document.querySelector("#navbar ul");
                ul.removeChild(ul.childNodes[6]);
                document.getElementById("reg-btn").innerHTML = "Sign In to Register";
                document.getElementById("reg-btn").setAttribute("href", "../index.php");
            }
            if(reg=='1'){
                document.getElementById("reg-btn").innerHTML = "Registered";
                document.getElementById("reg-btn").style.backgroundColor = "darkgrey";
                document.getElementById("reg-btn").style.color = "rgba(0,0,0,0.8)";
                document.getElementById("reg-btn").setAttribute("href", "");
                document.getElementById("reg-btn").style.cursor = "not-allowed";
            }
      </script>

    </body>
</html>