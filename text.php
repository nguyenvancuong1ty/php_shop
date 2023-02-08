<?php require './header.php' ?>
<?php 
  echo 'Trang'.$_GET['page'];
?>
<nav aria-label="Page navigation example">
  <ul class="pagination" style= "justify-content: center">
    <li class="page-item"><a class="page-link" href="text.php?page=1">Previous</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=2">2</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=3">3</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=4">4</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=5">5</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=6">6</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=7">7</a></li>
    <li class="page-item"><a class="page-link" href="text.php?page=7">Next</a></li>
  </ul>
</nav>