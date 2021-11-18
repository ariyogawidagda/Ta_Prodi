
<!-- untuk menampilkan nip dosen ketika nama ditulis -->
<td><select name="nippb2" id="nippb2">


<?php
include '../../koneksi.php';
$katadsn2 = $_GET["katadsn2"];
$kaprodi= mysqli_query($koneksi,"select * from dosen where namadosen = '$katadsn2'");
while($row= mysqli_fetch_array($kaprodi)){
echo "<option value='$row[nip]'> $row[nip] </option>";
}
?>

</select></td>

<!-- untuk tetap menampilkan data nip dosen di combobox -->

<Td>Nip Pembimbing 2</Td>
		<td><select name="nippb2" id="nippb2" onchange="changeValue(this.value)" >

<option value=""> -Pilih- </option>
<?php
include '../../koneksi.php';
$kaprodi= mysqli_query($koneksi,"select * from dosen");
while($row= mysqli_fetch_array($kaprodi)){
    echo "<option value='$row[nip]'> $row[nip] </option>";
}  

?>


</select></td>