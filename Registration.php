<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="StyleHome1.css">
</head>
<body>
<div id="container">
    <div class="head">
        <?php include "blocks/head.php"; ?>
    </div>

    <?php include "blocks/login.php"; ?>

    <form name="registration-form" class="registration-form" >
        <fieldset class="RegForm">
            <legend>Registration</legend>

            <div class="RegFormField">

                <label for="login">Логин*: </label>
                <input type="text" name="login" id="login" class="inputReg" placeholder="Логин.."><br />

                <label for="password">Пароль*: </label>
                <input type="password" name="password" id="password" class="inputReg" placeholder="Введите пароль.." minlength="6" maxlength="20"><br />

                <label for="name">Введите имя*: </label>
                <input type="text" name="name" id="name" class="inputReg" placeholder="Ваше имя.." ><br />

                <label for="name2">Фамилия*: </label>
                <input type="text" name="name2" id="name2"class="inputReg" placeholder="Фамилия.."><br />

                <label for="date">Дата вашего рождения*: </label>
                <input type="date" name="date" id="date" class="inputReg"><br />

                <label for="M" id="male">Пол*: </label>
                <label for="M" >M</label><input type="radio" name="name" id="M">
                <label for="F" >Ж</label><input type="radio" name="name" id="F"><br />

                <label for="Email">Email*: </label>
                <input type="Email" name="Email" id="Email" class="inputReg" placeholder="exemple@gmail.com"><br />

                <label for="phonenumber">Номер телефона*: </label>
                <input type="text" name="phonenumber" id="phonenumber" class="inputReg" placeholder="Номер телефона.."><br />

                <label for="country">Страна: </label>
                <select size="1" id="country" class="inputReg">
                    <option value="Ukraine">Україна</option>
                    <option value="Russia">Россия</option>
                    <option value="USA">USA</option>
                </select><br/>

                <label for="city">Город: </label>
                <input list="cityList" id="city" class="inputReg" placeholder="Город">
                <datalist id="cityList">class="inputReg">
                    <option value="Киев"></option>
                    <option value="Харьков"></option>
                    <option value="Днепропетровск"></option>
                    <option value="Одесса"></option>
                </datalist><br />


                <label for="comments">Комментарии: </label>
                <textarea name="comments", id="comments", class="inputReg"></textarea><br />
                <br />

                <label for="captcha">Вы человек? Выберите числа, содержащие '0'</label><br />
                <input type="checkbox" value="123" id="captcha" > 123 <br />
                <input type="checkbox" value="502">502<br />
                <input type="checkbox" value="809">809<br />

                <label for="button"></label>
                <input type="button" id="button" class="button" value="Отправить">
            </div>

        </fieldset>


    </form>

    <aside>
        <nav>
            <p> <a href="Home1.html">Ссылка1</a> </p>
            <p> <a href="Home1.html">Ссылка2</a> </p>
            <p> <a href="Home1.html">Ссылка3</a> </p>
            <p> <a href="Home1.html">Ссылка4</a> </p>
            <p> <a href="Home1.html">Ссылка5</a> </p>
        </nav>
    </aside>


    <div class="bottom">
        <?php include "blocks/footer.php"; ?>
    </div>
</div>
</body>
</html>