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
        private $table = 'mahasiswa';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }


    public function getAllMahasiswa(){

         $this->db->query('SELECT * FROM ' . $this->table);
         return $this->db->resultSet();
    }

    public function getMahasiswaById($id){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
   }

}