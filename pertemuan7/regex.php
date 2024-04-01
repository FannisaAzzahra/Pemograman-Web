<?php
//$pattern = '/[a-z]/';
//$text = 'This is a Sample Text.';
//if (preg_match($pattern, $text)){
//    echo "Huruf kecil ditemukan!";
//} else {
//    echo "Tidak ada Huruf kecil!";
//}

//$pattern = '/[0-9]+/';
//$text = 'There are 123 apples.';
//if (preg_match($pattern, $text, $matches)){
//    echo "Cocokkan: ". $matches[0];
//} else {
//    echo "Tidak ada data yang cocok!";
//}

//$pattern = '/apple/';
//$replacement = 'banana';
//$text = 'I like apple pie';
//$new_text = preg_replace($pattern, $replacement, $text);
//echo $new_text;

//$pattern = '/go*d/'; // cocokkan "god", "good", "gooood", dll
//$text = 'god is good.';
//if (preg_match($pattern, $text, $matches)){
//    echo "Cocokkan: ". $matches[0];
//} else {
//    echo "Tidak ada yang cocok";
//}

//$pattern = '/go?d/'; // cocokkan "god", "good", "gooood", dll
//$text = 'god is good.';
//if (preg_match($pattern, $text, $matches)){
//    echo "Cocokkan: ". $matches[0];
//} else {
//    echo "Tidak ada yang cocok";
//}

$pattern = '/go{0,10}d/'; // cocokkan "god", "good", "gooood", dll
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)){
    echo "Cocokkan: ". $matches[0];
} else {
    echo "Tidak ada yang cocok";
}