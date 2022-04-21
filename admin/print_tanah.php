<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		
	</center>
 
	<?php 
	include '../koneksi.php';
	?>
 
	<table border="1">
		<?php 
		$id = $_GET['id'];
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tanah where id = $id");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr><td>
                <img style="height: 250px; width: 250px;" src="<?php echo "images/tanah/".$data['img1'] ?>">
                <img style="height: 250px; width: 250px;" src="<?php echo "images/tanah/".$data['img2'] ?>"> 
            </td></tr>
            <td colspan="3">Data 1<td>
            <tr><td>Nama</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['judul1']; ?></td></tr>
            <tr><td>Harga</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['harga1']; ?></td></tr>
            <tr><td>Tanggal Iklan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['tgl_iklan1']; ?></td></tr>
            <tr><td>Keterangan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['keterangan1']; ?></td></tr>
            <tr><td>Contact Person</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['cp1']; ?></td></tr>
            <tr><td>Alamat web</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['link_web1']; ?></td>
            </tr>
            <tr><td colspan="3"></td></tr>
            <td colspan="3">Data 2<td>
            <tr><td>Nama</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['judul2']; ?></td></tr>
            <tr><td>Harga</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['harga2']; ?></td></tr>
            <tr><td>Tanggal Iklan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['tgl_iklan2']; ?></td></tr>
            <tr><td>Keterangan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['keterangan2']; ?></td></tr>
            <tr><td>Contact Person</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['cp2']; ?></td></tr>
            <tr><td>Alamat web</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['link_web2']; ?></td>
            </tr>
	
	</table>

                <img style="height: 200px; width: 200px;" src="<?php echo "images/tanah/".$data['img3'] ?>">
                <img style="height: 200px; width: 200px;" src="<?php echo "images/tanah/".$data['img4'] ?>"> 
                	<?php 
		}
		?>
 
	<script>
		window.print();
	</script>
 
</body>
</html>