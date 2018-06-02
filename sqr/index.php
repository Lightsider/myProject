<?php
session_start();
if(!isset($_SESSION['true'])) $true=0;
else $true=$_SESSION['true'];
$flag="altayCTF{ti_ne_daltonik_ti_krut}";
$color=array("#00FF00","#FF0000","#0000FF","#FFFF00");//Зеленый,красный,синий,желтый
$n=3;
$zindex=array();
$successcolor=0;
for($i=0;$i<$n;$i++)
{
	$zindex[$i]=rand(0,100);
}
?>

<html>
	<title> Твоя любимая КАПЧА </title>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="May" href="/the_Force_be_with_You">
	</head>
	<body>
		<div class="title" align=center> ДАРОВА, СКАЖИ МНЕ ЦВЕТ КВАДРАТА, КОТОРЫЙ ЛЕЖИТ ПОВЕРХ ВСЕХ,АГА </div>
		<?php
		for($i=0;$i<$n;$i++) 
		{
			$indcolor[$i]=$color[rand(0,3)];
			echo '<div class="sqr" style="background-color:'.$indcolor[$i].';z-index:'.$zindex[$i].';top:'.rand(0,75).'%;left:'. rand(0,75).'%"></div>';
		}
		?>
		<form method="post">
			<input hidden name="color" value="#00FF00">
			<input type="submit" value="Зеленый" style="background: #00FF00;">
		</form>
		<form method="post" style="left: 25%">
			<input hidden name="color" value="#FF0000" >
			<input type="submit" value="Красный" style="background: #FF0000;">
		</form>
		<form method="post" style="left: 50%">
			<input hidden name="color" value="#0000FF">
			<input type="submit" value="Синий" style="background: #0000FF;">
		</form>
		<form method="post" style="left: 75%">
			<input hidden name="color" value="#FFFF00">
			<input type="submit" value="Желтый" style="background: #FFFF00;">
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
			if(isset($_POST['color']) && $timeout<3 && isset($_SESSION['success']))
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

			$maxz=max($zindex);
			foreach($zindex as $key => $value)
			{
				if($value==$maxz)
				{
					$SI=$key;
					break;
				}
			}
			$_SESSION['success']=$indcolor[$SI];
			$_SESSION['true']=$true;
			?>
		</div>
	</body>
</html>
