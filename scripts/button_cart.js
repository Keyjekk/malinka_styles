let tg = window.Telegram.WebApp;

tg.expand();

tg.MainButton.text = "НАЧАТЬ ОПЛАТУ"; //изменяем текст кнопки 
tg.MainButton.textColor = "#FFFFFF"; //изменяем цвет текста кнопки
tg.MainButton.color = "#005DB4"; //изменяем цвет бэкграунда кнопки
tg.MainButton.setParams({"color": "#005DB4"}); //так изменяются все параметры 

let btn = document.getElementById("btnED"); //получаем кнопку активировать/деактивировать

//btn.addEventListener('click', function(){ //вешаем событие на нажатие html-кнопки
if (tg.MainButton.isVisible){ //если кнопка показана 
	tg.MainButton.hide() //скрываем кнопку 
}
else{ //иначе
    tg.MainButton.show() //показываем 
}
//});

Telegram.WebApp.onEvent('mainButtonClicked', function(){
	tg.sendData("Бот и сайт связаны!"); 
});