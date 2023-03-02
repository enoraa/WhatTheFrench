<?php
	$daydate= date('N');//gives the number of the day ie monday=1, sunday=7
	$monthdate= date('n');//gives month in a number ie jan = 1 dec= 12
	$numberdate=date('j');
	$yeardate=date('Y');


	if ($numberdate=='1'){
		$daydate='premier';
	}
	/*Assigning each number a day*/
	switch ($daydate) {
		case '1':
			$daydate= 'Lundi';
			break;
		case '2':
			$daydate= 'Mardi';
			break;
		case '3':
			$daydate= 'Mercredi';
			break;
		case '4':
			$daydate= 'Jeudi';
			break;
		case '5':
			$daydate= 'Vendredi';
			break;
		case '6':
			$daydate= 'Samedi';
			break;
		case '7':
			$daydate= 'Dimanche';
	}

	/*Assigning each number a month*/
	switch($monthdate){
		case '1':
			$monthdate= 'Janvier';
			break;
		case '2':
			$monthdate= 'Fevrier';
			break;
		case '3':
			$monthdate= 'Mars';
			break;
		case '4':
			$monthdate= 'Avril';
			break;
		case '5':
			$monthdate= 'Mai';
			break;
		case '6':
			$monthdate= 'Juin';
			break;
		case '7':
			$monthdate= 'Juiller';
			break;
		case '8':
			$monthdate= 'Août';
			break;
		case '9':
			$monthdate= 'Septembre';
			break;
		case '10':
			$monthdate= 'Octobre';
			break;
		case '11':
			$monthdate= 'Novembre';
			break;
		case '12':
			$monthdate= 'Décembre';
			break;
	}

	echo "Aujourd'hui nous sommes ". $daydate. " le " . $numberdate . " " . $monthdate . " " . $yeardate;
?>
