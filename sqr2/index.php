<?php
include("/include/result.php");
session_start();
if(!isset($_SESSION['true'])) $true=0;
else $true=$_SESSION['true'];
$flag="Altay{ti_daje_bolee_krut_chem_ya_dumal}";
?>

<html>
	<title> Твоя любимая КАПЧА </title>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="title" align=center> СНОВА ДАРОВА, СКАЖИ КА МНЕ ТЕПЕРЬ ЦВЕТ В КВАДРАТЕ, КОТОРОГО БОЛЬШЕ ВСЕГО,АГА </div>
		<?php
		$ni=rand(0,199);
			echo '<div class="sqr" style="z-index:100;background-image:url(include/'.$ni.'.bmp)"></div>';	
		?>
		<form method="post">
			<input hidden name="color" value="green">
			<input type="submit" value="Зеленый" style="background: #00FF00;">
		</form>
		<form method="post">
			<input hidden name="color" value="red" >
			<input type="submit" value="Красный" style="background: #FF0000;">
		</form>
		<form method="post">
			<input hidden name="color" value="blue">
			<input type="submit" value="Синий" style="background: #0000FF;">
		</form>
		<div class="message" align=center>
			<?php
			if(isset($_SESSION['time']))
			{
				$timeout=time()-$_SESSION['time'];
				$_SESSION['time']=time();
			}
			else
			{
				$timeout=0;
				$_SESSION['time']=time();
			}
			if(isset($_POST['color']) && $timeout<300 && isset($_SESSION['success']))
			{
				$successcolor=$_SESSION['success'];
				$usercolor=$_POST['color'];				
				if($successcolor==$usercolor)
				{
					echo "Ты либо хороший робот, либо самый быстрый на диком западе,верно!";
					$true++;
				}
				else
				{
					echo "К сожалению, друг, ты не прав";
					$true=0;
				}
				if($true>=150) 
				{
					echo "<br>Мои поздравления! Я тебе верю!<br>".$flag;
				}
			}
			else
			{
				$true=0;
				echo "Либо ты не прав, либо слишком slow, либо еще не начал. Пробуй;)";
			}

			@$_SESSION['success']=$resmas[$ni];
			$_SESSION['true']=$true;
			?>
		</div>
		<div class="footer">
			Created by: "roja" - Obi-Wan Kenobi; "kvadrati" - Likc
		</div>
	</body>
</html>
