<?php
/**
 * Created by PhpStorm.
 * User: KAA
 * Date: 27.02.2019
 * Time: 12:16
 */
function addSomeDiv($divTop, $divLeft, $divHeight, $divWidth, $divColor)
{
    echo "<div class='col-md-3'><div style='margin-left: 10px; background: $divColor; top: $divTop; left: $divLeft; height: $divHeight; width: $divWidth;'></div></div>";
}

function getTableDaysOfMonth($monthNumber)
{
    $dayInMonth = date("t", strtotime("2019-$monthNumber-01"));
    $dayStart = date("N", strtotime("2019-$monthNumber-01"));
    $temp = "";
    for ($i=1; $i<=$dayInMonth+$dayStart;){

        $temp.="<tr>";
        for ($j=0; $j<7; $j++) {
            if ($i<$dayStart || $i > $dayInMonth+$dayStart-1){
                $temp.="<td></td>";
            }
            else {
                $c = $i-$dayStart+1;
                $temp.="<td>$c</td>";
            }
            $i++;
        }
        $temp.="</tr>";
    }
    return $temp;
}