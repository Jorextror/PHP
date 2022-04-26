<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use DateTime;

class FormatTime{
    public static function LongTimeFilter($date){
        $date1 = new DateTime($date);
        $date2 = new DateTime();
        $df = $date1->diff($date2);

        $str = '';
    
        $str .= ($df->invert == 1) ? ' - ' : '';
        if ($df->y > 0) {
            // years
            $str .=  ($df->y > 1) ? $df->y . ' Años ' : $df->y . ' Año ';
        } elseif ($df->m > 0) {
            // month
            $str .= ($df->m > 1) ? $df->m . ' Meses ' : $df->m . ' Mes ';
        } elseif ($df->d > 0) {
            // days
            $str .= ($df->d > 1) ? $df->d . ' Dies ' : $df->d . ' Dia ';
        } elseif ($df->h > 0) {
            // hours
            $str .= ($df->h > 1) ? $df->h . ' Hores ' : $df->h . ' Hora ';
        } elseif ($df->i > 0) {
            // minutes
            $str .= ($df->i > 1) ? $df->i . ' Minutos ' : $df->i . ' Minuto ';
        } elseif ($df->s > 0) {
            // seconds
            $str .= ($df->s > 1) ? $df->s . ' Segundos ' : $df->s . ' Segundo ';
        }
        echo $str;
    }
}