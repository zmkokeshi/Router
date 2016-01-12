<?php
/**
 * Created by PhpStorm.
 * User: mzk
 * Date: 16/01/12
 * Time: 21:16
 */

$test="phpだよ";

echo $test;


?>

<?php
/* ファイルポインタをオープン */
$file = fopen("test.txt", "r");

/* ファイルを1行ずつ出力 */
if($file){
    while ($line = fgets($file)) {

        if ('' == strstr($line,'interface GigabitEthernet') && '' == strstr($line,'discription') && '' == strstr($line,'VLAN')){


        }
        else{

            echo $line;
        }








//        echo $line;

    }
}

/* ファイルポインタをクローズ */
fclose($file);
?>
