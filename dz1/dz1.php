<?

// ������� 6-7 �������� ������ �� ��� ������ ������� ��� ������ � ��������� � ��������� ��

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





//��� ������ [3, 1, 6, 0, 4, 5]. 
//� ������� ����� foreach ������� ����� ��������� ��������� ����� �������.

$nakvadrat = array(3, 1, 6, 0, 4, 5);
var_dump($nakvadrat);

foreach ($nakvadrat as $val)
{
$summa = $summa + pow($val,2);
}
var_dump($summa);






//��������� ����������� (��� ����) �� �������� *. 
//������ ������������ ����� 15.

$spec = "&nbsp;";
$zvezda = "*<br>";
for ($i= 0; $i <= 30; $i++) 
{

if ($i <= 15) {
$zvezda = $spec.$zvezda;
echo $zvezda;
}
else if($i >= 15 && $i <= 30) 
{
$zvezda = substr($zvezda,0);
echo $zvezda;
}



}





?>