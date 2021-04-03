<?php
function build($arr = [])
{
    $string = '';
    if ($arr) {
        $jumlah = count($arr);
        for ($i = 0; $i < $jumlah; $i++) {
            $string .= '(';
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $string .= "'".$arr[$i][$j]."'";

                if ($j != (count($arr[$i]) - 1)) {
                    $string .= ', ';
                }
            }
            $string .= ')';

            if ($i != ($jumlah - 1)) {
                $string .= ', ';
            }
        }
    }

    return $string;
}
