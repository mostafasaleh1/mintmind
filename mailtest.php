<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/d7e8a95865396cddca89b00080d2cba6?family=SoDo+Sans+SemiBold" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="sourceimages/logo.png" type="image/png">
    <title>Mint Mind</title>
    <!--linking Css file-->
    <link rel="stylesheet" href="styles/styles.css" />
</head>

<body>
    <nav>
        <div class="logo">
            <a href="http://localhost/mintmind/main.html"> <img src="sourceImages/logo.png" alt="logo"></a>
        </div>
        <div class="middle-nav">
            <ul>
                <li><a href="http://localhost/mintmind/menu.html">Меню</a></li>
                <li><a href="http://localhost/mintmind/cards.html">Карты</a></li>
                <li><a href="#">Корзина заказа</a></li>
            </ul>
        </div>
        <div class="right-nav">
            <button class="navbar-signin">Войти</button>
            <button class="navbar-joinnow">Регистрация</button>
        </div>
    </nav>

    <div class="ad">
        <div><h1>Начните свой день вместе c Mint Mind®</h1></div>
        <div style="font-size: 19px;"><a href="#" style="text-decoration: underline;">Войдите в систему</a> сегодня для участия в программе лояльности*.</div>
    </div>

    <nav>
        <div class="middle-nav1">
            <ul>
                <li>РЕГИСТРАЦИЯ</li>
            </ul>
        </div>
    </nav>

        <div class="regform">
            <form action="" id="center-form" method="$_POST">
                <input type="submit" name ="sub">
            </form>

              <?php
              if (isset($_POST['sub']))
              {
                mail('olgaalmaz1@gmail.com','example','olga hello');


              }
             
    
        ?>

            
        </div>




    <footer>
        <div>
        <div class="upperFooter">
            <h3>O Mint Mind</h3>
            <h3>O заказе</h3>
            <p>Наша компания</p>
            <p>Процесс заказа</p>
            <p>Новости</p>
            <p><a href="http://localhost/mintmind/menu.html">Продукты</a></p>
        </div>
        <hr>
        <div class="lowerFooter">
            <div class="socialMediaIcons">
               <img src="sourceImages\VKIcon.png" alt="VKIcon">
            </div>
        </div>
    </div>
    <p id="copyright">© 2023 Mint Mind Coffee Company. All rights reserved.</p>
    </footer>
    <!-- Linking the JavaScript file -->
    <script src="js/js.js"></script>
</body>

</html>