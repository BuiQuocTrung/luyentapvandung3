<?php
function daoNguocMang($mang) {
    $mangDaoNguoc = [];
    $n = count($mang);
    for ($i = $n - 1; $i >= 0; $i--) {
        $mangDaoNguoc[] = $mang[$i];
    }  
    return $mangDaoNguoc;
}
$numbers = [100, 3, 5,];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc);
?>