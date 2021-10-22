<?php
$it = new RecursiveDirectoryIterator("/directori/");
$display = Array ( 'jpeg', 'jpg', 'png', 'svg');


$str = '';
foreach(new RecursiveIteratorIterator($it) as $file)
{
    if (in_array(strtolower(array_pop(explode('.', $file))), $display)){

        $str .= 'ln ' . $file . ' ';
        $tmp = strval($file);
        $tmp = explode('/', $tmp);
        unset($tmp[0]);
        unset($tmp[1]);
        $tmp = implode('/', $tmp);

        $str .= './' . $tmp . "\n";
    }
}
    $test = file_put_contents('simbols-link.txt', $str);
    echo "Проверь файл simbols-link.txt";

?>
