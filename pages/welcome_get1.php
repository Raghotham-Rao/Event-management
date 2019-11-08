<?php
    session_start();
    include 'db.php';
?>
<!DOCTYPE html>
  <html>
    <head>
        <title> WELCOME </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/dashboard.css">
        <link rel="stylesheet" href="../styles/redundant.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Fjalla+One|Tajawal|Inconsolata|Open+Sans+Condensed:300|Pathway+Gothic+One|Poiret+One|Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>

    <body>

      <div id="navbar">

      </div>

      <div id="restof">
        <h1> Hello <?php echo $_SESSION["curr_user"]; ?> </h1>

        <div id="main-event">
            <h1> Main Event </h1>
        </div>

        <h2>Registered Events</h2>

          <?php

            $conn = OpenCon();
            $query = 'select distinct(event_list.name) from event_list,registrations where registrations.participant_uname="'.$_SESSION["curr_user"].'" and registrations.event_name = event_list.name';
            $result = $conn->query($query);
            if($result->num_rows > 0){
                  $query = 'select * from registrations where participant_uname="'.$_SESSION["curr_user"].'"';
                  $result = $conn->query($query);
                  while($row = $result->fetch_assoc()){
                      echo '<div class="event-card"><img src="../others/images/'.$row["event_name"].'.jpg" alt="image"/><h3>'.$row["event_name"].'</h3>';
                      echo '<a href="event_details.php?event='.$row["event_name"].'">View Details</a>';
                      echo '</div></li>';
                  }
            }
            else{
              echo '<div id="no_participation"><img src="../others/images/not_registered.png"/><h2>You have not registered into any events yet!!!</h2><a href=events.php>Check Out Events</a></div>';
            }
            $conn->close();
          ?>
        

      </div>

      <script src="../scripts/load-nav.js"></script>
      <script>
        var x = '<?php echo $_SESSION["curr_user"] ?>';
        if(x.length > 0){
          var elem = document.getElementById("nav_signup");
          elem.innerHTML = x;
          elem.setAttribute("href", "");
        }
      </script>

    </body>
  </html>