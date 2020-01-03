<?php


if(isset($_POST["num"])){

	$nummers = preg_split('/[\s,]+/', $_POST["num"]);
	$nummer_count = count($nummers);
	$totaal = 0;
	$errors = array();
	foreach($nummers as $nummer){
		if(!is_numeric($nummer))
		$errors[] = "Je hebt geen nummer toegevoegd!";
	break;
	}
	if(empty($errors)){
		foreach($nummers as $nummer) {
			$totaal += $nummer;
		}
		$Gemiddelde = ($totaal / $nummer_count);


	}

 $bovenGemiddelde = "";
foreach ($nummers as $nummer){
    if ($nummer > $Gemiddelde) {
		$bovenGemiddelde .= $nummer . ",";
		
    }
}


	echo (isset($Gemiddelde)) ? "Gemiddelde: " . $Gemiddelde : "", '<br>';
	
	
	if(empty($errors)){
	echo (isset($bovenGemiddelde)) ? "Boven Gemiddelde : " .  $bovenGemiddelde : "";
	};
	
	


	if(isset($errors) && !empty($errors)){
		foreach($errors as $error){
			echo $error, '<br>';
		}
	}
	
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gemiddelde berekenen</title>
</head>
<body>
    <form action="gemiddelde.php" method="POST"><br>
    <textarea name="num"></textarea><br>
    <input type="submit" value="Go!">
    
    </form>
    
</body>
</html>
















