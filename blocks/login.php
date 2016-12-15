<form name="login-form" id="login-form" method="post" action="" >

    <div class="content">
        <input name="username" type="text" class="inputLog" value="Логин"  />
        <input name="password" type="password" class="inputLog" value="Пароль"  />
    </div>

    <div class="footer">
        <input type="submit" name="submit" value="ВОЙТИ" class="button" />
        <a href="Registration.php">Регистрация</a>
    </div>

    <script type="text/javascript">
        $(document).ready(function (){
            $(".buttonLog").click(function () {
                $("#login-form").css({"display":"block"});
            });
            $("#login-form").mouseleave(function () {
                $("#login-form").css({"display":"none"});
            })
        });
    </script>
</form>