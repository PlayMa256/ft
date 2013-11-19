<?php

$id_evento = $_GET["id"];

#CONNECT
$con = mysqli_connect("mysql.ft.unicamp.br:3306/","matheus","pmeTDDBCtPzQJXYw","IVtecnologiaemfoco");
if (mysqli_errno($con)){
	echo "<script>alert('Falha ao conectar-se ao servidor');</script>";
}

$EventoQuery =
"SELECT E.*,P.Nome AS Palestrante, P.imagem AS ImgPalestrante FROM tb_eventos E LEFT JOIN tb_palestrantes P ON E.PalestranteId = P.PalestranteId WHERE EventoID = $id_evento";

$evento = mysqli_query($con,$EventoQuery);

$row = mysqli_fetch_assoc($evento);
$data = date_create($row["Data"]);


?>

<div id="lightbox">
	<a href="palestrantes.php?id=<?php echo $row["PalestranteId"]; ?>">
<?php
if ($row["ImgPalestrante"] != "") {
?>

		<img class="imagem" src="./wp-content/themes/Meutema/imagens/palestrantes/<?php echo $row["ImgPalestrante"] ?>" />
<?php
}
?>
		<span class="palestrante"><?php echo $row["Palestrante"] ?></span>
	</a>
	<div class="icone_curso" style="float:right">
			<?php if ($row["Ambiental"]){ ?>
				<img src="./wp-content/themes/Meutema/imagens/icon_Ambiental.png" alt="Ambiental" />
			<?php } ?>
			<?php if ($row["Construcao"]){ ?>
				<img src="./wp-content/themes/Meutema/imagens/icon_Construcao.png" alt="Constru&ccedil;&atilde;o" />
			<?php } ?>
			<?php if ($row["Informatica"]){ ?>
				<img src="./wp-content/themes/Meutema/imagens/icon_Info.png" alt="Inform&aacute;tica" />
			<?php } ?>
			<?php if ($row["Telecom"]){ ?>
				<img src="./wp-content/themes/Meutema/imagens/icon_Telecom.png" alt="Telecomunica&ccedil;&otilde;es" />
			<?php } ?>
	</div>
	<span class="data"><?php echo date_format($data,"d/m H:i") ?></span>
	<span class="tipo"><?php echo $row["Tipo"] ?></span>
	<?php if($row["Local"] != ""){ ?><span class="local">Local: <?php echo $row["Local"] ?></span><?php } ?>
	<span class="desc"><?php echo $row["Descricao"] ?></span>
</div>
<script>

$j(document).ready(function(){
	diminuirFonte();
});
</script>