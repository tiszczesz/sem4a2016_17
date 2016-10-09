<?php
function Wiztowka($imie, $nazwisko, $stanowisko){
            $html = "<div class='wiz'>";
            $html .= $imie. ' '.$nazwisko.'<br>' 
                .  "stanowisko: {$stanowisko}</div>\n";
            return $html;
}

function GenerHtmlTab($row, $col){
    $html = "<table>\n";
    for($i=1;$i<=$row;$i++){
        $rowadd = $i%2===0 ? "class='bold1'" : "";
        $html.="<tr {$rowadd}>";
        for($j=1;$j<=$col;$j++){
            $hc = ($i==1 || $j ==1) ? 'class="header"': "";
            $html .= "\t<td {$hc}>".($i*$j)."</td>\n";
        }
       $html .= "</tr>\n"; 
    }   
    $html .= "</table>\n";
    return $html;
}

