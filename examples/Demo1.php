<?php
include "../TextMiner.php";
//Top Keywords as an array

$tm = new TextMiner();

//add any number of files and or text
//$tm->addFile("http://www.google.com/search?q=data+mining");
$tm->addFile("https://sport.detik.com/sepakbola/liga-spanyol/d-5898061/ancelotti-ungkap-kelemahan-besar-barcelona");
//$tm->addText("Text can be added this way.");

$tm->convertToLower = TRUE; // optional

$tm->process(); //should be called before accessing keywords

<<<<<<< HEAD
printa($tm->getTopNGrams(10));
=======
printa($tm->getTopNGrams(30));
>>>>>>> 63ad454bfc27feb3ab2f2cabe421614631d6b5df
echo $tm->printSummary();