
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
		</div>

	<br>
	<br>

	<!--Conteúdo da página-->
	<div class="borda_conteúdo">
		<div class="produtos" style="margin-left: 170px; margin-top: 120px; width: 500px; height: 500px;">
			<center>
				<a href="camisa1.php" style="text-decoration: none; font-family: arial; font-size: 20px; color: black;">
					<img src="Roupas_camisas1.jpg" style="width: 250px; height: 250px;">
				</a>
			</center>
		</div>

	<p style="color: black; font-family: arial; font-size: 70px; margin-left: 800px;">
		Camisa <br>
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

	<?php 

		if (isset($_GET['comprar'])) {
			$produto = 'Camisa';
		}

	 ?>

	<br>
	<br>
	<br>

		<p class="formatação_tamanho">Tamanho</p>
		<p class="formatação_quantidade">Quantidade</p>
					
		<br>

		<div class="tamanho_quantidade">
			<div class="P">
				<center>
					<a name="Tamanho P">P </a>
				</center>
		</div>

		<div class="PP">
			<center>
				<option name="Tamanho PP">PP</option>
			</center>
		</div>

		<div class="M">
			<center>
				<option name="Tamanho M">M </option>
			</center>
		</div>

		<div class="G">
			<center>
				<option name="Tamanho G">G </option>
			</center>
		</div>

		<div class="GG">
			<center>
				<option name="Tamanho GG">GG </option>
			</center>
		</div>

		<div class="tamanho_quantidade">
			<input class="input_quantidade" type="number" name="quantidade">
		</div>

		<br>
		<br>
		<br>

			<button class="escolher">Escolher</button>
	<div>

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