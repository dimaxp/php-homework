<?php
$post = $_POST;
//if($post['login'] == null){unset($post['login']);}
//if($post['passw'] == null){unset($post['passw']);}


$handle = fopen("base.txt", "r");
while (!feof($handle)) {
    $buffer = fgets($handle, 4096);
    $massivatt = unserialize($buffer);
    if($post['login'] === $massivatt['login'] && $post['passw'] === $massivatt['passw'] && $massivatt['login'] != '')
    {echo $post['login']."такой юзер есть".$massivatt['login'];}
    else {echo "нет";}
}
fclose($handle);








?>




    <form name="login" method="POST" action="index.php">
        <div>
            <label for="login">
                <input name="login" id="login" autofocus required placeholder="Введите Ваш логин" type="text"></label>
        </div>
        <br>
        <div>
            <label for="passw">
                <input name="passw"  id="passw" required placeholder="Введите Ваш пароль" type="password"></label>
        </div>
        <br>
        <button class="btn btn-success" type="submit">Войти</button>
    </form>





    <form name="register" method="POST" action="register.php">
        <div>
            <label for="login_reg">
                <input id="login_reg" name="login_reg"  required placeholder="Введите Ваш логин" type="text"></label>
        </div>
        <br>
        <div>
            <label for="mail_reg">
                <input id="mail_reg" name="mail_reg"  required placeholder="Введите Вашу почту" type="email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})"></label>
        </div>

        <br>
        <div>
            <label for="passw_reg">
                <input id="passw_reg" name="passw_reg" required placeholder="Введите Ваш пароль" type="password"></label>
        </div>

        <br>
        <div>
            <label for="passw_reg">
                <input id="passw_reg" name="passw_regpovt" required placeholder="Повторите пароль" type="password"></label>
        </div><br>
        <button class="btn btn-success" type="submit">Зарегистрироваться</button>
    </form>

