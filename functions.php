<?php
function return_money($money){
    $nominals = [100, 50, 20, 10, 5];
    $listNominal=[];
    foreach ($nominals as $v) {
        if ($v > $money) continue;
        $count = floor($money / $v);
        $money = $money % $v;
        $listNominal[$v] = $count;
        if (!$money) break;
    }
    return $listNominal;
}

if($_POST['nominal']){
    $money = (int)(htmlentities($_POST['nominal']));
    if($money % 5) {
        $min = floor($money / 5) * 5;
        $max = ceil($money / 5) * 5;
        echo "Неверная сумма. Выберите $min или $max";
    }else {
        $data = return_money($money);
        $text = "<tr><td>Номинал</td><td>Количество</td></tr>";
        foreach ($data as $k => $v){
        $text .="<tr><td>$k</td><td>$v</td></tr>";
        }
        echo $text;
    }
}