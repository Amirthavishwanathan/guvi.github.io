<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
</head>
<body>

<?php
// Initialize variables with default values
$name = "John Doe";
$email = "johndoe@example.com";
$phone = "123-456-7890";
$address = "123 Main St";
$state = "California";
$country = "United States";
$age = 25;
$dob = "1998-01-01";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update profile details with form data
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
}

?>

<h2>Update Profile</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name" value="<?php echo $uname; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>"><br><br>
    Address: <input type="text" name="address" value="<?php echo $address; ?>"><br><br>
    State: <input type="text" name="state" value="<?php echo $state; ?>"><br><br>
    Country: <input type="text" name="country" value="<?php echo $country; ?>"><br><br>
    Age: <input type="number" name="age" value="<?php echo $age; ?>"><br><br>
    Date of Birth: <input type="date" name="dob" value="<?php echo $dob; ?>"><br><br>
    <input type="submit" value="Update">
</form>

<h2>Updated Profile Details</h2>
<p>Name: <?php echo $uname; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Phone: <?php echo $phone; ?></p>
<p>Address: <?php echo $address; ?></p>
<p>State: <?php echo $state; ?></p>
<p>Country: <?php echo $country; ?></p>
<p>Age: <?php echo $age; ?></p>
<p>Date of Birth: <?php echo $dob; ?></p>

</body>
</html>
