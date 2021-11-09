<h1>
<form method="POST">
  <input type="text"> <br>
  <input type="submit">
</form>

<?php
  if(isset($_POST['submit'])) {
    header('Location: сообщение.php')
  }
  
 ?>
