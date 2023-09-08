<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</head>
    </html>
<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    $sql = "SELECT * FROM login WHERE uname = '$username' AND password = '$password'";
    $result = $conn->query($sql);


if ($result->num_rows == 1) {
    $_SESSION["uname"] = $username;
    ?>
    <script>
    
    swal.fire({
    icon: 'success',
                    title: 'success',
                    text: 'Login sucessfully'
    }).then(function() {
        window.location = "index1.php";
    });
            </script>
            <?php
 
} else {
    ?>
<script>

swal.fire({
icon: 'error',
            title: 'Error',
            text: 'Login Failed'
}).then(function() {
window.location = "logout.php";
});
    </script>
    <?php
}
}

$conn->close();
?>
 


