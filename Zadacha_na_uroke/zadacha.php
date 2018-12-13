<?

class Operation

{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function execute($a, $b) {
        return;
    }


}




class Plus extends Operation {

    public function execute($a, $b) {
        return $a+$b;
    }


}


class Minus extends Operation {

    public function execute($a, $b) {
        return $a-$b;
    }


}




//class Calculator {
//
//    public static getInstance($a,$b,$operation){
//
//}

//}



$post = $_POST;
$a_form = $post['a'];
$b_form = $post['b'];
$operation_form = $post['operation'];

$obj = new Operation($a_form,$b_form);

$obj->execute();


var_dump($obj);


?>



<form action="zadacha.php" method="post">

    <input type="text" name="a" placeholder="a">
    <input type="text" name="b" placeholder="b">
    <input type="text" name="operation" placeholder="operation">
    <input type="submit" value="GO">

</form>
