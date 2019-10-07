<?php

class About{

    public function index($nama= "Ichlasul", $pekerjaan= " Mahasiswa",$umur= 20){
        echo "Halo $nama, seorang $pekerjaan, berumur $umur";
    }

    public function page(){
        echo "About/page";
    }
}