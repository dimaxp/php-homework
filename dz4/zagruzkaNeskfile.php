<?php
$files = $_FILES;
zagruzka($files['picture']);

//var_dump($files['picture']);

function zagruzka($fil)
{
$file_count = count($fil);
for ($i=0; $i < $file_count; $i++) {

 foreach ($fil as $val) {

        if ($fil['size'][$i] >= 30000) {
        echo $fil['name'][$i]."не подходит по размеру";
            return;
        }
        else if($fil['type'][$i] != 'image/png')
        {
            echo $fil['name'][$i]."не подходит по типу файла";
            return;
        }
        else {

            echo $fil['name'][$i]."подходит для загрузки";
        }




 }

}





}














/*if ($val['size'] >= 30000)
{
    echo $val['name']."не подходит по размеру";
    break;
}*/

//var_dump($fil);

//$name = $files['picture']['name'];
//$tmp_name = $files['picture']['tmp_name'];
//var_dump($tmp_name);

//move_uploaded_file($tmp_name, "data/$name");


?>


<form action="zagruzkaNeskfile.php" enctype="multipart/form-data" method="POST">

    <input type="file" name="picture[]" accept="image/*" multiple>
    <input type="submit" value="GO GO GO">
</form>




