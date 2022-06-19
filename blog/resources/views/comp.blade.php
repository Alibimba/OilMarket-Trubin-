<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/glav.css">
</head>
<body>
<div class="menu">
    <div class="menu_block">
        <div class="menu_logo">
            <img id="logo-img" src="./image/logo.png">
        </div>
        <div class="menu_right-side">
            <div class="menu_li"onclick="location.href='/';"> Каталог</div>

            <div class="menu_li " onclick="location.href='/co';"> Контакты</div>
            <div class="menu_li" onclick="location.href='/comp';">О компании</div>
            @auth()

                <script>
                    window.onload = function (){
                        let logoutBTN = document.querySelector('.logout-button');
                        logoutBTN.addEventListener('click', function () {
                            document.forms['logout-form'].submit();
                        });
                    }
                </script>

            @endauth
            @auth()
                <a href="">{{ auth()->user()->name }}</a>
                <a href="#" class="logout-button"> Выход </a>
                <form action="{{ route('logout-form') }}" method="post" name="logout-form">
                @csrf
            @endauth
        </div>
    </div>


</div>
<div class="body2">
<div class="vse">
    <div class="comp">
    <h1>О КОМПАНИИ</h1>
    </div>
    <div class="cet">
        <div class="zaglovok">
            <div class="hr"></div>
            <div class="zaglovok_tochna"><h2 id="fbrs">Сеть центров автомасел «ОЙЛ-МАРКЕТ»</h2></div>
            <div class="hr"></div>
        </div>
        <div class="info_img">
            <div class="img_cet"><img src="./image/img_11.png" id="imagg"></div>
            <div class="info_cet"><p id="p">«ОЙЛ-МАРКЕТ» - это Федеральная сеть профессиональных специализированных автомобильных технических центров единого формата, которая предлагает автовладельцам широкий спектр масел, смазочных материалов, фильтров и расходных материалов для автомобилей, а так же полный спектр услуг по замене масла, техническому обслуживанию и ремонту всех видов и марок автомобилей с высокими стандартами качества.</p></div>
        </div>
    </div>
    <div class="opit">
        <div class="zaglovok2">
            <div class="hr2"></div>
            <div class="zaglovok_tochna2"><h2 id="fbrs">«ОЙЛ-МАРКЕТ» - это многолетний опыт и профессионализм</h2></div>
            <div class="hr2"></div>
        </div>
        <div class="info_img2">
            <div class="img_opit"><img src="./image/img_12.png" id="imagg"></div>
            <div class="info_opit"><p id="p">Первый Центр автомасел «ОЙЛ-МАРКЕТ» был открыт 12 июня 2006 года в столице Республики Башкортостан городе Уфе. На сегодняшний день «ОЙЛ-МАРКЕТ» - это широко известная и популярная Федеральная сеть. Сотни тысяч автовладельцев на протяжении многих лет доверяют нам заботу о своих автомобилях и для нас это наивысшая оценка нашей работы.</p></div>


        </div>
    </div>
    <div class="end"></div>

</div>
</div>
<footer>
    <div class="logo-info-foot">
        <div class="logo-foot"><img id="logo-img" src="./image/logo.png"></div>
        <hr id="hr">
        <div class="info-foot">Крупнейший<br> дистрибьютор автомасел и<br> спецжидкостей</div>
    </div>
    <div class="contact">
        <div class="contact-email">Email: <a href="#">Petya23@mail.ru</a></div>
        <div class="contact-email">Телефон: <a href="#">89637542734</a></div>
        <div class="contact-email">г. Курган, ул. Омская, 145, корп.1</div>
    </div>
    <div class="time"> 16:00 - 16:30</div>

</footer>
</body>
</html>
