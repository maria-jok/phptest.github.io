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
  
   <script>
  
  function summaFunktio(a, b){
    let c = a-b*b
    console.log(c)
  }

  summaFunktio(1, 2)
  </script>
  
  
  
