<!DOCTYPE html>
  <html>
    <head>
        <title> WELCOME </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/redundant.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Fjalla+One|Tajawal|Inconsolata|Open+Sans+Condensed:300|Pathway+Gothic+One|Poiret+One|Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>

    <body>

        <div id="navbar">

        </div>

        <div id="restof">
            <div id="details"></div>
            <div id="finder"></div>
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