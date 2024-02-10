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
    <p>Welcome to the Tech Emp Portal!</p> <!-- text-->
    <nav>
    <ul>
    <li><a href="index.php">Home</a></li> <!-- link the nav option to the php -->
    <li><a href="data.php">Employee data</a></li> <!-- link the nav option to the php -->
    </ul>
    </nav>
    <p> Information of the employees registered</p> <!--Paragraph-->
    <br><br><br><!--space between text--> 

<?php

//identify the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "techemp";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "The connection with database returned the following information: <br><br><br>";
}

//return the data stored in the database in the page
$sql = "SELECT * FROM employeedata";
$result = $conn->query($sql);

//tables that will be displayed in the page
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Company</th>";
    echo "<th>EmployeeID</th>";
    echo "<th>Name</th>";
    echo "<th>Telephone</th>";
    echo "<th>Email</th>";
    echo "<th>Hours Worked</th>";
    echo "<th>Date</th>";
    echo "</tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["company"] . "</td>";
        echo "<td>" . $row["employeeID"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["telephone"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["hours"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results found";
}
$conn->close();

?>

<!--space-->
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--Footer with the references-->
    <footer>
    <p>Contact information:</p>
    <p>Telephone: (437) 111 5555 </p>
    <p>Email: contact@techemp.com </p>
    </footer>

    </body>
    </html>

