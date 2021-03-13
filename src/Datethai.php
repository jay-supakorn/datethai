<?php

namespace Kisracorp\Support;

class Datethai
{
    public static function parse($strDate, $typeDate)
    {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strYearEng = date("Y", strtotime($strDate));
        $strMonth = date("m", strtotime($strDate));
        $strDayWeek = date("w", strtotime($strDate));
        $strDay = date("d", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strHours = date("h", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strZone = date("A", strtotime($strDate));
        $strMonthEngCut = array('00' => "", '01' => "Jan", '02' => "Feb", '03' => "Mar", '04' => "Apr", '05' => "May", '06' => "Jun", '07' => "Jul", '08' => "Aug", '09' => "Sep", '10' => "Oct", '11' => "Nov", '12' => "Dec");
        $strMonthFull = array('00' => "", '01' => "มกราคม", '02' => "กุมภาพันธ์", '03' => "มีนาคม", '04' => "เมษายน", '05' => "พฤษภาคม", '06' => "มิถุนายน", '07' => "กรกฎาคม", '08' => "สิงหาคม", '09' => "กันยายน", '10' => "ตุลาคม", '11' => "พฤศจิกายน", '12' => "ธันวาคม");
        $strMonthThai = array('00' => "", '01' => "ม.ค.", '02' => "ก.พ.", '03' => "มี.ค.", '04' => "เม.ย.", '05' => "พ.ค.", '06' => "มิ.ย.", '07' => "ก.ค.", '08' => "ส.ค.", '09' => "ก.ย.", '10' => "ต.ค.", '11' => "พ.ย.", '12' => "ธ.ค.");
        $StrDayText = array('0' => 'Sunday', '1' => 'Monday', '2' => 'Tuesday', '3' => 'Wednesday', '4' => 'Thursday', '5' => 'Friday', '6' => 'Saturday');
        $strMonthEngFull = array('00' => "", '01' => "January", '02' => "February", '03' => "March", '04' => "April", '05' => "May", '06' => "June", '07' => "July", '08' => "August", '09' => "September", '10' => "October", '11' => "November", '12' => "December");
        $strMonthEng = $strMonthEngFull[$strMonth];
        $strMonthEngCut = $strMonthEngCut[$strMonth];
        $strMonthFullThai = $strMonthFull[$strMonth];
        $StrDayText = $StrDayText[$strDayWeek];

        switch ($typeDate) {
            case ("datetime"):
                return "$strDay $strMonth $strYear - $strHour:$strMinute";
                break;
            case ("dateEng"):
                return "$strDay $strMonthEngCut $strYear";
                break;
            case ("datetimefull"):
                return "$strDay $strMonthFullThai $strYear - $strHour:$strMinute";
                break;
            case ("datefull"):
                return "$strDay $strMonthFullThai $strYear";
                break;
            case ("datetimeeng"):
                return "$strDay $strMonthEng $strYearEng - $strHour:$strMinute";
                break;
            case ("date"):
                return "$strDay $strMonthThai $strYear";
                break;
            case ("time"):
                return "$strHour:$strMinute";
                break;
            case ("homepage"):
                return "{$strDay}.{$strMonth}.{$strYear}";
                break;
            case ("homepageShortYear"):
                return "{$strDay}.{$strMonth}.{$strYearEng}";
                break;
            case ("homepageEN"):
                return "{$strYearEng}/{$strMonth}/{$strDay}";
                break;
            case ("datetime_number"):
                return "{$strDay}.{$strMonth}.{$strYear} - $strHour:$strMinute";
                break;
            case ("date_number"):
                return "{$strDay}/{$strMonth}/{$strYearEng}";
                break;
            case ("datetime_number_en"):
                return "{$strDay}/{$strMonth}/{$strYearEng}, $strHour:$strMinute";
                break;
            case ("shortdateeng"):
                return "{$strDay} $strMonthEng {$strYearEng}";
                break;
            case ("shortday"):
                return "{$strDay}";
                break;
            case ("DATECHEQUE"):
                return "{$strDay}/{$strMonth}/{$strYearEng}";
                break;
            case ("shortmonth"):
                return "{$strMonthEng}";
                break;
            case ("shortyear"):
                return "{$strYearEng}";
                break;
            case ("MonthDayYear"):
                return "{$strDay} {$strMonthFullThai} {$strYear}";
                break;
        }
    }
}
