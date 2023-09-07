
<?php
if (isset($_POST['updateImage'])) {
    if ($_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
        $imageData = addslashes(file_get_contents($_FILES['profileImage']['tmp_name']));

        $username = "user123"; // Replace with the user's username

        $sql = "INSERT INTO userinfo ( profile_image) VALUES ( ?)
                ON DUPLICATE KEY UPDATE profile_image = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $imageData, $imageData);
        if ($stmt->execute()) {
            echo "Profile image uploaded and updated successfully!";
        } else {
            echo "Error uploading the profile image: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
