let tg = window.Telegram.WebApp;

tg.expand();

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