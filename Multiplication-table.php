<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form> name="frm" method="post">
    enter number to find table:
  <input type="number" name="n">
  <br><br>
  <input type="submit" name="sub">  
  </form>
  <?php
  @$x = $_POST['n']; //in this way we merge any value to php variable
  @$sub = $_POST['sub'];
  if($sub)
  for($i=1; $i<10; $i++)
  {
    $sum = $x * $i;
    echo "$x $i = $sum<br>";
  }
  ?>
</body>
</html>