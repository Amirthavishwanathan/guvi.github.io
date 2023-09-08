<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</head>
    </html>
<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["registerUsername"];
    $email = $_POST["registeremail"];
    $password = $_POST["registerPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($password === $confirmPassword) {
        $sql = "INSERT INTO login (uname, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            ?>
            <script>
            
            swal.fire({
            icon: 'success',
                            title: 'success',
                            text: 'Register sucessfully'
            }).then(function() {
                window.location = "index.html";
            });
                    </script>
                    <?php
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match.";
    }
}
$conn->close();
?>
