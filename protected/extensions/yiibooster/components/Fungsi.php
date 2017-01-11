<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class fungsi{
public function tanggal($x){
    list($thn,$bln,$tgl)=  explode('-', $x);
    $tanggalan=$tgl."/".$bln."/".$thn;
    $x=$tanggalan;
    return $x;
    }
public function kalender($x){
    list($tgl,$bln,$thn)=  explode('/', $x);
    $tanggalan=$thn."-".$bln."-".$tgl;
    $x=$tanggalan;
    return $x;
    }
public function jam($x){

}
}