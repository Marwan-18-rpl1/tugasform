<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <form action="test.php" method="POST">
        <label>Nama Depan:</label><br>
        <input type="text" name="nama_depan"><br><br>

        <label>Nama Belakang:</label><br>
        <input type="text" name="nama_belakang"><br><br>

        <label>Tingkat:</label><br>
        <select name="tingkat">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <label>Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
        <input type="checkbox" name="hobi[]" value="Memasak"> Memasak
        <input type="checkbox" name="hobi[]" value="Menulis"> Menulis
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
        <input type="checkbox" name="hobi[]" value="Main Game">Main Game<br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>