<?php

$num_right = 0;
//access the global array called $_POST to get the values from the text fields
$a1 = $_POST["cap_Kansas"];
echo "What's the capital of Kansas?" . "" . "<br><br>";
echo "You Answered: " . $a1 . "<br>";
echo "Correct Answer: " . "Topeka" . "<br><br>";

$a2 = $_POST["col_sky"];
echo "What color is the sky?" . "" . "<br><br>";
echo "You Answered: " . $a2 . "<br>";
echo "Correct Answer: " . "blue" . "<br><br>";

$a3 = $_POST["mascot"];
echo "What is the KU mascot?" . "" . "<br><br>";
echo "You Answered: " . $a3 . "<br>";
echo "Correct Answer: " . "Jayhawk" . "<br><br>";

$a4 = $_POST["days"];
echo "How many days in a year?" . "" . "<br><br>";
echo "You Answered: " . $a4 . "<br>";
echo "Correct Answer: " . "365" . "<br><br>";

$a5 = $_POST["game"];
echo "What game did EECS 448 students make for Project 1?" . "" . "<br><br>";
echo "You Answered: " . $a5 . "<br>";
echo "Correct Answer: " . "Battleship" . "<br><br><br><br>";

if($a1 == "Topeka") {
    $num_right++;
}
if($a2 == "blue") {
    $num_right++;
}
if($a1 == "Jayhawk") {
    $num_right++;
}
if($a1 == "365") {
    $num_right++;
}
if($a1 == "Battleship") {
    $num_right++;
}

$perc_correct = 100*($num_right/5);

echo "Total Correct: " . $num_right . "/5<br>";
echo "Percentage Correct: " . $perc_correct . "%<br>";
?>