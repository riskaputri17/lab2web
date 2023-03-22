<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>TUGAS</h1>
    <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="text" name="tgl_lahir">
            <br>
            <label>Pekerjaan: 
            <select name='pekerjaan'>
                <option value="HRD">HRD</option>
                <option value='Manager'>Manager</option>
                <option value='Supervisor'>Supervisor</option>
                <option value='Staff'>Staff</option>
                <option value='Operator'>Operator</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Nama: ' . $_POST['nama'];
        $tgl_lahir = @$_POST['tgl_lahir'];
        $umur = new DateTime($tgl_lahir);
        $skrg = new DateTime();
        $diff = $skrg->diff($umur);
        echo "<br> Umur: ". $diff->y ." Tahun";

        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];
        $pekerjaan = @$_POST['pekerjaan'];
        if($pekerjaan == "HRD"){
            echo '<br> Gaji: Rp. 15.000.000,-';
        }elseif($pekerjaan == "Manager"){
            echo '<br> Gaji: Rp. 20.000.000,-';
        }elseif($pekerjaan == "Supervisor"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "Staff"){
            echo '<br> Gaji: Rp. 7.000.000,-';
        }elseif($pekerjaan == "Operator"){
            echo '<br> Gaji: Rp. 6.000.000,-';
        }
    ?>
</body>
</html>