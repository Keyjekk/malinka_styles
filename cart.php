<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>MALINKA bot</title>
  <link href="styles/cart.css" rel="stylesheet">
</head>
<body>
    <div class="header_box">
        <div class="header">
            <div class="desc">
                <p class="cart_name">Корзина</p>
                <div class="cost">
                    <p class="info">к оплате: </p>
                    <p class="price">24 235</p>
                    <p class="vault">р.</p>
                </div>
            </div>
            <button id="btnED" class="to_cards">назад</button>
        </div>
    </div>
    <div class="content">
            <div class="card_box">
                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="img/image.svg" alt="">
                    </div>
                    <div class="card_information">
                        <p class="name">Интерьер</p>
                        <div class="price_box">
                            <p class="price">24 235</p>
                            <p class="vault">р.</p>
                        </div>
                    </div>
                    <button class="remove">
                        <img src="img/remove.svg" alt="">
                    </button>
                </div>
            </div>
    </div>

    <script>

        let x;
        addEventListener('touchstart', e => x = e.changedTouches[0].clientX);
        addEventListener('touchend', e => e.changedTouches[0].clientX - x > 0 && swipeRight());

        function swipeRight() {
            window.location = './index.html';
        };

    </script>

    <script src="https://telegram.org/js/telegram-web-app.js">
        let tg = window.Telegram.WebApp;

        tg.MainButton.text = "Тестовая кнопка"; //изменяем текст кнопки 
        tg.MainButton.textColor = "#F55353"; //изменяем цвет текста кнопки
        tg.MainButton.color = "#143F6B"; //изменяем цвет бэкграунда кнопки
        tg.MainButton.setParams({"color": "#143F6B"}); //так изменяются все параметры 

        let btn = document.getElementById("btnED"); //получаем кнопку активировать/деактивировать
        btn.addEventListener('click', function(){ //вешаем событие на нажатие html-кнопки
	if (tg.MainButton.isVisible){ //если кнопка показана 
		tg.MainButton.hide() //скрываем кнопку 
	}
  else{ //иначе
  	tg.MainButton.show() //показываем 
  }
});
    </script>
</body>
</html>