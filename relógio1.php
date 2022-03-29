<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilização.css">
	<title>Página inicial</title>
</head>
<body>

	<!-- Parte superior da página-->
	<header style="margin-top: 23px; margin-left: 25px;" >
		<tr>
			<td>
				<a class="nome_site" href="Página0.html">CCLAUS</a>
			</td>
			<td>
				<input class="buscador" type="text" name="buscador" placeholder="   Buscar ...">   
			</td>
			<td>
				<img class="localização" src="Localização.png">PORTO ALEGRE, RS
			</td>
		</tr>
	</header>

	<br>
	<br>

	<!--Menu-->
		<div class="borda" >		
			<a class="roupas" href="Página1.php">ROUPAS<img class="setinha" src="Setinha.png"></a>
			<a class="acessórios" href="Página2.php">ACESSÓRIOS<img class="setinha" src="Setinha.png"></a>
			<a class="calçados" href="Página3.php">CALÇADOS<img class="setinha" src="Setinha.png"></a>
			<a class="bolsas" href="Página4.php">BOLSAS<img class="setinha" src="Setinha.png"></a>
			<a href="Página5.php" class="carrinho" src="Carrinho.png"><img  style="height: 30px; width: 30px;" src="Carrinho.png"></a>
		</div>

	<br>
	<br>

	<!--Conteúdo da página-->

	<div class="borda_conteúdo">
		<div class="produtos" style="margin-left: 170px; margin-top: 120px; width: 500px; height: 500px;">
			<center>
				<a href="camisa1.php" style="text-decoration: none; font-family: arial; font-size: 20px; color: black;">
					<img src="Acessórios_relógios1.webp" style="width: 250px; height: 250px;">
				</a>
			</center>
		</div>

	<p style="color: black; font-family: arial; font-size: 70px; margin-left: 800px;">
		Relógio all black <br>
		R$00,00
	</p>

	<p class="cartão"><img src="Cartão.png" style="height: 55px; width: 55px; ">   
		Até 12x no cartão de R$00,00 por mês
	</p>

	<p class="entrega"><img src="Caminhãozinho.png" style="height: 55px; width: 55px; ">  
		Entrega grátis!
	</p>

	<br>
	<br>
	<br>

	<a class="botão_comprar" name="comprar" href="Compra.php" >COMPRAR</a>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<!--Parte inferior da página-->
	<footer>
		<div class="fim" style="margin-left: -43px; margin-right: -163px;">
			<a href="https://www.facebook.com/" class="facebook"><img src="Facebook.new.png" style="width: 30px; height: 30px;"></a>
			<a href="https://www.instagram.com/" class="instagram"><img src="Instagram.new.png" style="width: 30px; height: 30px;"></a>
			<a href="https://twitter.com/" class="twitter"><img src="Twitter.new.png" style="width: 30px; height: 30px30px;"></a>
			<a href="https://www.whatsapp.com/" class="whatsapp"><img src="Whatsapp.new.png" style="width: 30px; height: 30px;"></a>
			<a href="https://www.youtube.com/" class="youtube"><img src="Youtube.new.png" style="width: 30px; height: 30px;"></a>
		</div>

	<br>
	<br>

		<center>
			<h4 style= "font-family: times new roman; color: grey">DESENVOLVIDO POR LUCCAS TORRES</h4>
		</center>
	</footer>
</body>
</html>