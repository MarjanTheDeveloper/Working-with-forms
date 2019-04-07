<?php

if (!isset($_POST['form_id'])) {
	echo 'You are lost.'; die;
} else {
	switch ($_POST['form_id']) {
		
		case 'test_form':
			echo '<h3>Just one input field test_input: </h3>' . $_POST['test_input'] . '.';
			break;
		
		case 'word_spinner':
			
			$words = [];
			foreach ($_POST as $key => $value) {
				if($key != 'form_id'){
					$words[] = $value;
				}
			}
			shuffle($words);
			echo implode(' ', $words);
			break;
		
		case 'generator_citata':

			echo '<p><cite>'.$_POST['citat'].'</cite> by '.$_POST['prefix'].' '.$_POST['ime'].' '.$_POST['prezime'].'. Painted in 1893.</p>';
			break;
		
		case 'cuvanje_slika':
			move_uploaded_file($_FILES['slika']['tmp_name'], 'uploads/'.$_FILES['slika']['name']);
			break;

		default:
			echo 'Unknown form!'; die;
			break;
	}
}