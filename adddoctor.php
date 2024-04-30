<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
</head>
<body>
<head>
    <title>St. Athanasius Doctor Management</title>
    <link rel="stylesheet" href="css/css.css"/>
    <!--<script type="text/javascript" src="js/js.js"></script>-->
</head>
<body bgcolor="#eceff4">
<center>
    <img src="img/staroflife.png" width="10%">
    <br>
    <h1 align="center"> St. Athanasius Hospital </h1>
    <ul>
        <li class="menu-item"><a href="#" class="drp"> Appointment Management </a>
            <div class="menu-content">
                <a href="newappoint.php">New Appointment</a><br>
                <a href="updateappoint.php">Update Appointment</a><br>
                <a href="viewappoint.php">View All Appointments</a><br>
            </div>
        </li>

        <li class="menu-item"><a href="#" class="drp"> Patient Management </a>
            <div class="menu-content">
                <a href="PatientFile.php">New Patient</a><br>
                <a href="updatepatient.php">Update Patient</a><br>
                <a href="viewpatients.php">View All Patients</a><br>
            </div>
        </li>

        <li class="menu-item"><a href="#" class="drp">Doctor Management </a>
            <div class="menu-content">
                <a href="adddoctor.php">Add Doctor</a><br>
                <a href="updatedoctor.php">Remove Doctor</a><br>
                <a href="displaydoctors.php">Display all Doctors</a><br>
            </div>
        </li>
    </ul>
</center>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="did">Doctor ID:</label><br>
    <input type="text" id="did" name="did"><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="sex">Sex:</label><br>
    <input type="text" id="sex" name="sex"><br>
    <label for="specialty">Specialty:</label><br>
    <input type="text" id="specialty" name="specialty"><br>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="phone_num">Phone Number:</label><br>
    <input type="text" id="phone_num" name="phone_num"><br><br>
    <input type="submit" value="Submit">
</form>
</center>


<?php
session_start();
$roles = array("A");
if(!in_array($_SESSION['role'], $roles))
{
    echo "You do not have permission to access this page or you are not properly logged in. <a href='index.php' >Login Again</a> ";
    session_destroy();
    header('location: index.php');
}
else
{
?>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data from form
    $did = $_POST['did'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $specialty = $_POST['specialty'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];

    // Prepare the query
    $query = "INSERT INTO `doctor_table` (`did`, `name`, `sex`, `specialty`, `address`, `email`, `phone_num`) 
              VALUES ('$did', '$name', '$sex', '$specialty', '$address', '$email', '$phone_num')";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
<?php
}
?>
</body>
</html>
