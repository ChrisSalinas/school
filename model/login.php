<?php
session_start();
if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * from login WHERE username LIKE '{$user}' AND password LIKE '{$pass}' LIMIT 1";
    $result = $mysqli->query($sql);
    if ($result->num_rows == 1) {
        $_SESSION['user'] = $user;
        ?>
        <script>window.location = '?action=admin_all'</script>
<?php
    }
}