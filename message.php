<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8"> <!-- Unicode Transformation Format -->
    <title> Employee portal </title> <!-- The title of the page -->
    <link rel="stylesheet" href="styles.css"> <!-- link of html with the css -->
    </head>
    <body>
    <img src="images/logo.jpg" alt="Logo" /> <!-- logo image -->
    <h4> Employee Portal </h4> <!-- the heading -->
    <p>Welcome to the Tech Emp Portal!</p> <!-- brief description -->
    <nav>
    <ul>
    <li><a href="index.php">Home</a></li> <!-- link the nav option to the php -->
    <li><a href="data.php">Employee data</a></li> <!-- link the nav option to the php -->
    </ul>
    </nav>
    <p> Result of the input</p> <!--Paragraph-->
    <br><br><br><!--space between text--> 

    <?php

    //identify the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "techemp";
    
  //create the connection  
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //create the method to store the information filled in the form in the database
    $company = $_POST['company'];
    $employeeID = $_POST['employeeID'];
    $name = $_POST['name'];
    $telephone = $_POST['telephonenumber'];
    $email = $_POST['email'];
    $hours = $_POST['hours'];
    $date = $_POST['date'];

    //insert information filled in the form in the database
    $sql = "INSERT INTO employeedata (company, employeeID, name, telephone, email, hours, date) VALUES ('$company', '$employeeID', '$name' , '$telephone' ,  '$email', '$hours' , '$date')";

    //Create a message to be displayed in case the connection with the database succeed and also if do not succeed
    if($conn->query($sql) ===TRUE)
   {
    echo "Thank you so much! We received your information. To check the information inserted access Employee Data in the navigation menu.";
    } else {
    echo "Sorry we didn't receive the information. " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
    ?>

    <br><br><br><br>

    <!--Footer with the references-->
    <footer>
    <p>Contact information:</p>
    <p>Telephone: (437) 111 5555 </p>
    <p>Email: contact@techemp.com </p>
    </footer>

    </body>
    </html>

