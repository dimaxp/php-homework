<?php
/*Написать функцию, которая возвращает максимальный элемент массива. Использовать функции php запрещено*/
$arrmax= [1,2,32,4,50,6,7,8,9];

function maximum($masm)
{
    $thismax = 0;
    foreach ($masm as $value)
    {
        if($thismax < $value)
        {$thismax = $value;}
    }
    return $thismax;
}

echo maximum($arrmax);


//Написать функцию, которая возвращает минимальный элемент массива. Использовать функции php запрещено


$arrmin = [32,1,4,50,6,7,8,9];
function minimum($masm)
{

    $samoemin = $masm[0];

    for ($i = 0; $i < count($masm); $i++) {



        if ($samoemin > $masm[$i]) {
            $samoemin = $masm[$i];
        }


    }


    return $samoemin;

}

echo minimum($arrmin);




/*Вывести данные из многомерного массива в html, выполнить get запрос,
в нем передать параметр, например, id вывести данные из многомерного массива по полученному параметру*/

$users = [
    ['id' => 1, 'name'=>'Dmitry', 'sname'=>'Khraponenkov'],
    ['id' => 2, 'name'=>'Ilya', 'sname'=>'Michin']


];




?>






<? foreach ($users as $value): ?>
<div>
   Имя:<? echo $value['name']; ?>
</div>
<div>
    Фамилия:<? echo $value['sname']; ?>
</div>
<? endforeach; ?>


<a href="dz2.php?id=1">Вывести значение</a>
<?
$get = $_GET;

foreach ($users as $value)
{
if ($value['id'] == $get['id'])
{ echo $value['name']." ".$value['sname'];}
}





?>


