<?php
$prodi=$_GET['prodi'];

?>
<!-- jika prodi dipilih D3 Manajemen Informatika maka akan tampil seperti di bawah ini -->
<?php if($prodi=="001"){ ?>

<Td>Kelas</Td>
			<td>
            <select name="kelas" id="klsprodi">
        	<option value=""> -Pilih- </option>
        <option value="6A/MI"> 6A/MI </option>
        <option value="6B/MI"> 6B/MI </option>
        <option value="6C/MI"> 6C/MI </option>
        <option value="6D/MI">6D/MI</option>
       
        </select>

        <?php }?>
<!-- jika prodi dipilih D3 Teknik Listrik maka akan tampil seperti di bawah ini -->
        <?php if ($prodi=="002"){ ?>

<Td>Kelas</Td>
			<td>
            <select name="kelas" id="klsprodi">
            <option value=""> -Pilih- </option>
        <option value="6A/TL"> 6A/TL </option>
        <option value="6B/TL"> 6B/TL </option>
        <option value="6C/TL"> 6C/TL </option>
        <option value="6D/TL">6D/TL</option>
       
        </select>

        <?php }?>
<!-- jika prodi dipilih D4 Rekayasa Perangkat Lunak maka akan tampil seperti di bawah ini -->
        <?php if($prodi=="003"){ ?>

<Td>Kelas</Td>
			<td>
            <select name="kelas" id="klsprodi">
            <option value=""> -Pilih- </option>
        <option value="6A/RPL"> 6A/RPL </option>
        <option value="6B/RPL"> 6B/RPL </option>
        <option value="6C/RPL"> 6C/RPL </option>
        <option value="6D/RPL">6D/RPL</option>
       
        </select>

        <?php }?>

        <!-- jika prodi dipilih D4 Teknik Otomasi maka akan tampil seperti di bawah ini -->

        <?php if($prodi=="004"){ ?>

<Td>Kelas</Td>
			<td>
            <select name="kelas" id="klsprodi">
            <option value=""> -Pilih- </option>
        <option value="6A/TO"> 6A/TO </option>
        <option value="6B/TO"> 6B/TO </option>
        <option value="6C/TO"> 6C/TO </option>
        <option value="6D/TO">6D/TO</option>
       
        </select>

        <?php }?>

       