<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Gerry Satria Halim",
    //         "nrp" => "043040023",
    //         "email" => "gerrysatria10@gmail.com",
    //         "prodi" => "Teknik Informatika"
    //     ], 
    //     [
    //         "nama" => "Wahyu Fitri Ferdiawan",
    //         "nrp" => "133050321",
    //         "email" => "wahyuferdiawan33@gmail.com",
    //         "prodi" => "Analisis Kimia"
    //     ],
    //     [
    //         "nama" => "Iqbal Iskandar",
    //         "nrp" => "163030123",
    //         "email" => "BalIskandar@gmail.com",
    //         "prodi" => "Teknologi Industri Benih"
    //     ]
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nrp, :email, :prodi)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('prodi', $data['prodi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data){
        $query = "UPDATE mahasiswa SET
                        nama = :nama,
                        nrp = :nrp,
                        email = :email,
                        prodi = :prodi
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}