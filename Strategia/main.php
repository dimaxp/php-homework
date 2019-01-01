<?php

$post = $_POST;

var_dump($file);



class Context
{

    protected $strategy;

    public function __constructor($strategy)
    {
        $this->strategy = $strategy;
    }


    public function setStrategy($strategy)
    {
        
        $this->strategy = $strategy;


    }


    public function doSomeBusinessLogic($ff)
    {
        $this->strategy->doAlgorithm($ff);

    }
}




interface Strategy
{
    public function doAlgorithm($data);
}




class EchoLogger implements Strategy
{
    public function doAlgorithm($data)
    {


        echo $data;
    }
}




class FileLogger implements Strategy
{
    public function doAlgorithm($data)
    {

        file_put_contents("log.txt",$data.PHP_EOL, FILE_APPEND);
    }
}





class TimeFileLogger implements Strategy
{
    public function doAlgorithm($data)
    {

        $data .= " ".date("d-m-y");
        file_put_contents("log.txt",$data.PHP_EOL, FILE_APPEND);
    }
}








$context = new Context();
$context->doSomeBusinessLogic($post['text_log']);
$context->setStrategy(new TimeFileLogger());


?>


<form action="main.php" method="POST">
<input name="text_log" type="text">

    <select name="metod">
        <option value="1">Показать</option>
        <option value="2">Записать</option>
        <option value="3">Записать с датой</option>
    </select>
<input type="submit" value="GO">
</form>
