<?php require './header.php' ?>
<?php require './connect.php' ?>
<?php 
$id = $_GET['id'];
$sql = "select * from tbl_baiviet where ID = $id";
$danhsach = mysqli_query($con, $sql);
$dong = mysqli_fetch_array($danhsach);
?>
<form method = "post" action="text.php" name = "getdata">
    <input type="text" name = "user" placeholder = "Nhập user">
    <input type="text" name = "password" placeholder = "Nhập password">
    <input type="submit" value = "submit">
</form>

<h1><?php echo $dong['TieuDe'] ?></h1>
<h1><?php echo $dong['TomTat'] ?></h1>
<?php echo '<img src="'.$dong['MinhHoa'].'" alt="">' ?>

<?php mysqli_close($con); ?>

