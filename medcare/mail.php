<?
if( ((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['workshop'])&&$_POST['workshop']!="")
&&(isset($_POST['phone'])&&$_POST['phone']!="")) || ((isset($_POST['email'])&&$_POST['email']!="")) ){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'info@medcare.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта MedCare'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Email: '.$_POST['email'].'</p>                        
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Воркшоп: '.$_POST['workshop'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <medcare.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
} 