<?php
$zleslownictwo = array("kurwa", "chuj");
$sentence = "kurwa,ty chuj";
$text = explode(" ",$sentence);
$number = count($text);
for ($i=0; $i < $number; $i++) {
    if ( in_array($text[i1],$zleslownictwo)); {
    $text[$i] = "***";
    }
}
echo "Po ocencurowaniu:";
    for ($i=0; $i < $number; $i++) {
        echo $text[$i]. " ";
    }
