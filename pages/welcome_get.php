    <html>
    <body>
    <?php

    include 'db.php';
    $conn = OpenCon();


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO myguests (firstname, lastname,email)

    VALUES

    ('$_POST[fn]','$_POST[ln]','$_POST[em]')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql="INSERT INTO password (username, passwd)

    VALUES

    ('$_POST[fn]','$_POST[pwd]')";

    
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    CloseCon($conn);

    ?>
    Welcome <?php echo $_POST["fn"]; ?><br>
    Your email address is: <?php echo $_POST["em"]; ?><br>
    Use your first name as your username during login

    </body>
    </html>