<?php

$path = "text.txt";
if( file_exists($path)) {

} else {

}
is_dir($path);

basename("D:/sites/web-prof-1017/php7/");
filesize('./text.txt');

$dir = scandir("../php7");
//echo "<ul>";

foreach ($dir as $item) {
    if(is_file($item) && filesize($item) > 3) {
       // echo "<li>{$item}</li>";
    }
}

//echo "</ul>";
//echo "<li>"


//echo "<pre>";
//var_dump($dir);

//$fajl = fopen($path, "r");
//fwrite($fajl, "cao");
//$size = filesize($path);
//echo fread($fajl, $size);
//fclose($fajl);

//$old_content = file_get_contents("http://sae.edu");
//file_put_contents($path,  $old_content);
//$text =  file_get_contents($path);

//echo $text;

//copy("text.txt", "./test/text.txt");
//rename('novoime.txt', "./test/novoime.txt");
//unlink("./test/novoime.txt");
//popen("rm text.txt", "w");
//var_dump($fajl);

//rmdir("test");

$dir = opendir("./");
//echo readdir($dir). "<br>";
//echo readdir($dir) . "<br>";
//echo readdir($dir) . "<br>";

while($el = readdir($dir)){
    if( is_file($el)) {
        echo $el . "<br>";
    }
}

closedir($dir);
//var_dump($dir);

