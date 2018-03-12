<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Description">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Idaproject - test</title>
<link rel="shortcut icon" href="favicon.png" type="image/png">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="main">
	<div class="container">
		<div class="menu">
			<ul>
				<li data-id="1">Личный кабинет</li>
				<li data-id="2" class="active">Платежи</li>
				<li data-id="3">История платежей</li>
				<li data-id="4">Настройки</li>
				<li data-id="5">Выйти</li>
			</ul>
		</div><!-- menu -->
		<div class="content">
			<div class="tab_container" data-id="1"></div>
			<div class="tab_container active" data-id="2">
				<div class="top_content">
					<p>Информация по оплате:</p>
					<div class="table">
						<div class="row">
							<div class="item"><p>Номер счета:</p></div>
							<div class="item"><span class="val">87123658716587</span></div>
						</div>
						<div class="row">
							<div class="item"><p>Сумма платежа:</p></div>
							<div class="item"><span class="val">100 руб.</span></div>
						</div>
					</div><!-- table -->
					<h2>Данные банковской карты</h2>
					<form method="post" action="send_msg.php" class="card_box">
						<div class="card card_left">
							<p>Номер карты</p>
							<div class="card_num">
								<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4" minlength="4" class="card_num_input" required>
								<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4" minlength="4" class="card_num_input" required>
								<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4" minlength="4" class="card_num_input" required>
								<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4" minlength="4" class="card_num_input" required>
								<input type="hidden" name="full_card_num">
							</div>
							<p>Срок действия</p>
							<div class="card_date">
								<div class="select_box">
									<select name="card_month" required>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<div class="select_box">
									<select name="card_year" required>
										<option value="<?php echo (date('Y')); ?>"><?php echo (date('Y')); ?></option>
										<option value="<?php echo (date('Y')+1); ?>"><?php echo (date('Y')+1); ?></option>
										<option value="<?php echo (date('Y')+2); ?>"><?php echo (date('Y')+2); ?></option>
										<option value="<?php echo (date('Y')+3); ?>"><?php echo (date('Y')+3); ?></option>
										<option value="<?php echo (date('Y')+4); ?>"><?php echo (date('Y')+4); ?></option>
										<option value="<?php echo (date('Y')+5); ?>"><?php echo (date('Y')+5); ?></option>
										<option value="<?php echo (date('Y')+6); ?>"><?php echo (date('Y')+6); ?></option>
										<option value="<?php echo (date('Y')+7); ?>"><?php echo (date('Y')+7); ?></option>
									</select>
								</div>
							</div><!-- card_date -->
							<div class="card_user_name">
								<input type="text" minlength="4" name="card_user_name" onkeypress="return textonly(event);" placeholder="Держатель карты" required>
								<script>
									function textonly(e){
									var code;
									if (!e) var e = window.event;
									if (e.keyCode) code = e.keyCode;
									else if (e.which) code = e.which;
										var character = String.fromCharCode(code);
									    var AllowRegex  = /^[\ba-zA-Z\s-]$/;
									    if (AllowRegex.test(character)) return true;     
									    return false; 
									}
								</script>
							</div>
						</div><!-- card left-->
						<div class="card card_right">
							<div class="cvv">
								<p>Код CVV2 / CVC2</p>
								<div class="question_box">
									<input type="text" name="user_cvv" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="3" maxlength="3" required>
									<div class="question">
										<span>?</span>
										<div class="answer">CVV-код – это трехзначный код для проверки подлинности карты VISA при оплате через интернет</div>
									</div>
								</div>
							</div>
						</div>
						<button class="send_btn">Оплатить</button>
					</form>
				</div><!-- top_content -->
				<div class="descr">
					<p>Исходя из астатической системы координат Булгакова, соединение стабильно. Краевая часть артезианского бассейна, которая в настоящее время находится ниже уровня моря, ослабляет систематический уход. Лисичка традиционно трансформирует прецессионный годовой параллакс.</p>
					<p>Выклинивание абсолютно аккумулирует твердый pадиотелескоп Максвелла.</p>
					<p>Алмаз слагает горст. Делювий длительно колеблет лазерный подвижный объект.</p>
					<p>Устойчивость, например, параллельна. Аргумент перигелия определяет боксит. Проекция вертикально дает уходящий диабаз. Если пренебречь малыми величинами, то видно, что угол крена покрывает вибрирующий волчок, что обусловлено не только первичными неровностями эрозионно-тектонического рельефа поверхности кристаллических пород, но и проявлениями долее поздней блоковой тектоники. Засветка неба заставляет иначе взглянуть на то, что такое волчок.</p>
				</div><!-- descr -->
			</div><!-- tab_container 2 -->
			<div class="tab_container" data-id="3"></div>
			<div class="tab_container" data-id="4"></div>
			<div class="tab_container" data-id="5"></div>
		</div>
		<div class="clear"></div>
	</div><!-- container -->
</section><!-- main -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>