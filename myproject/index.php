<?php
session_start();
echo session_id() . '<br>';
if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

?>

<?php
setcookie('num', 10, time() + 8);
if (isset($_COOKIE['num'])) {
    echo 'Cookie is set';
} else {
    echo 'Cookie is not set';

}

?>


<html>
<head>
    <title>Pitcher coffee</title>
    <meta charset="utf-8"/>
    <link rel="icon" href="mypages/icons/coffee-bean_icon-icons.com_61176.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="mypages/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<header id="index">
    <div class="logo">
        <img class="logo-img" src="mypages/pictures/download.png">
    </div>
    <div>
        <nav>
            <i class="fa fa-telegram"></i>
            <i id="phone2" class="fa fa-phone"></i>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars"></i>
            </label>
            <ul>
                <li><a class="active1" href="?page=index">Про нас</a></li>
                <li><a href="?page=menu">Меню</a></li>
                <li><a href="?page=contacts">Контакти</a></li>
                <li><a href="#"> <img src="mypages/icons/Vector (2).png">-bot</a></li>
            </ul>
            <div class="phone"><i class="fa fa-phone"></i></div>
        </nav>
    </div>
</header>

<h1>You have visited page: <?php echo $_SESSION['counter'] ?> times </h1>
<?php
$p = $_GET['page'];
$page_file = $p . '.html';

if (file_exists('mypages/' . $page_file)) {
    require 'mypages/' . $page_file;
}
?>

<footer>
    <div class="address">
        <div>
            <h2>Київ, вул. Борщагівська 150</h2>
            <h3>щодня 9:00-21:00</h3>
        </div>

        <div>
            <h2>Київ, вул. Борщагівська 195/43</h2>
            <h3>пн-пт 7:30-21:00</h3>
            <h3>сб-вс 9:00-21:00</h3>
        </div>

        <div>
            <h2>Київ, вул. Гарматна 57</h2>
            <h3>пн-пт 9:00-22:00</h3>
            <h3>щодня 10:00-22:00</h3>
        </div>
    </div>
    <div class="social-media"><a href="#"><img src="mypages/icons/Vector (2).png"></a>
        <a href="#"> <img src="mypages/icons/Vector (1).png"></a>
        <a href="#"> <img src="mypages/icons/Vector (3).png"></a>
    </div>

</footer>
<h6 class="copyright">УСІ ПРАВА ЗАХИЩЕНІ &copy; 2021 Saharok</h6>

</body>

</html>
