<?php
$files = $_FILES;
zagruzka($files['picture']);






function zagruzka($fil)
{
$file_count = count($fil['name']);



for ($i=0; $i < $file_count; $i++) {

if($fil['type'][$i] != "image/png")
    {
        echo $fil['name'][$i]."не подходит по типу файла, т.к. его тип файла - ".$fil['type'][$i]."<br>";

    }
else if ($fil['size'][$i] > 90000) {
        echo $fil['name'][$i]."не подходит по размеру, т.к. его размер превышает 90000 составляет - ".$fil['size'][$i]."<br>";

    }
 else if ($fil['type'][$i] == "image/png" && $fil['size'][$i] < 90000) {
      $tmp_name = $fil['tmp_name'][$i];
      $name = $fil['name'][$i];
     move_uploaded_file($tmp_name, "upload/$name");
     echo "файл - ".$name." успешно загружен"."<br>";
}






}




?>


<form action="zagruzkaNeskfile.php" enctype="multipart/form-data" method="POST">

    <input type="file" name="picture[]" accept="image/*" multiple>
    <input type="submit" value="GO GO GO">
</form>




