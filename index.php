<?php
require './connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container bg-light" style = "padding: 0">
        <?php require './header.php' ?>
        <?php
        $sql = "SELECT * FROM tbl_baiviet";
        $result = mysqli_query($con,$sql);
        
        // Numeric array
        // $row = mysqli_fetch_array($result);
        while($row = mysqli_fetch_array($result)){//lấy kết quả đưa vào mảng 1 chiều
            echo '<div class="tinmoinhat-item">
											<div class="tinmoinhat-item-img">
												<a href=""><img src="'.$row['MinhHoa'].'" width = 100px height=56px></a>
											</div>
											<div class="tinmoinhat-item-section">
												<a href="xembaiviet.php?id='.$row['ID'].'"><h4>'.$row['TieuDe'].'</h4></a>
											</div>
										</div>
									';
       } ?>
        <?php require './footer.php' ?>
    </div>


    
</body>
</html>