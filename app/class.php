<?php

class Koneksi{

    protected $db; 
        
        public function __construct() 
        { 
            try { 
                $this->db = new PDO("mysql:host=localhost;dbname=db_ganjil", "root", "");
            }
            catch (PDOException $e) { 
                die ("Error " . $e->getMessage()); 
            } 
        }
    }

class Users extends Koneksi{
    public function tambahUser()
    {
        if (isset($_POST['btn-daftar'])) {
            $username = $_POST['username-daftar'];
            $password = md5($_POST['password-daftar']);
        
            $sql = "INSERT INTO tb_users (username, password)
                    VALUES(:username, :password)";
                
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            header("location: ../index.php");
        }
    }

    public function loginUser()
    {
        if(isset($_POST['btn-login'])){
            $username = $_POST['username-login'];
            $password = MD5($_POST['password-login']);
        
            $sql = "SELECT * FROM tb_users WHERE username= :username AND password= :password";
        
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            
            $row = $stmt->rowCount();
        
            if($row > 0){
                session_start();
                $_SESSION['username'] = $username;
            
                header("location: layouts/dashboard.php");
                }else{        
                echo "Username atau Password Salah!";
            }
        }
    }
}

class Kategori extends Koneksi {
    private $sql;
    
    public function tampilKategori()
    {
        $sql = "SELECT * FROM tb_category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch())
        {
            $data[] = $rows;
        }
        return $data;
    }

    public function tambahKategori()
    {
        if(isset($_POST['btn-tambah-kategori'])){
            $kat_nama = $_POST['kat-nama'];
            $kat_teks = $_POST['kat-teks'];
    
            $sql = "INSERT INTO tb_category (cat_name, cat_text)
            VALUES(:cat_name, :cat_text)";
    
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":cat_name", $kat_nama);
            $stmt->bindParam(":cat_text", $kat_teks);
            $stmt->execute();

            header ("location: kategori-tampil.php");
        }
    }

    public function getKategori($id)
    {

            $sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("cat_id", $id);
            $stmt->execute();

            $row = $stmt->fetch();

            return $row;
    }

    public function editKategori($id)
    {
            if (isset($_POST['btn-edit-kategori'])) {
                
                $kat_nama = $_POST['kat-nama'];
                $kat_teks = $_POST['kat-teks'];
                
                $sql = "UPDATE tb_category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
                
                $stm = $this->db->prepare($sql);
                $stm->bindParam(":cat_id", $id);
                $stm->bindParam(":cat_name", $kat_nama);
                $stm->bindParam(":cat_text", $kat_teks);
                $stm->execute();
                header('location: kategori-tampil.php');
            }    
        }

    public function hapusKategori($id)
    {
        if (isset($_GET['id'])) {
                
            $sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
               
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":cat_id", $id);
            $stmt->execute();
         
            header("location: kategori-tampil.php");
        }
    }
}

class Post extends Koneksi{
    private $sql;
    
    public function tampilPost()
    {
        $sql = "SELECT * FROM tb_post JOIN tb_category ON tb_post.post_id_cat = tb_category.cat_id ORDER BY post_id ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch())
        {
            $data[] = $rows;
        }
        return $data;
    }

    public function tambahPost()
    {
            if(isset($_POST['btn-tambah-post'])){
                $kat_nama = $_POST['kat-nama'];
                $post_slug = $_POST['post-slug'];
                $post_title = $_POST['post-title'];
                $post_teks = $_POST['post-teks'];
                $post_date = $_POST['post-date'];
        
                $sql = "INSERT INTO tb_post (post_id_cat, post_slug, post_title, post_text, post_date)
                VALUES(:post_id_cat, :post_slug, :post_title, :post_text, :post_date)";
        
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(":post_id_cat", $kat_nama);
                $stmt->bindParam(":post_slug", $post_slug);
                $stmt->bindParam(":post_title", $post_title);
                $stmt->bindParam(":post_text", $post_teks);
                $stmt->bindParam(":post_date", $post_date);
                $stmt->execute();
    
                header ("location: post-tampil.php");
            }
    }

    public function getPost($id)
    {
        $sql = "SELECT * FROM tb_post JOIN tb_category ON tb_post.post_id_cat = tb_category.cat_id WHERE post_id=:post_id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("post_id", $id);
            $stmt->execute();

            $row = $stmt->fetch();

            return $row;
    }

    public function editPost($id)
    {
            if (isset($_POST['btn-edit-post'])) {
                
                $kat_nama = $_POST['kat-nama'];
                $post_slug = $_POST['post-slug'];
                $post_title = $_POST['post-title'];
                $post_teks = $_POST['post-teks'];
                $post_date = $_POST['post-date'];
                
                $sql = "UPDATE tb_post SET post_id_cat=:post_id_cat, post_slug=:post_slug, post_title=:post_title, post_text=:post_text, post_date=:post_date
                WHERE post_id=:post_id";
                
                $stm = $this->db->prepare($sql);
                $stm->bindParam(":post_id", $id);
                $stm->bindParam(":post_id_cat", $kat_nama);
                $stm->bindParam(":post_slug", $post_slug);
                $stm->bindParam(":post_title", $post_title);
                $stm->bindParam(":post_text", $post_teks);
                $stm->bindParam(":post_date", $post_date);
                $stm->execute();
                header('location: post-tampil.php');
            }    
        }

    public function hapusPost($id)
    {
        if (isset($_GET['id'])) {
                
            $sql = "DELETE FROM tb_post WHERE post_id=:post_id";
               
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":post_id", $id);
            $stmt->execute();
         
            header("location: post-tampil.php");
        }
    }
}

class Foto extends Koneksi{
    private $sql;

    public function tampilFoto()
    {
        $sql = "SELECT * FROM tb_photos ORDER BY photo_id ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch())
        {
            $data[] = $rows;
        }
        return $data;
    }

    public function tambahFoto()
    {
        if(isset($_POST['btn-tambah-foto'])){
            $post_id = $_POST['post-id'];
            $foto_title = $_POST['foto-title'];
            $foto_file = $_POST['foto-file'];
    
            $sql = "INSERT INTO tb_photos (photo_id_post, photo_title, photo_file)
            VALUES(:photo_id_post, :photo_title, :photo_file)";
    
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":photo_id_post", $post_id);
            $stmt->bindParam(":photo_title", $foto_title);
            $stmt->bindParam(":photo_file", $foto_file);
            $stmt->execute();

            header ("location: foto-tampil.php");
        }
    }

    public function getFoto($id)
    {
        $sql = "SELECT * FROM tb_photos WHERE photo_id=:photo_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam("photo_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function editFoto($id)
    {
        if (isset($_POST['btn-edit-foto'])) {
            
            $post_id = $_POST['post-id'];
            $foto_title = $_POST['foto-title'];
            $foto_file = $_POST['foto-file'];
            
            $sql = "UPDATE tb_photos SET photo_id_post=:photo_id_post, photo_title=:photo_title, photo_file=:photo_file
            WHERE photo_id=:photo_id";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":photo_id", $id);
            $stmt->bindParam(":photo_id_post", $post_id);
            $stmt->bindParam(":photo_title", $foto_title);
            $stmt->bindParam(":photo_file", $foto_file);
            $stmt->execute();
            header('location: foto-tampil.php');
        }    
    }

    public function hapusFoto($id)
    {
        if (isset($_GET['id'])) {
                
            $sql = "DELETE FROM tb_photos WHERE photo_id=:photo_id";
               
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":photo_id", $id);
            $stmt->execute();
         
            header("location: foto-tampil.php");
        }
    }
}

class Album extends Koneksi {
    private $sql;

    public function tampilAlbum()
    {
        $sql = "SELECT * FROM tb_album ORDER BY album_id ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch())
        {
            $data[] = $rows;
        }
        return $data;
    }

    public function tambahAlbum()
    {
        if(isset($_POST['btn-tambah-album'])){
            $foto_id = $_POST['foto-id'];
            $album_title = $_POST['album-title'];
    
            $sql = "INSERT INTO tb_album (album_id_photo, album_title)
            VALUES(:album_id_photo, :album_title)";
    
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("album_id_photo", $foto_id);
            $stmt->bindParam("album_title", $album_title);
            $stmt->execute();

            header ("location: album-tampil.php");
        }
    }

    public function getAlbum($id)
    {
        $sql = "SELECT * FROM tb_album WHERE album_id=:album_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam("album_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function editAlbum($id)
    {
        if (isset($_POST['btn-edit-album'])) {
            
            $foto_id = $_POST['foto-id'];
            $album_title = $_POST['album-title'];
            
            $sql = "UPDATE tb_album SET album_id_photo=:album_id_photo, album_title=:album_title WHERE album_id=:album_id";
            
            $stm = $this->db->prepare($sql);
            $stm->bindParam(":album_id", $id);
            $stm->bindParam(":album_id_photo", $foto_id);
            $stm->bindParam(":album_title", $album_title);
            $stm->execute();
            header('location: album-tampil.php');
        }    
    }

    public function hapusAlbum($id)
    {
        if (isset($_GET['id'])) {
                
            $sql = "DELETE FROM tb_album WHERE album_id=:album_id";
               
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":album_id", $id);
            $stmt->execute();
         
            header("location: album-tampil.php");
        }
    }
}
