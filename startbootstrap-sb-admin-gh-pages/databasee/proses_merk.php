<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM product_type WHERE id=?";
   } else {
        $_name = $_POST['name'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_name;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO product_type (name) VALUES (?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE product_type SET name=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   header('location:list_merk.php');
?>