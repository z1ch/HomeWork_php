<?php
$number = $_POST["number"];
$operation = $_POST["operation"];
$count = "";
$end = "";

switch ($operation[0]) {
	case "sum":
        $end = (+$number[0] + +$number[1]);
		break;
	case "difference":
        $end = (+$number[0] - +$number[1]);
		break;
	case "multiply":
        $end = (+$number[0] * +$number[1]);
		break;
    case "split":
        if (+$number[1] == 0){
            $end = "Делить на 0 нельзя";
        } else {
            $end = (+$number[0] / +$number[1]);
        }
		break;
}

header("Location: /index.php");
?>