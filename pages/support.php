<!DOCTYPE html>
  <html>
    <head>
        <title> WELCOME </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/redundant.css">
        <link rel="stylesheet" href="../styles/support_style.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Fjalla+One|Tajawal|Inconsolata|Open+Sans+Condensed:300|Pathway+Gothic+One|Poiret+One|Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>

    <body>

        <div id="navbar">

        </div>

        <div id="restof">
            <div id="details">
                <h1>The Idea</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letrase</p>

                <h1>The College</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letrase</p>

                <h1>The Event</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letrase</p>
                
                <h1>The Crew</h1>
                <img src="../others/images/crew.jpg" alt="image"/>
            </div>
            <div id="finder">
                <h3> Find a Volunteer </h3>
                <form action="" method="POST">
                    <input type="text" name="vname" placeholder="Enter volunteer name..."/>
                </form>
                <div id="v_details">
                    <?php 
                        echo '<img src="../others/images/vol.png" alt="image"/>';
                        if(isset($_POST["vname"])){
                            echo '<h4>Name: '.$_POST["vname"].'</h4>';
                        }
                        echo '<h4>Incharge of: </h4><h4>Contact: </h4>';
                    ?>
                </div>
            </div>
        </div>



        <script src="../scripts/load-nav.js"></script>
        <script>
            var x = '<?php echo $_SESSION["curr_user"]; ?>';
            var v = '<?php echo $_POST["vname"]; ?>';
            if(x.length > 0){
            var elem = document.getElementById("nav_signup");
            elem.innerHTML = x;
            elem.setAttribute("href", "");
            }
            else{
                var ul = document.querySelector("#navbar ul");
                ul.removeChild(ul.childNodes[6]);
            }
            if(v.length == 0){
                document.getElementById("v_details").style.display = "none";
            }
        </script>

    </body>
</html>