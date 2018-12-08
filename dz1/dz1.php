<?

//Выбрать 6-7 наиболее важных на Ваш взгляд функций для работы с массивами и разобрать их
$arr1 = array('id' => '1', 'name' => 'Dmitry', 'sname' => 'Khraponenkov');
$arr2 = array('id' => '2', 'name' => 'Dmitry', 'sname' => 'Ivanov');
$soedinyaem = array_merge($arr1, $arr2);
var_dump($soedinyaem);



$car = array("lada", "volvo", "audi", "bmw");
sort($car);
var_dump($car);


$car2 = array("lada", "volvo", "audi", "bmw");
$posled = array_pop($car2);
var_dump($posled);



$car3 = array("lada", "volvo", "audi", "bmw");
$menyaem = array_flip($car3);
var_dump($menyaem);



$car3 = array("lada", "volvo", "audi", "bmw");
var_dump(array_chunk($car3, 2));


$cargarage = array("mosckva", "spb", "tula", "tver");
$car4 = array("lada", "volvo", "audi", "bmw");
$garage = array_combine($cargarage, $car4);
var_dump($garage);





//Дан массив [3, 1, 6, 0, 4, 5].
//С помощью цикла foreach найдите сумму квадратов элементов этого массива.

$nakvadrat = array(3, 1, 6, 0, 4, 5);
var_dump($nakvadrat);

foreach ($nakvadrat as $val)
{
$summa = $summa + pow($val,2);
}
var_dump($summa);






//Нарисуйте треугольник (или ромб) из символов *.
//Высота треугольника равна 15.


$zvezdochet = "***************";

for($i = 0; $i <= 15; $i++)
{
    $zvezdochet = substr($zvezdochet,0,-1);
    $zvezdochet = "&nbsp;".$zvezdochet;
    echo $zvezdochet."<br>";
}




//Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите жирным.
//Текущий день можно получить с помощью функции date.
//Название дней выводить по-русски

$dni = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
$date = date(N)-1;
echo $date;

foreach ($dni as $key => $oneday)
{

    if ($key === $date)
    {echo "<b>".$oneday."</b>"."<br>";}
else {
    echo $oneday."<br>";
}
}





//Отсортировать массив по 'price'

$arrss = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];



$price = array_column($arrss, 'price');
array_multisort($arrss, SORT_ASC, $price);
var_dump($arrss);


?>