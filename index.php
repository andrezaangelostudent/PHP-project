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
    <p> Please fill out the information bellow to register a new employee.</p> <!--Paragraph-->
    <br><br><br><!--space between text--> 

<!-- Form for submitting employee information using the POST method -->
    <form action="message.php" method="post">
    Company <input type="text" name="company">
    <br><br><br>
    Employee ID <input type="text" name="employeeID">
    <br><br><br>
    Name <input type="text" name="name">
    <br><br><br>
    Telephone number <input type="text" name="telephonenumber">
    <br><br><br>
    Email <input type="text" name="email">
    <br><br><br>
    Hours Worked <input type="text" name="hours">
    <br><br><br>
    Date <input type="date" name="date">
    <br><br><br>
    <input type="submit" value="Submit">         
    </form>

    <br><br><br><br>

    <!--Footer with the references-->
    <footer>
    <p>Contact information:</p>
    <p>Telephone: (437) 111 5555 </p>
    <p>Email: contact@techemp.com </p>
    </footer>

    </body>
    </html>

