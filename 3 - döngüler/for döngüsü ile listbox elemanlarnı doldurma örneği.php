<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
<div class="container">
<hr>
<?php
// for döngüsü ile listbox elemanlarnı doldurma örneği



?>
<select name="iller" id="">
<?php
for ($i=1; $i < 82; $i++) 
{ 
    ?>
    
    <option value="<?php echo $i;  ?>"> <?php echo $i;  ?></option>

    <?php
}
  ?>
</select>



</div>
</div>
</body>
</html>