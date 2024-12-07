<?php
include('Model.php');

class BukuModel extends Model
{
    protected $db;
    protected $table = 'm_buku';
    protected $driver;

    public function __construct()
    {
        include_once('../lib/Connection.php');
        $this->db = $db;
        $this->driver = $use_driver; // pastikan $use_driver diatur di Connection.php (mysql/sqlsrv)
    }

    public function insertData($data)
    {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("INSERT INTO {$this->table} (buku_kode, buku_nama, kategori_id, jumlah, deskripsi, gambar) 
                                         VALUES (?, ?, ?, ?, ?, ?)");
            $query->bind_param('ssisss', $data['buku_kode'], $data['buku_nama'], $data['kategori_id'], $data['jumlah'], $data['deskripsi'], $data['gambar']);
            $query->execute();
        } else {
            $sql = "INSERT INTO {$this->table} (buku_kode, buku_nama, kategori_id, jumlah, deskripsi, gambar) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $params = [
                $data['buku_kode'],
                $data['buku_nama'],
                $data['kategori_id'],
                $data['jumlah'],
                $data['deskripsi'],
                $data['gambar']
            ];
            sqlsrv_query($this->db, $sql, $params);
        }
    }
    //     public function insertData($data)
    //     {
    //         // prepare statement untuk query insert
    //         $query = $this->db->prepare("insert into {$this->table} (buku_kode,
    // buku_nama, jumlah, deskripsi, gambar) values(?,?,?,?,?)");
    //         // binding parameter ke query, "s" berarti string, "ss" berarti dua string
    //         $query->bind_param('ss', $data['buku_kode'], $data['buku_nama']);
    //         // eksekusi query untuk menyimpan ke database
    //         $query->execute();
    //     }
    public function getData()
    {
        if ($this->driver == 'mysql') {
            return $this->db->query("SELECT * FROM {$this->table}");
        } else {
            $sql = "SELECT * FROM {$this->table}";
            return sqlsrv_query($this->db, $sql);
        }
    }

    public function getDataById($id)
    {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE buku_id = ?");
            $query->bind_param('i', $id);
            $query->execute();
            return $query->get_result()->fetch_assoc();
        } else {
            $sql = "SELECT * FROM {$this->table} WHERE buku_id = ?";
            $params = [$id];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            return sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        }
    }

    public function updateData($id, $data)
    {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("UPDATE {$this->table} 
                                     SET buku_kode = ?, buku_nama = ?, kategori_id = ?, jumlah = ?, deskripsi = ?, gambar = ? 
                                     WHERE buku_id = ?");
            $query->bind_param('ssiissi', $data['buku_kode'], $data['buku_nama'], $data['kategori_id'], $data['jumlah'], $data['deskripsi'], $data['gambar'], $id);
            $query->execute();
        } else {
            $sql = "UPDATE {$this->table} 
                SET buku_kode = ?, buku_nama = ?, kategori_id = ?, jumlah = ?, deskripsi = ?, gambar = ? 
                WHERE buku_id = ?";
            $params = [
                $data['buku_kode'],
                $data['buku_nama'],
                $data['kategori_id'],
                $data['jumlah'],
                $data['deskripsi'],
                $data['gambar'],
                $id
            ];
            sqlsrv_query($this->db, $sql, $params);
        }
    }
    // public function updateData($id, $data)
    // {
    //     // query untuk update data
    //     $query = $this->db->prepare("update {$this->table} set buku_kode = ?,
    // buku_nama = ?, jumlah = ?, deskripsi = ?, gambar = ?,  where buku_id = ?");
    //     // binding parameter ke query
    //     $query->bind_param('ssi', $data['buku_kode'], $data['buku_nama'], $id);
    //     // eksekusi query
    //     $query->execute();
    // }

    public function deleteData($id)
    {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("DELETE FROM {$this->table} WHERE buku_id = ?");
            $query->bind_param('i', $id);
            $query->execute();
        } else {
            $sql = "DELETE FROM {$this->table} WHERE buku_id = ?";
            $params = [$id];
            sqlsrv_query($this->db, $sql, $params);
        }
    }
    // public function deleteData($id)
    // {
    //     // query untuk delete data
    //     $query = $this->db->prepare("delete from {$this->table} where kategori_id = ?");
    //     // binding parameter ke query
    //     $query->bind_param('i', $id);
    //     // eksekusi query
    //     $query->execute();
    // }
}
