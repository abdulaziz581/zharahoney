<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Fungsi{
   
    public static function tglfull($x){
    list($thn,$bln,$tgl)=  explode('-', $x);
    $bulan= $bln;
        Switch ($bulan){
    case 1 : $bulan="Januari";
        Break;
    case 2 : $bulan="Februari";
        Break;
    case 3 : $bulan="Maret";
        Break;
    case 4 : $bulan="April";
        Break;
    case 5 : $bulan="Mei";
        Break;
    case 6 : $bulan="Juni";
        Break;
    case 7 : $bulan="Juli";
        Break;
    case 8 : $bulan="Agustus";
        Break;
    case 9 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
    return $tgl." ".$bulan." ".$thn;   
    }
    public static function tanggal($x){
        list($thn,$bln,$tgl)=  explode('-', $x);
        $tanggalan=$tgl."/".$bln."/".$thn;
        $x=$tanggalan;
        return $x;
    }
    public function rupiah($nilai, $pecahan = 0) {
	return number_format($nilai, $pecahan, ',', '.');
    }
    public function jttempo($nilai) {
        if($nilai!='0000-00-00'){
	return self::tanggal($nilai);
        }else{
            echo '-';
        }
    }
    public static function Terbilang($satuan)
        {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($satuan < 12)
        return " " . $huruf[$satuan];
        elseif ($satuan < 20)
        return Terbilang($satuan - 10) . "Belas";
        elseif ($satuan < 100)
        return Terbilang($satuan / 10) . " Puluh" . Terbilang($satuan % 10);
        elseif ($satuan < 200)
        return " seratus" . Terbilang($satuan - 100);
        elseif ($satuan < 1000)
        return Terbilang($satuan / 100) . " Ratus" . Terbilang($satuan % 100);
        elseif ($satuan < 2000)
        return " seribu" . Terbilang($satuan - 1000);
        elseif ($satuan < 1000000)
        return Terbilang($satuan / 1000) . " Ribu" . Terbilang($satuan % 1000);
        elseif ($satuan < 1000000000)
        return Terbilang($satuan / 1000000) . " Juta" . Terbilang($satuan % 1000000);
        }
    public static function indotgl($format, $tanggal="now", $bahasa="id"){
        $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
        "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

        $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
        "Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September",
        "Oktober","Nopember","Desember");

        // tambahan untuk bahasa prancis
        // sumber http://w.blankon.in/6V
        $fr = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi",
        "janvier","février","mars","avril","Mei","mai","juillet","aoùt","septembre",
        "octobre","novembre","décembre");
 
        // mengganti kata yang berada pada array en dengan array id, fr (default id)
        return str_replace($en,$$bahasa,date($format,strtotime($tanggal)));
}
public static function hari($tanggal){
    $day=date('D', strtotime($tanggal));
    $dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
    );
    return $dayList[$day];
}
}

