<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee_Home</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="StyleHome1.css">
</head>
<body>
<div id="container">

    <div class="head">
        <?php include "blocks/head.php"; ?>
    </div>

    <?php include "blocks/login.php"; ?>

    <article>
       <p> Много текста про кофе </p>
    </article>

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

</body>
</html>