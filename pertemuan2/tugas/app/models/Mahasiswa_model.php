<?php 

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // private $mhs = [
    //     [
    //         "nama" => "Maelani Ningrum",
    //         "nrp" => "233040164",
    //         "email" => "maelani@gmail.com",
    //         "jurusan"  => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Meil laa",
    //         "nrp" => "243040111",
    //         "email" => "meila@gmail.com",
    //         "jurusan"  => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Mae lii",
    //         "nrp" => "253040111",
    //         "email" => "maeli@gmail.com",
    //         "jurusan"  => "Teknik Industri"
    //     ]
    //     ];

        public function getAllMahasiswa()
        {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getMahasiswaById($id)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa 
              VALUES
              ('', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET 
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
             WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKe :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

}