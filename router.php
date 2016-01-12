

<?php
/* ファイルポインタをオープン */
$file = fopen("test.txt", "r");

/* ファイルを1行ずつ出力 */
if($file){
    while ($line = fgets($file)) {

//        インターフェース名、説明、VIDの項目だけを抽出
        if ('' == strstr($line,'interface GigabitEthernet') && '' == strstr($line,'discription') && '' == strstr($line,'VLAN')){

        }
        else{
            echo $line;
            $config .= $line;
//            var_dump($config);
        }
    }
    file_put_contents("sample.txt", $config);
}

/* ファイルポインタをクローズ */
fclose($file);
?>



