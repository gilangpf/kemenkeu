<?php
include "..\koneksi.php";



if(isset($_POST['judul']) || isset($_POST['harga']) || isset($_POST['keterangan']) || isset($_FILES['img1']) || isset($_FILES['img2']) || isset($_FILES['img3']) || isset($_FILES['img4'])) {
  $judul = $_POST['judul'];
  $judul1 = $_POST['judul1'];
  $harga1 = $_POST['harga1'];
  $tgl1 = $_POST['tgl1'];
  $tgl1 = date('Y-m-d',strtotime($tgl1));  
  $ket1 = $_POST['keterangan1'];
  $cp1 = $_POST['cp1'];
  $link1 = $_POST['link1'];
  $judul2 = $_POST['judul2'];
  $harga2 = $_POST['harga2'];
  $tgl2 = $_POST['tgl2'];
  $tgl2 = date('Y-m-d',strtotime($tgl2));  
  $ket2 = $_POST['keterangan2'];
  $cp2 = $_POST['cp2'];
  $link2 = $_POST['link2'];


//upload file

      $ekstensi_diperbolehkan = array('png','jpg','jpeg');
      $nama1 = $_FILES['img1']['name'];
      $x1 = explode('.', $nama1);
      $ekstensi1 = strtolower(end($x1));
      $ukuran1 = $_FILES['img1']['size'];
      $file_tmp1 = $_FILES['img1']['tmp_name'];
      
      $nama2 = $_FILES['img2']['name'];
      $x2 = explode('.', $nama2);
      $ekstensi2 = strtolower(end($x2));
      $ukuran2 = $_FILES['img2']['size'];
      $file_tmp2 = $_FILES['img2']['tmp_name'];
      
      $nama3 = $_FILES['img3']['name'];
      $x3 = explode('.', $nama3);
      $ekstensi3 = strtolower(end($x3));
      $ukuran3 = $_FILES['img3']['size'];
      $file_tmp3 = $_FILES['img3']['tmp_name'];
      
      $nama4 = $_FILES['img4']['name'];
      $x4 = explode('.', $nama4);
      $ekstensi4 = strtolower(end($x4));
      $ukuran4 = $_FILES['img4']['size'];
      $file_tmp4 = $_FILES['img4']['tmp_name'];
      



      if(in_array($ekstensi1, $ekstensi_diperbolehkan) === true){
        if($ukuran1 < 1044070){      
          move_uploaded_file($file_tmp1, 'images/tanah/'.$nama1);
          move_uploaded_file($file_tmp2, 'images/tanah/'.$nama2);
          move_uploaded_file($file_tmp3, 'images/tanah/'.$nama3);
          move_uploaded_file($file_tmp4, 'images/tanah/'.$nama4);
          $query = "INSERT INTO tanah(judul,judul1,harga1,tgl_iklan1,keterangan1,link_web1, cp1,judul2,harga2,tgl_iklan2,keterangan2,link_web2, cp2,img1,img2,img3,img4) VALUES('$judul', '$judul1', '$harga1', '$tgl1', '$ket1', '$link1', '$cp1', '$judul2', '$harga2', '$tgl2', '$ket2', '$link2', '$cp2', '$nama1', '$nama2', '$nama3', '$nama4')";
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

  
Header("Location:view_tanah.php");

}

?>
