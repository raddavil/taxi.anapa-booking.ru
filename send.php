<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ваше сообщение успешно отправлено</title>
	<link rel="stylesheet" href="css/stylesend.css">
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a6d7718517.js"></script>
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<script src="js/buttontop.js"></script>
</head>
<body>
	<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
	
 if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['email']) and !empty($_POST['otkuda']) and !empty($_POST['kuda']) and !empty($_POST['data'])){
        $name = trim(strip_tags($_POST['name']));
        $phone = trim(strip_tags($_POST['phone']));
        $otkuda = trim(strip_tags($_POST['otkuda']));
        $kuda = trim(strip_tags($_POST['kuda']));
        $data = trim(strip_tags($_POST['data']));

	mail('raddavil@gmail.com', 'Заявка на трансфер', 
		'Вам написал: '.$name.'
		<br />Его номер: '.$phone.'
		<br />Его почта: '.$email.'
		<br />Откуда забрать: '.$otkuda.'
		<br />Куда привезти '.$kuda.'
		<br />Когда встретить: '.$data,
		"Content-type:text/html;charset=UTF-8");
	echo 
	"<h1>Ваша заявка успешно отправлена!</h1>
	<p>Наш диспетчер свяжется с Вами в ближайшее время</p>
	<p>Через 5 секунд Вы будете перемещены на главную страницу</p>
	$back";
	exit('<meta http-equiv="refresh" content="7; url=index.html" />');
 }
    else {
        echo "Для отправки сообщения заполните все поля! $back";
        exit('<meta http-equiv="refresh" content="5; url=index.html" />');
    }


	?>

</body>
</html>