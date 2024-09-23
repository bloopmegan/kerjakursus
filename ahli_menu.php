<?php
include("keselamatan.php");
?>

<link rel="stylesheet" href="aamenu.css">

<header>
    <img class="logo" src="imej/logo.png">
    <h1>Perpustakaan Negeri Sabah Cawangan Penampang</h1>
</header>

<nav>
    <ul>
        <li>
            <a href="ahli_home.php"><b>HOME</b></a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="ahli_daftar.php"><b>DAFTAR</b></a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="aktiviti_carian.php"><b>CARIAN</b></a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="ahli_laporan.php"><b>LAPORAN</b></a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="javascript:logout();"><b>LOG OUT</b></a>
        </li>
    </ul>
</nav>

<script>
        function logout(){
            if (confirm("Adakah anda pasti untuk log out?")) {
                window.location = "logout.php";
            }
        }
</script>