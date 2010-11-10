<?php 

/*Css widths for top boxes*/

$topBoxes = 0;
if ($user1 != '') $topBoxes += 1;
if ($user2 != '') $topBoxes += 1;
if ($user3 != '') $topBoxes += 1;

switch ($topBoxes) {
	case 1:
		$topBoxes = "width100";
		break;
	case 2:
		$topBoxes = "width50";
		break;
	case 3:
		$topBoxes = "width33";
		break;
	default:
		$topBoxes = "";
}

/*Css widths for bottom boxes*/

$bottomBoxes = 0;
if ($user4 != '') $bottomBoxes += 1;
if ($user5 != '') $bottomBoxes += 1;
if ($user6 != '') $bottomBoxes += 1;

switch ($bottomBoxes) {
	case 1:
		$bottomBoxes = "width100";
		break;
	case 2:
		$bottomBoxes = "width50";
		break;
	case 3:
		$bottomBoxes = "width33";
		break;
	default:
		$bottomBoxes = "";
}

?>