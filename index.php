<?php
session_start();
include("sambungan.php");

if (isset($_POST["submit"])){
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    
    $jumpa = FALSE;
    
    if ($jumpa == FALSE){
        $sql = "SELECT * FROM ahli";
        $result = mysqli_query($sambungan, $sql);
        while ($ahli = mysqli_fetch_array($result)){
            if ($ahli["idahli"] == $userid && $ahli["password"] == $password){
                $jumpa = TRUE;
                $_SESSION["idpengguna"] = $ahli["idahli"];
                $_SESSION["namapengguna"] = $ahli["namaahli"];
                $_SESSION["status"] = "ahli";
                break;
            }
        }
    }
    
    if($jumpa == FALSE){
        $sql = "SELECT * FROM admin";
        $result = mysqli_query($sambungan, $sql);
        while($admin = mysqli_fetch_array($result)){
            if($admin["idadmin"] == $userid && $admin["password"]== $password){
                $jumpa = TRUE;
                $_SESSION["idpengguna"] = $admin["idadmin"];
                $_SESSION["namapengguna"] = $admin["namaadmin"];
                $_SESSION["status"] = "admin";
            }
        }
    }
    
    if ($jumpa == TRUE) // jika ID dan PASSWORD pengguna adalah betul,
        if ($_SESSION["status"]=="ahli") // Status pengguna adalah AHLI
            header("Location: ahli_home.php"); // Ahli akan dibawa ke paparan HOME Ahli
        else if($_SESSION["status"]=="admin") // Status pengguna adalah ADMIN
            header("Location: admin_home.php"); // Ahli akan dibawa ke paparan HOME Admin
    else 
        echo "window.location='index.php'";
        echo "<script>alert('Kesalahan pada username atau password.');</script>";
    
}
?>

<link rel="stylesheet" href="aabutton.css">
<link rel="stylesheet" href="aaborang.css">

<center>
    <img class="logo" src="imej/logo.png" width=101>
</center>

<h3 class="pendek">LOG IN</h3>
<form class="pendek" action="index.php" method="post">
    <table>
        <tr>
            <td><img src="imej/user.png"></td>
            <td><input type="text" name="userid" placeholder="idpengguna"></td>
        </tr>
        <tr>
            <td><img src="imej/lock.png"></td>
            <td><input type="password" name="password" placeholder="password"></td>
        </tr>
    </table>
    <button class="login" type="submit" name="submit">Login</button>
    <button class="signup" type="button" onclick="window.location='signup.php'">Sign Up</button>
</form>