<?php
$x = rand(0, 100);
echo "Число ".$x;

$variable1 = 1;
$variable2 = 2;

while (1) {
	if ($variable1 > $x) {
		echo " задуманное число НЕ входит в числовой ряд";
		break;
	} elseif ($variable1 = $x) {
		echo " задуманное число входит в числовой ряд";
		break;
	} else {
		$variable3 = $variable1;
		$variable1 +=$variable2;
		$variable2 = $variable3;
	}
}
?>
