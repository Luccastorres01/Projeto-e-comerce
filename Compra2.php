<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilização.css">
	<title>www.CCLAUS.com.br/Página inicial</title>
</head>
<body>

	<!-- Parte superior da página-->
	<header style="margin-top: 23px; margin-left: 35px;" >
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
			<a class="roupas" href="Página1.html">ROUPAS<img class="setinha" src="Setinha.png"></a>
			<a class="acessórios" href="Página2.html">ACESSÓRIOS<img class="setinha" src="Setinha.png"></a>
			<a class="calçados" href="Página3.html">CALÇADOS<img class="setinha" src="Setinha.png"></a>
			<a class="bolsas" href="Página4.html">BOLSAS<img class="setinha" src="Setinha.png"></a>
		</div>

	<br>
	<br>

	<!--Conteúdo da página-->
	<div class="borda_compra1">
		<div class="borda_compra2">
			<center>
				<form method="_GET">
					<tr>
						<td>
							<h1 style="font-family: arial;">Forma de pagamento: </h1>
						</td>
						<td>
							<p style="font-family: arial;">
								<select class="input" name="forma_pagamento">
									<option style="font-family: arial;" value="Cartão">Cartão</option>
									<option style="font-family: arial;" value="Boleto">Boleto</option>
								</select>
							</p>
						</td>
						<td>
							<p style="font-family: arial;"><b>CPF do comprador: </b><input type="number" name="cpf_comprador" class="input"></p>
						</td>
						<td>
							<p style="font-family: arial;"><b>RG do comprador: </b><input type="number" name="rg_comprador" class="input"></p>
						</td>
						<td>
								<button class="botões_de_compra" name="cadastrar" style="font-family: arial; color: white; text-decoration: none;" class="botões_de_compra">Cadastrar</button>

								<?php
									if (isset($_GET['cadastrar'])) {
										if (isset($_GET['forma_pagamento']) && ($_GET['forma_pagamento']) && ($_GET['rg_comprador']) && ($_GET['cpf_comprador'])){
												if (isset($_GET['cadastrar'])) {
												echo '<p style="color: green; font-family: arial;"> Cadastrado com sucesso! <p>';
											}
										}
										else {
										echo '<p style="color: red; font-family: arial;"> Você não preencheu todos os campos necessários <p>';
										}
									}
								 ?>
						</td>
					</tr>
				</form>
			</center>
			<a class="link_continuar" name="continuar" href="Compra4.php" style="font-family: arial; color: white; text-decoration: none;">Finalizar =></a>

		</div>
	</div>

	<br>
	<br>

	<?php 
		if (isset($_GET['forma_pagamento'])) {
			$forma_pagamento = $_GET['forma_pagamento'];
			$cpf_comprador = $_GET['cpf_comprador'];
			$rg_comprador = $_GET['rg_comprador'];
		}

		include_once('Conexão.php');
			$dados_recebidos2 = "INSERT INTO pagamento(forma, cpf_comprador, rg_comprador) VALUES ($forma_pagamento, $cpf_comprador, $rg_comprador)"; 

			$dado_banco2 = mysqli_query ($conecao, $dados_recebidos2);
	 ?>

<!--Parte inferior da página-->
	<footer>
		<div class="fim">
			<a href="https://www.facebook.com/" class="facebook"><img src="Facebook.new.png" style="width: 30px; height: 30px;"></a>
			<a href="https://www.instagram.com/" class="instagram"><img src="Instagram.new.png" style="width: 30px; height: 30px;"></a>
			<a href="https://twitter.com/" class="twitter"><img src="Twitter.new.png" style="width: 30px; height: 30px30px;"></a>
			<a href="https://www.whatsapp.com/" class="whatsapp"><img src="Whatsapp.new.png" style="width: 30px; height: 30px;"></a>
			<a href="https://www.youtube.com/" class="youtube"><img src="Youtube.new.png" style="width: 30px; height: 30px;"></a>
		</div>

	<br>
	<br>

		<center>
			<h4 style= "font-family: times new roman; color: grey;">DESENVOLVIDO POR LUCCAS TORRES</h4>
		</center>
	</footer>
</body>
</html>