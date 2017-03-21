<?php

session_start();
if(isset($_SESSION['username'])){
    //echo '<h3>success</h3>';
    echo '<a href="logout.php">Logout</a>';

}else{
    header("Location:login.php");
}
?>

<?php
/*if ($_SESSION['accessType'] == tech) {
    header("location: techMenu.php");
} else if ($_SESSION['accessType'] == admin){
    header("Location: adminMenu.php");
}*/

