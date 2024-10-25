<?php
class mahasiswa_model{

    private $dbh; // database handler
    private $stmt;

    public function __construct()

    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    //cara lain menampilkan data mahasiswa
    //private $mhs = [
      //  [
        //    "nama" => "adistyo ariansa",
          //  "nrp" => "181011400510",
            //"email" => "adistyoariansa2@gmail.com",
            //"jurusan" => "teknik informatika"
        //],

        //[
          //  "nama" => "reza aji saputra",
            //"nrp" => "181011400511",
            //"email" => "reza@gmail.com",
            //"jurusan" => "teknik informatika"
        //],

        //[
          //  "nama" => "mario andika",
            //"nrp" => "181011400512",
            //"email" => "mario@gmail.com",
            //"jurusan" => "teknik informatika"
        //]
        //];
        
        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}


?>