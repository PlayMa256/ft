<?php
$id_palestrante = 0;
if (isset($_GET["id"])) $id_palestrante = $_GET["id"];

#CONNECT
$con = mysqli_connect("mysql.ft.unicamp.br:3306/","matheus","pmeTDDBCtPzQJXYw","IVtecnologiaemfoco");
if (mysqli_errno($con)){
	echo "<script>alert('Falha ao conectar-se ao servidor');</script>";
}

?>

<html>
	<head>
		<title>Palestrantes</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link href="programacao.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				<?php
				if ($id_palestrante != 0){
				?>
					$("#palestrante_<?php echo $id_palestrante ?>").next("li").children(".bio_palestrante").css("display","block");
					$("html, body").animate({
						scrollTop: $("#palestrante_<?php echo $id_palestrante ?>").offset().top
					});
				<?php
				}
				?>
				$(".nome_palestrante").click(function() {
					$(this).next(".bio_palestrante").slideToggle();
				});
			});
		</script>
	</head>
	<body>
		<div id="box">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="./wp-content/themes/Meutema/imagens/logo.png" id="toplogo" /></a>
				</div><!--logo-->

				<div id="menu" class="menu">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="programacao.php">PROGRAMA&Ccedil;&Atilde;O</a></li>
						<li><a href="palestrantes.php">PALESTRANTES</a></li>
					</ul>
				</div><!--menu-->
			</div><!--header-->

			<div id="content" class="palestrantes">
				<div id="palestrantes">
					<span id="Titulo">Palestrantes</span>
					<ul>
	<?php
		$palestrantesQuery = "SELECT * FROM tb_palestrantes P ORDER BY Nome ASC";
		$palestrantes = mysqli_query($con,$palestrantesQuery);
		while($row = mysqli_fetch_array($palestrantes)){
	?>
						<a id="palestrante_<?php echo $row["PalestranteId"] ?>"></a>
							<li class="palestrante" value="<?php echo $row["PalestranteId"] ?>">
								<div class="nome_palestrante"><?php echo $row["Nome"] ?></div>

								<div class="bio_palestrante">
	<?php
		if ($row["Imagem"] != ""){
	?>
									<img src="./wp-content/themes/Meutema/imagens/palestrantes/<?php echo $row["Imagem"] ?>" class="img_palestrante" />
		<?php
		}
		if ($row["CV"] == "") echo "<span>Curriculo n&atilde;o cadastrado.</span>";
		else {
		?>
									<span><?php echo $row["CV"] ?></span>
		<?php } ?>
								</div>
							</li>
	<?php
		}
	?>
					</ul>
				</div><!--palestrantes-->
			</div><!--content-->
		</div><!--box-->
	</body>
</html>