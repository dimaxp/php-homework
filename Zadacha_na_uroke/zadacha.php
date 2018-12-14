<?

class Operation

{
    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function execute() {
        return;
    }




}




class Plus extends Operation {


    public function __construct($a, $b)
    {
        parent::__construct($a, $b);
    }



    public function execute() {
        return $this->a+ $this->b;
    }


}


class Minus extends Operation {


    public function __construct($a, $b)
    {
        parent::__construct($a, $b);
    }



    public function execute() {
        return $this->a - $this->b;
    }


}




class Calculator {

    public static getInstance($a,$b,$operation){

}

}



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
