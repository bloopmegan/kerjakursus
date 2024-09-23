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
            <a href="admin_home.php"><b>HOME</b></a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="#"><b>ADMIN</b></a>
            <ul>
                <li><a href="admin_insert.php">TAMBAH</a></li>
                <li><a href="admin_senarai.php">SENARAI</a></li>
            </ul>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="#"><b>AHLI</b></a>
            <ul>
                <li><a href="ahli_insert.php">TAMBAH</a></li>
                <li><a href="ahli_senarai.php">SENARAI</a></li>
            </ul>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="#"><b>AKTIVITI</b></a>
            <ul>
                <li><a href="aktiviti_insert.php">TAMBAH</a></li>
                <li><a href="aktiviti_senarai.php">SENARAI</a></li>
                <li><a href="aktiviti_carian.php">CARIAN</a></li>
            </ul>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="import.php"><b>IMPORT</b></a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="kehadiran_pilih.php"><b>LAPORAN</b></a>
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