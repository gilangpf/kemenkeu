<?php 
$koneksi = mysqli_connect("localhost","root","gilang04","kemenkeu");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];}
// $nganu="select * from detail_armada INNER JOIN armada on detail_armada.id_armada= armada.id_armada";
// $nganu2 = mysqli_query($koneksi,$nganu);



// if (isset($_POST['bencana']) || isset($_POST['camat']) || isset($_POST['date'])|| isset($_POST['alamat'])|| isset($_POST['kerugian']))
// {
// 	$bencana = $_POST['bencana'];
//     $camat = $_POST['camat'];
//     $date = $_POST['date'];
//     $alamat = $_POST['alamat'];
//     $kerugian = $_POST['kerugian'];
//     $sql = "INSERT INTO `kejadian_bencana` ( `id_bencana`, `id_kecamatan`, `waktu`, `kerugian`, `Alamat`) VALUES ('$bencana', '$camat' , '$date', '$kerugian', '$alamat');";
// 	$hasil = mysqli_query($koneksi,$sql);

// }

// if (isset($_POST['kejadian']) || isset($_POST['armada']) || isset($_POST['keterangan']))
// {
// 	$kejadian = $_POST['kejadian'];
//     $armada = $_POST['armada'];
//     $keterangan = $_POST['keterangan'];
//     $sql = "INSERT INTO `detail_armada` ( `id_armada`, `id_kejadian_bencana`, `keterangan`) VALUES ('$armada', '$kejadian' , '$keterangan');";
// 	$hasil = mysqli_query($koneksi,$sql);
// }

// if(isset($_GET['id']) && isset($_GET['aksi'])&&isset($_GET['id2'])){
// 	$aksi = $_GET['aksi'];
//     $id = $_GET['id'];
//     $id2=$_GET['id2'];
// 	if($aksi == 'hapus'){
//         $sql = "DELETE FROM detail_armada WHERE id_armada=$id and id_kejadian_bencana=$id2";
//         $result = $koneksi->query($sql);
//         header("Location:index.php");}}
?>