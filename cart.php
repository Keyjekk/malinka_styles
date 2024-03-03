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
            <button class="to_cards">назад</button>
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
            window.location = './index.php';
        };

    </script>
</body>
</html>