<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../styles/events_style.css"/>
        <link rel="stylesheet" href="../styles/redundant.css"/>
        <link href="https://fonts.googleapis.com/css?family=Bangers|Fjalla+One|Inconsolata|Open+Sans+Condensed:300|Tajawal|Pathway+Gothic+One|Poiret+One|Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>

    <body>

        <div id="navbar">
               
        </div>
        
        
        <div id="main-event">
            <h1> Main Event </h1>
        </div>

        <?php

            include 'db.php';

            $conn = OpenCon();

            $query = 'select distinct(type) from event_list';
            $result = $conn->query($query);
            $types = array();
            while($row = $result->fetch_assoc()){
                $types[] = $row["type"];
            }

            foreach($types as $type){
                echo '<div class="category"><h3>'.$type.'</h3><ul>';
                $query = 'select * from event_list where type="'.$type.'"';
                $result = $conn->query($query);
                while($row = $result->fetch_assoc()){
                    echo '<li><div class="event-card"><img src="../others/images/'.$row["name"].'.jpg" alt="image"/><h3>'.$row["name"].'</h3>';
                    echo '<a href="event_details.php?event='.$row["name"].'">View Details</a>';
                    echo '</div></li>';
                }
                echo '<a class="viewallbtn" href="showall.php">View All</a></ul>';
                echo '</div>';
            }

        ?>

        <script src="../scripts/load-nav.js"></script>

        <script>
            var x = '<?php echo $_SESSION["curr_user"] ?>';
            
            if(x.length > 0){
                var elem = document.getElementById("nav_signup");
                elem.innerHTML = x;
                elem.setAttribute("href", "welcome_get1.php");
                document.getElementById("logout-btn").display = "inline";
            }
            else{
                var ul = document.querySelector("#navbar ul");
                ul.removeChild(ul.childNodes[6]);
            }
      </script>

    </body>
</html>