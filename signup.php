<?php
include("sambungan.php");
if (isset($_POST["submit"])){
    $idahli = $_POST["idahli"];
    $password = $_POST["password"];
    $namaahli = $_POST["namaahli"];
    
    $sql = "insert into ahli values('$idahli', '$password', '$namaahli')";
    $result = mysqli_query($sambungan, $sql);
    if($result)
        echo "<script>alert('Anda berjaya sign up!')</script>";
    else{
        echo "<h4 class='ralat'>MESEJ RALAT</h4>";
        echo "<div class='ralat'>$sql<br><br>".mysqli_error($sambungan)."</div>";
    }
    echo "<script>window.location='index.php'</script>";
}
?>

<link rel="stylesheet" href="aaborang.css">
<link rel="stylesheet" href="aabutton.css">

<main>
    <center><br>
        <img class="logo" src="imej/logo.png">
    </center>
    
    <h3 class="panjang">SIGN UP</h3>
    <form class="panjang" action="signup.php" method="post">
        <table>
            <tr>
                <td>ID Ahli</td>
                <td><input required type="text" name="idahli" pattern="[a-z0-9_.]{3,15}" oninvalid="this.setCustomValidity('ID mesti di antara 3-15 aksara. Huruf kecil, nombor, simbol _ . sahaja dibenarkan.')" oninput="this.setCustomValidity('')">
                </td>
            </tr>
            
            <tr>
                <td>Nama Ahli</td>
                <td><input type="text" name="namaahli" pattern="[A-Za-z @-]" oninvalid="this.setCustomValidity('Huruf dan simbol @ - sahaja dibenarkan.')" oninput="this.setCustomValidity('')"></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" minlength="8" oninvalid="this.setCustomValidity('Password minimum 8 aksara.')" oninput="this.setCustomValidity('')"></td>
            </tr>
            
        </table>
        <button class="tambah" type="submit" name="submit">Daftar</button>
        <button class="batal" type="button" onclick="window.location='index.php'">Batal</button>
        
    </form>
</main>