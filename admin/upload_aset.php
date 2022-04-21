<?php
include "..\koneksi.php";



if(isset($_POST['judul_a']) || isset($_POST['tgl1_a']) || isset($_POST['keterangan1_a']) || isset($_FILES['img1_a']) || isset($_FILES['img2_a']) || isset($_FILES['img3_a']) || isset($_FILES['img4_a'])) {
  $judul = $_POST['judul_a'];
  $judul1 = $_POST['judul1_a'];
  $tgl1 = $_POST['tgl1_a'];
  $tgl1 = date('Y-m-d',strtotime($tgl1));  
  $ket1 = $_POST['keterangan1_a'];
  $link1 = $_POST['link1_a'];
  $judul2 = $_POST['judul2_a'];
  $tgl2 = $_POST['tgl2_a'];
  $tgl2 = date('Y-m-d',strtotime($tgl2));  
  $ket2 = $_POST['keterangan2_a'];
  $link2 = $_POST['link2_a'];


//upload file

      $ekstensi_diperbolehkan = array('png','jpg','jpeg');
      $nama1 = $_FILES['img1_a']['name'];
      $x1 = explode('.', $nama1);
      $ekstensi1 = strtolower(end($x1));
      $ukuran1 = $_FILES['img1_a']['size'];
      $file_tmp1 = $_FILES['img1_a']['tmp_name'];
      
      $nama2 = $_FILES['img2_a']['name'];
      $x2 = explode('.', $nama2);
      $ekstensi2 = strtolower(end($x2));
      $ukuran2 = $_FILES['img2_a']['size'];
      $file_tmp2 = $_FILES['img2_a']['tmp_name'];
      
      $nama3 = $_FILES['img3_a']['name'];
      $x3 = explode('.', $nama3);
      $ekstensi3 = strtolower(end($x3));
      $ukuran3 = $_FILES['img3_a']['size'];
      $file_tmp3 = $_FILES['img3_a']['tmp_name'];
      
      $nama4 = $_FILES['img4_a']['name'];
      $x4 = explode('.', $nama4);
      $ekstensi4 = strtolower(end($x4));
      $ukuran4 = $_FILES['img4_a']['size'];
      $file_tmp4 = $_FILES['img4_a']['tmp_name'];
      



      if(in_array($ekstensi1, $ekstensi_diperbolehkan) === true){
        if($ukuran1 < 1044070){      
          move_uploaded_file($file_tmp1, 'images/barang/'.$nama1);
          move_uploaded_file($file_tmp2, 'images/barang/'.$nama2);
          move_uploaded_file($file_tmp3, 'images/barang/'.$nama3);
          move_uploaded_file($file_tmp4, 'images/barang/'.$nama4);
          $query = "INSERT INTO barang(judul,judul1,tgl_iklan1,keterangan1,link_web1,judul2,tgl_iklan2,keterangan2,link_web2,img1,img2,img3,img4) VALUES('$judul', '$judul1', '$tgl1', '$ket1', '$link1', '$judul2', '$tgl2', '$ket2', '$link2', '$nama1', '$nama2', '$nama3', '$nama4')";
          $hasil = $koneksi->query($query);
          if($hasil){
            echo 'FILE BERHASIL DI UPLOAD';
          }else{
            echo 'GAGAL MENGUPLOAD GAMBAR';
          }
        }else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }

  
Header("Location:view_aset.php");

}

?>
