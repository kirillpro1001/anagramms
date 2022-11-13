<!-- Одна строка является анаграммой другой строки, если из первой можно получить вторую путём перестановки символов.  В этой задаче вам нужно написать код, который считает две строки и выведет 'yes' если они являются анаграммами друг друга, и 'no' если не являются. -->

<?php
function anagramms ($strOne,$strTwo) {
	$arrStrOne = str_split($strOne,1);
	$arrStrTwo = str_split($strTwo,1);
	if (count($arrStrOne)===count($arrStrTwo)){
	foreach($arrStrOne as $i => $value) {
		foreach ($arrStrTwo as $j => $value) {
			if (key_exists($i, $arrStrOne) && key_exists($j, $arrStrTwo)) {

			if ($arrStrOne[$i] == $arrStrTwo[$j]) {
				unset($arrStrOne[$i]);
				unset($arrStrTwo[$j]);
			}
		}
		else
		{
			continue;
		}
		}
	}
	if (empty($arrStrOne) && empty($arrStrTwo)){
		return "Yes";
	}
	else {
		return "No";
	}
}
else {
	return "No";
}
}

echo anagramms("saaa","ssaa");
?>