
<?php
echo "-------------<br>";
echo "Задание 3<br>";
echo "-------------<br>";
$cityRegion=[
    "Московская" => [
        "Москва",
        "Клин",
        "Балашиха",
        "Химки",
    ],
    "Ленинградская" => [
        "Санкт-Петербург",
        "Волхов",
        "Всеволжк",
        "Тихвин",
    ],
];

$resultStr = "";

foreach($cityRegion as $key => $value){
    $resultStr = $resultStr.$key." область: <br>"; 
        foreach($cityRegion[$key] as $key1 => $val1){
            $resultStr = $resultStr.$val1.", "; 
        }
    $resultStr = substr($resultStr,0,-2); 

    $resultStr = $resultStr.".<br>";
}

echo $resultStr;

echo '<br>';

echo "-------------<br>";
echo "Задание 4<br>";
echo "-------------<br>";

function rusConvertTrans($string){
    $convertTable=[
        'а'=>'a',       'б'=>'b',
        'в'=>'v',       'д'=>'d',
        'г'=>'g',       'е'=>'e',
        'ё'=>'e',       'ж'=>'j',
        'з'=>'z',       'и'=>'i',
        'й'=>'y',        'к'=>'k',
        'л'=>'l',        'м'=>'m',
        'н'=>'n',        'о'=>'o',
        'п'=>'p',        'р'=>'r',
        'с'=>'s',        'т'=>'t',
        'у'=>'u',        'ф'=>'f',
        'х'=>'h',        'ц'=>'c',
        'ч'=>'ch',        'ш'=>'sh',
        'щ'=>'shch',        'ы'=>'y',
        'э'=>'e',        'ю'=>'yu',
        'я'=>'ya',        'ъ'=>'',
        'ь'=>'',        ' '=>' ',];
    $readyString=[];
    $arrString = preg_split('//u', $string, null, PREG_SPLIT_NO_EMPTY);
    foreach($arrString as $value){
        foreach($convertTable as $key){
            if($convertTable[$value] == $key){
              $readyString[]=$key; 
              break;
            }
        } 
    }

return implode($readyString);
}
echo $rusString = "задача номер четыре готова";
echo "<br>"; 
echo rusConvertTrans($rusString);



echo '<br>';

echo "-------------<br>";
echo "Задание 8 *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».<br>";
echo "-------------<br>";
$cityRegion=[
    "Московская" => [
        "Москва",
        "Клин",
        "Балашиха",
        "Химки",
    ],
    "Ленинградская" => [
        "Санкт-Петербург",
        "Волхов",
        "Всеволжск",
        "Кириши",
    ],
];

$resultStr = "";

foreach($cityRegion as $key => $value){
    $resultStr = $resultStr.$key." область: <br>"; 
        foreach($cityRegion[$key] as $key1 => $val1){
            $rusStr = preg_split('//u', $val1, null, PREG_SPLIT_NO_EMPTY);
            if($rusStr[0] == "К"){
                $resultStr = $resultStr.$val1.", ";
            }
        }
    $resultStr = substr($resultStr,0,-2); 

    $resultStr = $resultStr.".<br>";
}

echo $resultStr;




echo '<br>';

echo "-------------<br>";
echo "Задание 9 *Объединить две ранее написанные функции в одну,<br>";
echo "которая получает строку на русском языке, производит транслитерацию<br>"; 
echo "и замену пробелов на подчеркивания (аналогичная задача решается<br>"; 
echo "при конструировании url-адресов на основе названия статьи в блогах).<br>";
echo "-------------<br>";

function rusConvertTransUnderline($string){
    $convertTable=[
        'а'=>'a',       'б'=>'b',
        'в'=>'v',       'д'=>'d',
        'г'=>'g',       'е'=>'e',
        'ё'=>'e',       'ж'=>'j',
        'з'=>'z',       'и'=>'i',
        'й'=>'y',        'к'=>'k',
        'л'=>'l',        'м'=>'m',
        'н'=>'n',        'о'=>'o',
        'п'=>'p',        'р'=>'r',
        'с'=>'s',        'т'=>'t',
        'у'=>'u',        'ф'=>'f',
        'х'=>'h',        'ц'=>'c',
        'ч'=>'ch',        'ш'=>'sh',
        'щ'=>'shch',        'ы'=>'y',
        'э'=>'e',        'ю'=>'yu',
        'я'=>'ya',        'ъ'=>'',
        'ь'=>'',        ' '=>'_',];
    $readyString=[];
    $arrString = preg_split('//u', $string, null, PREG_SPLIT_NO_EMPTY);
    foreach($arrString as $value){
        foreach($convertTable as $key){
            if($convertTable[$value] == $key){
              $readyString[]=$key; 
              break;
            }
        } 
    }

return implode($readyString);
}
echo $rusString = "задача номер девять готова";
echo "<br>"; 
echo rusConvertTransUnderline($rusString);

?>
