<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacnte</title>
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




<div class="obsh">
    <div class="lenta"><img src="./image/img_19.png" height="200" width="2000"></div>
    <div class="cheliki">
        <div class="chel">
            <div class="chel_img"><img id="tre" src="./image/img_6.png" height="300" width="200"> </div>
            <div class="chel_name">Курбатова Дарина Алексеевна</div>
            <div class="chel_dol">Офис-менеджер</div>
            <div class="chel_nomber"href="#">+7 (3522) 63-05-25</div>
        </div>
        <div class="chel">
            <div class="chel_img"><img  id="tre" src="./image/img_7.png" height="300" width="200"></div>
            <div class="chel_name">Семенов Дмитрий Алексеевич</div>
            <div class="chel_dol">Менеджер по продажам</div>
            <div class="chel_nomber"href="#">+7 (919) 560-54-64</div>
        </div>
        <div class="chel">
            <div class="chel_img"><img id="tre" src="./image/img_8.png" height="300" width="200"></div>
            <div class="chel_name">Кстенин Александр Васильевич</div>
            <div class="chel_dol">Бренд-менеджер</div>
            <div class="chel_nomber"href="#">+7 (3522) 63-05-25</div>
        </div>
        <div class="chel">
            <div class="chel_img"><img id="tre" src="./image/img_9.png" height="300" width="200"></div>
            <div class="chel_name">Мезенцев Николай Владимирович</div>
            <div class="chel_dol">Офис-менеджер</div>
            <div class="chel_nomber"href="#">+7 (3522) 63-05-25</div>
        </div>
        <div class="chel">
            <div class="chel_img"><img id="tre" src="./image/img_10.png" height="300" width="200"></div>
            <div class="chel_name">Фёдор Никитченко</div>
            <div class="chel_dol">Менеджер по продажам</div>
            <div class="chel_nomber" href="#">+7 (908) 832-06-40</div>
        </div>
    </div>
    <div class="lenta lenta_bottom"><img src="./image/img_19.png" height="200" width="2000"></div>
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
