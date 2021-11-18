
<!-- Untuk menampilkan nip dosen ketika nama diketik -->
<td><select name="nippb1" id="nippb1">


<?php
include '../../koneksi.php';
$katadsn = $_GET["katadsn"];
$kaprodi= mysqli_query($koneksi,"select * from dosen where namadosen = '$katadsn'");
// $row= mysqli_fetch_array($kaprodi);
$row= mysqli_fetch_array($kaprodi);
echo "<option value='$row[nip]'> $row[nip] </option>";



?></select></td>

<!-- ketika nama dihapus biar tulisan yang ada di combobox tetap muncul -->
<Td>Nip Pembimbing 1</Td>
		<td><select name="nippb1" id="nippb1" onchange="changeValue1(this.value)" >

<option value=""> -Pilih- </option>
<?php
include '../../koneksi.php';
$kaprodi= mysqli_query($koneksi,"select * from dosen");
while($row= mysqli_fetch_array($kaprodi)){
    echo "<option value='$row[nip]'> $row[nip] </option>";
}  

?>


</select></td>



		