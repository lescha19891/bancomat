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
        return "Неверная сумма. Выберите $min или $max";
    }else {
        $data = return_money($money);
        $table = "";
        foreach ($data as $k => $v) {

        }
    }
}