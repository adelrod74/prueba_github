<?php

	$genre = 'F';
	$type = 2;
	$years = 47;

		if($genre=="V"){
			if($type==1){
				if($years>=6 && $years<=9){
					$category = 6;
				} else if($years>9 && $years<=12){
					$category = 7;
				} else if($years>12 && $years<=15){
					$category = 8;
				} else if($years>15 && $years<=20){
					$category = 1;
				} else if($years>20 && $years<=30){
					$category = 2;
				} else if($years>30 && $years<=40){
					$category = 3;
				} else if($years>40 && $years<=50){
					$category = 4;
				} else if($years>50){
					$category = 5;
				} else{
					$ban = false;
					$answer['status'] = 2;
					$answer['msg'] = "Debes tener al menos 6 años para participar en este evento";
				}
			} else if($type==2){
				if($years>15 && $years<=20){
					$category = 1;
				} else if($years>20 && $years<=35){
					$category = 2;
				} else if($years>35 && $years<=45){
					$category = 3;
				} else if($years>=46){
					$category = 5;
				} else{
					$ban = false;
					$answer['status'] = 2;
					$answer['msg'] = "Debes tener al menos 16 años para participar en esta modalidad";
				}
			} else{
				$ban = false;
				$answer['status'] = 2;
				$answer['msg'] = "¡Modalidad incorrecta!";
			}
		}else{
			if($years>15 && $years<=20){
				$category = 1;
			} else if($years>20 && $years<=35){
				$category = 2;
			} else if($years>35 && $years<=45){
				$category = 3;
			} else if($years>=46){
				$category = 5;
			} else{
				$ban = false;
				$answer['status'] = 2;
				$answer['msg'] = "Debes tener al menos 16 años para participar en esta modalidad";
			}
		}

		echo $category;

?>