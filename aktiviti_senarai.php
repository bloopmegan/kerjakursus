<?php 
include("keselamatan.php");
include("sambungan.php");
include("admin_menu.php");
?> 

<link rel="stylesheet" href="aasenarai.css">

<main>
    <table class="aktiviti">
        <caption>SENARAI AKTIVITI</caption>
        <tr>
            <th>ID</th>
            <th>Aktiviti</th>
            <th>Tempat</th>
            <th>Tarikh</th>
            <th>Masa</th>
            <th>Gambar</th>
            <th colspan="2">Tindakan</th>
            <th colspan="2">Kehadiran</th>
        </tr>

        <?php
        $sql = "select * from aktiviti";
        $result = mysqli_query($sambungan, $sql);
        while($aktiviti = mysqli_fetch_array($result)){
            
            $idaktiviti = $aktiviti["idaktiviti"];
            $tarikh = date_format(date_create($aktiviti['tarikhmasa']), 'd-m-Y');
            $masa = date_format(date_create($aktiviti['tarikhmasa']), 'h:i A');
            echo "<tr> <td>$aktiviti[idaktiviti]</td>
                <td class='nama'>$aktiviti[namaaktiviti]</td>
                <td>$aktiviti[tempat]</td>
                <td>$tarikh</td>
                <td>$masa</td>
                
                <td><img width=95 src='imej/$aktiviti[gambar]'></td>
                <td>
                    <a href='aktiviti_update.php?idaktiviti=$idaktiviti'>
                        <img class='icon' src='imej/update.png'><br>update
                    </a>
                </td>
                
                <td>
                    <a href='javascript:padam(\"$idaktiviti\");'>
                        <img class='icon' src='imej/delete.png'><br>padam
                    </a>
                </td>
                
                <td>
                    <a href='kehadiran_senarai.php?idaktiviti=$idaktiviti'>
                        <img class='icon' src='imej/sahkan.png'><br>sahkan
                    </a>
                </td>
                 
                <td>
                    <a href='kehadiran_ahli.php?idaktiviti=$idaktiviti'>
                        <img class='icon' src='imej/tambah.png'><br>tambah
                    </a>
                </td>
                </tr>";
            
        }
        ?>

    </table>
    <script>
        function padam(id) {
            if (confirm("Adakah anda pasti untuk padam?") == true) {
                window.location = "aktiviti_delete.php?idaktiviti=" + id;
            }
        }
    </script>
</main>

<?php
include("footer.php");
?>