
<?php

#CONNECT
$con = mysqli_connect("mysql.ft.unicamp.br:3306/","matheus","pmeTDDBCtPzQJXYw","IVtecnologiaemfoco");
if (mysqli_errno($con)){
	echo "<script>alert('Falha ao conectar-se ao servidor');</script>";
}
$tipo = "";
if(isset($_GET["tipo"])) $tipo = $_GET["tipo"];

$programacaoQuery = 
"SELECT E.*, 
       P.Nome AS Palestrante 
FROM   tb_eventos E 
       LEFT JOIN tb_palestrantes P 
              ON E.PalestranteId = P.PalestranteId ";

if((isset($_GET["tipo"])) && ($_GET["tipo"] != 'all')) 
	$programacaoQuery .= "
WHERE 	Tipo LIKE '%" . $_GET["tipo"] . "%' 
";

$programacaoQuery .=
"ORDER BY E.Data ASC, 
          E.Especial ASC, 
          E.Titulo ASC";


$programacao = mysqli_query($con,$programacaoQuery);
if (mysqli_num_rows($programacao) == 0){
	echo '<span class="aviso">N&atildeo h&aacute; eventos</span>';
}
$ultimaData = date_create();
$ultimaHora = date_create();
date_date_set($ultimaData,1900,01,01);
date_time_set($ultimaData,0,0,0);

date_time_set($ultimaHora,0,0,0);
$primeiro = true;

while($row = mysqli_fetch_array($programacao)){
	$data = date_create($row["Data"]);

	if (date_format($data,"d/m") != date_format($ultimaData,"d/m")){
		$ultimaData = $data;
		date_time_set($ultimaHora,0,0,0);
		if (!$primeiro){
			$primeiro = true;
?>
							</div><!-- evento_dados -->
						</div><!-- evento -->
					</div><!-- agenda_dia -->
<?php
		}
?>
					<div class="agenda_dia">
						<span class="evento_data">
							<b>Dia <?php echo date_format($data,"d") ?></b> de 
<?php
		switch (date_format($data,"m")) {
			case "01": echo "Janeiro"; break;
			case "02": echo "Fevereiro"; break;
			case "03": echo "Mar&ccedil;o"; break;
			case "04": echo "Abril"; break;
			case "05": echo "Maio"; break;
			case "06": echo "Junho"; break;
			case "07": echo "Julho"; break;
			case "08": echo "Agosto"; break;
			case "09": echo "Setembro"; break;
			case "10": echo "Outubro"; break;
			case "11": echo "Novembro"; break;
			case "12": echo "Dezembro"; break;
		}	#Switch
?>
						</span>
<?php
	}	#if (data > ultima data)

	if ($row["Especial"]){
		if (!$primeiro){
?>
							</div><!-- evento_dados -->
						</div><!-- evento -->
<?php
		} else { $primeiro = false; }
?>
						<div class="evento evento_destaque">
							<div class="evento_hora"><?php echo date_format($data,"H:i") ?></div>
								<div class="evento_dados">
<?php
	}	#Especial
	else if ((date_format($data,"H")*60 + date_format($data,"i")) > (date_format($ultimaHora,"H")*60 + date_format($ultimaHora,"i"))){
		$ultimaHora = $data;
		if (!$primeiro){
?>
							</div><!-- evento_dados -->
						</div><!-- evento -->
<?php
		} else { $primeiro = false; }
?>
						<div class="evento">
							<div class="evento_hora"><?php echo date_format($data,"H:i") ?></div>
								<div class="evento_dados">
<?php
	} #If data > ultimaHora

	## PROGRAMACAO QUANTIDADE DE AREAS ##
	$posTotal = 0;
	if ($row["Ambiental"])
		$posTotal++;
	if ($row["Construcao"])
		$posTotal++;
	if ($row["Informatica"])
		$posTotal++;
	if ($row["Telecom"])
		$posTotal++;
?>
									<div class="icone_curso" style="width: <?php echo 115 - (((105/$posTotal)/2 - 10)*(($posTotal+1) * 0.5)); ?>px; padding-left:<?php echo (((105/$posTotal)/2 - 10)*(($posTotal+1) * 0.5)) ?>px">
										<?php if ($row["Ambiental"]){ ?>
											<img src="./wp-content/themes/Meutema/imagens/icon_Ambiental.png" style="margin-right: <?php echo ((100/$posTotal)/2 - 10); ?>px" alt="Ambiental" />
										<?php } ?>
										<?php if ($row["Construcao"]){ ?>
											<img src="./wp-content/themes/Meutema/imagens/icon_Construcao.png" style="margin-right: <?php echo ((100/$posTotal)/2 - 10); ?>px" alt="Constru&ccedil;&atilde;o" />
										<?php } ?>
										<?php if ($row["Informatica"]){ ?>
											<img src="./wp-content/themes/Meutema/imagens/icon_Info.png" style="margin-right: <?php echo ((100/$posTotal)/2 - 10); ?>px" alt="Inform&aacute;tica" />
										<?php } ?>
										<?php if ($row["Telecom"]){ ?>
											<img src="./wp-content/themes/Meutema/imagens/icon_Telecom.png" style="margin-right: <?php echo ((100/$posTotal)/2 - 10); ?>px" alt="Telecomunica&ccedil;&otilde;es" />
										<?php } ?>
									</div>
									<div class="evento_descricao"  onclick="Modalbox.show('./wp-content/themes/Meutema/resources/template.php?id=<?php echo $row["EventoId"] ?>',{title:'<?php echo $row["Titulo"] ?>'});aux();">
										
<?php 
	echo ($row["Tipo"] == "Minicurso" && $tipo != "minicurso") ? "Mini-curso: " : "";
	echo ($row["Tipo"] == "Workshop" && $tipo != "workshop") ? "Workshop: " : "";
	echo $row["Titulo"];
	if ($row["Palestrante"] != ""){
		if ($row["Tipo"] == "Palestra"){
			echo " | Palestrante: ";
		}
		else{
			echo " | Instrutor(a): ";
		}
		echo $row["Palestrante"];
	}
?>
									</div><!--evento_descricao-->
<?php
}	#while ($row)
?>
						</div><!-- evento_dados -->
					</div><!-- evento -->
				</div><!-- agenda_dia -->

<?php

mysqli_close($con);
?>
<script type="text/javascript">
$j(".icone_curso img").mouseover(function() {
	$j("#infocurso").html($j(this).attr("alt"));
	$j("#infocurso").animate({
		bottom : 0
	},"fast");
});
$j(".icone_curso img").mouseout(function() {
	
	$j("#infocurso").animate({
		bottom : -50
	},"fast");
});

</script>