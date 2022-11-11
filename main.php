<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=divice-width, intial-scale=1.0">
	<title>PHP Practice </title>
	<link rel="stylesheet" href="style.css /">
</head>
<body>

	<div class="flex-container">

		<div class="header">
				<?php include 'logo.inc.php' ?>
				<?php include 'menu.inc.php' ?>
		</div>

		<div class="about_me">

			<h1>  <php  echo $p  ?> </h1>

				<div class="data">
					<div> class="myImg"
						<?php
						echo "<img src="/img/php.jpg">';
						?>
					</div>

					<div class="fullname">
						<p> Меня зовут
						<?php echo 'name', ' ', $surname . '<br>';
							echo 'город', ' ', $city; ?>
						</p>

						<p> Мне
						<?php echo $age;  ?>
						лет </p>
						<p> Мы научились создавать переменные </p>
						<p> Изучили простые операции с ними </p>
					</div>
				</div>

				<div class="knowledge">

						<?php include 'knowledge.inc.php'; ?>
						<?php
						echo $a, ' ', $b, ' ', $c;
						?> <br>

						<?php
							$a = 10
							$b = 20;
							$c = $a +$b;
							echo $c;
						?>   <br>
						<?php
							echo $d;
						?>
			
			</div>

			<div class="article"
				<p class="text">
					Работаю на двух местах одновременно можно сказать. Основная работа-это профессиональный банщик в русско-сибирской бане.
					Вторая, как подработка-это работа в такси. Cосед посоветовал мне пойти в IT так, как он знал, что я немного разбераюсь и люблю это дело.
					Тем более появилась такая возможность, как обучится бесплтно через Центр Занятости(Работа всем).
					О том, что у меня 2 детей и высшее образование-не буду говорить. Чёт много букв...?
					</p>
				</div>
			</div>
				<?php include 'footer.inc.php' ?>
		
		</div>



</body>
</html>
