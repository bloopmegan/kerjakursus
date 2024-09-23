<?php
include("keselamatan.php");
include("sambungan.php");
include("admin_menu.php");

if (isset($_POST["submit"])){
    $idahli = $_POST["idahli"];
    $password = $_POST["password"];
    $namaahli = $_POST["namaahli"];
    
    $sql = "insert into ahli values('$idahli', '$password', '$namaahli')";
    $result = mysqli_query($sambungan, $sql);
    if ($result == true)
        echo "<h4 class='ok'>MESEJ OUTPUT</h4>
        <div class='ok'>Berjaya tambah</div>";
    else
        echo "<h4 class='ralat'>MESEJ RALAT</h4>
        <div class='ralat'>$sql<br><br>".mysqli_error($sambungan)."</div>";
}
?>

<link rel="stylesheet" href="aaborang.css">
<link rel="stylesheet" href="aabutton.css">

<main>
    <h3 class="panjang">TAMBAH AHLI</h3>
    <form class="panjang" action="ahli_insert.php" method="post">
        <table>
            <tr>
                <td class="warna">ID Ahli</td>
                <td><input required type="text" name="idahli" oninput = "this.setCustomValidity('')">
                </td>
            </tr>
            
            <tr>
                <td class="warna">Nama Ahli</td>
                <td><input type="text" name="namaahli"></td>
            </tr>
            
            <tr>
                <td class="warna">Password</td>
                <td><input type="text" name="password" placeholder="Contoh: 12345"></td>
            </tr>
        </table>
        <button class="tambah" type="submit" name="submit">Tambah</button>
    </form>
    
    <br>
</main>

<?php
include("footer.php");
?>