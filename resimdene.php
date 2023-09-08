<?php

		require_once "baglan.php";
			$icerik=$conn->prepare("SELECT * FROM mainbase WHERE sf_id=:sf_id");
			$icerik->execute(array('sf_id' => $_GET['sf_id']));
			$icerikgetir=$icerik->fetch(MYSQLI_ASSOC);
			if(!isset($_COOKIE[$icerikgetir['sf_id']])){
				$up=$conn->prepare("UPDATE mainbase SET hit=hit+1 WHERE  sf_id=:sf_id ");
				$hit=$up->execute(array("sf_id"=>$icerikgetir['sf_id']));
				if ($hit) {
					$url = 'http://localhost/hit/'.$icerikgetir['sf_id'];
					setcookie($icerikgetir['sf_id'],'okundu',time()+(60*60*24*30), $url);
				}
			}

			?>
<!DOCTYPE html>
<html>
<head>
	<title>Bulutasarim.com</title>
	<style type="text/css">
	body{
		margin: 0 auto;
		padding: 0;
	}
	nav{
		height: 50px;
		background-color: red;
		margin-bottom: 25px;
	}
	section{
		margin: 0 auto;
		width: auto;
		text-align: center;
	}
	.sub{
		
		width: 25%;
		text-align: center;
		margin: 0 auto;
		margin-bottom: 15px;
		position: relative;

	}
	.sub a{
		text-decoration: none;
		font-size: 20px;
		font-weight: 600;
		font-family:sans-serif;
		color:#421916;
	}
	.metin{
		max-width: 900px;
		text-align: center;
		margin: 0 auto;
	}
	.kutu{
		margin-bottom: 25px

	}
	.hit{
		background: gray;
		color: white;
		padding: 3px;
		font-family: sans-serif;
	}

	nav .geri{
		background-color: white;
		width: fit-content;
		padding: 16px;
	}
	nav .geri a{
		font-family: sans-serif;
		font-weight: 700;
		text-decoration: none;
		color: cornflowerblue;
	}
</style>



</head>
<body>
	<nav>
		<div class="geri">
			<a href="./"> GERİ</a>
		</div>
	</nav>
	<section>
		<div>
			
			<div class="kutu">
				<img src="<?php echo $icerikgetir['img'];?>" width="25%">
				<div class="sub">
					<a href="<?php echo $icerikgetir['sf_id'];?>"><?php echo $icerikgetir['baslik'];?></a>
				</div>
				<p class="metin"><?php echo $icerikgetir['text'];?></p>
			</div>
			<a href="javascript:void(0)" class="likes">Okuma: <?php echo $icerikgetir['hit'];?></a>
			
			</div>

		</section>







	</body>
	</html>