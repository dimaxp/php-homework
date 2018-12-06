<form action="plusurl.php" method="POST">
<input name="links" type="text">
<input type="submit" value="GO">
</form>
<?php
$post = $_POST;

//echo $post[links];

$path = "C:\\Users\\dimax\\Downloads\\OSPanel\\domains\\php-lessons\\filesystem\\linkadress.txt";
$chtotam = file('linkadress.txt');

foreach ($chtotam as $text) {


    var_dump($text);



if (trim($text) == $post[links])
{

    echo "Такой адрес есть!";
    return false;

}
else {
    file_get_contents($path);
    file_put_contents($path,$post[links].PHP_EOL, FILE_APPEND);}



}

?>