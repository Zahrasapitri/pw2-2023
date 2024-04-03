<?php
class Kartu {
    private $conn;
    private $table_name = "kartu";

    public $id;
    public $nama;
    public $no_kartu;
    public $pin;
    public $saldo;
    public $user_id;

    public function __construct($db){
        $this->conn = $db;
    }

    // Tampilkan data semua kartu
    public function index(){
        $query = "SELECT * FROM {$this->table_name}";
        $data = $this->conn->prepare($query);
        $data->execute();
        return $data;
    }

    // Tampilkan halaman create
    public function create(){
        header("Location: create.php");
        exit();
    }

    // Tambah kartu ke database
    public function store(){
        $query = "INSERT INTO {$this->table_name} 
                (nama, no_kartu, pin, saldo, user_id) 
                VALUES (?, ?, ?, ?, ?)
                ";
        $data = $this->conn->prepare($query);

        $data->execute([
            $this->nama, 
            $this->no_kartu, 
            $this->pin, 
            $this->saldo, 
            $this->user_id
        ]);

        return $data->rowCount() > 0;
    }

    // Tampilkan halaman edit
    public function edit(){
        $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
        $data = $this->conn->prepare($query);
        $data->execute([$this->id]);
        return $data;
    }

    // Update kartu ke database
    public function update(){
        $query = "UPDATE {$this->table_name} 
                SET nama=?, no_kartu=?, pin=?, saldo=?, user_id=? 
                WHERE id=?";
        $data = $this->conn->prepare($query);

        $data->execute([
            $this->nama, 
            $this->no_kartu, 
            $this->pin, 
            $this->saldo, 
            $this->user_id, 
            $this->id
        ]);

        return $data->rowCount() > 0;
    }

    // Hapus kartu dari database
    public function delete(){
        $query = "DELETE FROM {$this->table_name} WHERE id = ?";
        $data = $this->conn->prepare($query);
        $data->execute([$this->id]);

        return $data->rowCount() > 0;
    }
}
?>