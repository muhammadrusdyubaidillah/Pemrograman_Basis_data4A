<?php

class Config {
    public $connect;

    public function __construct(){
        $this->koneksi_db();
    
    }
    private function koneksi_db(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "kk_rusdy";

        # Koneksi database
        $this->connect = new mysqli($server, $user, $password, $database);
        return $this->connect;
    }
    public function ambilAll($sql){
        $hasil = $this->connect->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $hasil;
    }
    public function ambilOne($sql){

    }
}