<?php

class Mahasiswa_model {
    // private $mhs = [[
    //     "nama"=> "M. Ichlasul A",
    //     "nrp"=> "173040022",
    //     "email"=>"m.ichal7749@gmail.com",
    //     "jurusan"=>"Teknik Informatika"
    // ],
    // [
    //     "nama"=> "M. Ichlasul A",
    //     "nrp"=> "173040022",
    //     "email"=>"m.ichal7749@gmail.com",
    //     "jurusan"=>"Teknik Informatika"
    // ]
    // ];

    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn='mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');

        }catch(PDOException $e){
            die($e->getMessage());
        }



    }

    public function getAllMahasiswa(){
         $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
         $this->stmt->execute();
         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}