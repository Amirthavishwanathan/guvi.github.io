<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</head>
    </html>
<?php
session_start();
session_destroy();
?>
<script>

swal.fire({
icon: 'warning',
                title: 'Are you Sure?',
                text: 'You want to Logout!'
}).then(function() {
    window.location = "log.html";
});
        </script>
        <?php
?>