<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM customer WHERE id=?";
   } else {
        $_name = $_POST['name'];
        $_gender = $_POST['gender'];
        $_phone = $_POST['phone'];
        $_email = $_POST['email'];
        $_stock = $_POST['address'];
        $_card_id = $_POST['card_id'];
        

      // array data
        $ar_data[]=$_name;
        $ar_data[]=$_gender;
        $ar_data[]=$_phone;
        $ar_data[]=$_email;
        $ar_data[]=$_address;
        $ar_data[]=$_card_id;
       

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO product (name, gender, phone, email, address, card_id) VALUES (?,?,?,?,?,?,)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE product SET name=?,gender=?,phone=?,email=?,address=?,card_id=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   header('location:list_customer.php');
?>