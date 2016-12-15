<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="StyleHome1.css">
</head>
<body>
<div id="container">

    <div class="head">
        <?php include "blocks/head.php"; ?>
    </div>

    <?php include "blocks/login.php"; ?>

    <article>
        <div class="gMAp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1282.1132834558816!2d36.229374358180635!3d50.007108494854165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dff0658edf%3A0xbb472e1e32e60418!2sV.+N.+Karazin+Kharkiv+National+Medical+University!5e0!3m2!1sru!2sru!4v1478084180656" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contacts">
            <ul>
                <li> Номер телефона</li>
                <li> Электронная почта</li>
                <li> Адрес </li>
            </ul>
        </div>
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
</body>
</html>