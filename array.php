<?php
//array map
function abc($a) {
	return $a;
}

$arr = array("first" => "sharif", "second" => "jahid");
print_r($result = (array_map("abc", $arr)));

echo "<br>";
//array chunk
$arr = array(1, 2, 3, 4, 5, 6);

$result = array_chunk($arr, 2);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";
//array column
$arr = array(
	array(
		"first-name" => "shariful",
		"last-name" => "islam",
		"id" => "13103175",
	),
	array(
		"first-name" => "jahidul",
		"last-name" => "islam",
		"id" => "13103173",
	),
	array(
		"first-name" => "rahul",
		"last-name" => "islam",
		"id" => "13103173",
	),

);

$result = array_column($arr, "first-name");
echo "<pre>";
print_r($result);
echo "</pre>";

//array combine

$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");

$result = array_combine($fname, $age);

echo "<pre>";
echo ($result["Peter"]);
echo "</pre>";

echo "<br>";
//count same values of an array
$age = array("35", "35", "37", "43");

print_r(array_count_values($age));
echo "<br>";

$arr1 = array(1, 3, 4);
$arr2 = array(2, 5, 1, 4);
$result = array_diff($arr1, $arr2);

echo "<pre>";
print_r($result);
echo "</pre>";

$arr = array(
	array(

		array(
			"first-name" => "jahidul",
			"last-name" => "islam",
			"id" => "13103173",
		),
		array(
			"first-name" => "shariful",
			"last-name" => "islam",
			"id" => "13103173",
		),
		array(
			"first-name" => "rahul",
			"last-name" => "islam",
			"id" => "13103173",
		),

	),

);
for ($i = 0; $i < 1; $i++) {
	for ($j = 0; $j < 3; $j++) {
		print_r($arr[$i][$j]["first-name"]);
		echo "<br>";
	}

}

echo "<br>";
//for loop
for ($i = 1; $i <= 2; $i++) {
	for ($j = 1; $j <= 10; $j++) {

		echo $i . "*" . $j . " = " . $i * $j;
		echo "<br>";
	}
	echo "<br>";
}

echo "<br>";

for ($i = 1; $i < 2; $i++) {
	for ($j = 1; $j < 5; $j++) {

	}
}

echo "<br>";

$multyArr['arrvalue'] = ['first' => 2, 'second' => 3, 'third' => ['third_child' => 3.1]];
$multyArr['arrvalue1'] = ['first' => 3, 'second' => 4];

print_r($multyArr['arrvalue']['third']['third_child']);
?>