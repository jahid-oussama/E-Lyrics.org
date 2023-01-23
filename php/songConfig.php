<?php
require_once("dbConnect.php");



class songConfig
{

    public  $id;
    public  $artist;
    public $song_title;
    public $lyrics;
    public $user_id;
    public $dbCnx;

    public function __construct()
    {
        $this->dbCnx = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    // public function checkUser($email){
    //     try{
    //          $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email='$email'");
    //          $stm->execute();
    //          if($stm->fetchColumn()){
    //             return true;
    //          }
    //          else{
    //             return false;
    //          }
    //     }
    //     catch(Exception $e){
    //             return $e->getMessage();
    //     }
    // }

    public function insertData()
    {
        // var_dump($this);
        // die;

        try {
            // var_dump($this->artist);
            // die;
            for ($i = 0; $i < count($this->artist); $i++) {
                # code...
                $stm = $this->dbCnx->prepare("INSERT INTO songs(artist,song_title,lyrics,user_id) values(?,?,?,?)");
                $stm->execute([
                    $this->artist[$i],
                    $this->song_title[$i],
                    $this->lyrics[$i],
                    $_SESSION['id']
                ]);
            }
            header("location: ../home.php");
            // $lognin = new songpr();
            // $lognin->setEmail($_POST['email']);
            // $lognin->setPassword($_POST['password']);

            // $success = $lognin->lognin();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getData()
    {
        // var_dump($this);
        // die;


        // var_dump($this->artist);
        // die;

        # code...
        $stm = $this->dbCnx->prepare("SELECT * FROM `songs` ");
        $stm->execute();

        return $stm->fetchAll();
        // $lognin = new songpr();
        // $lognin->setEmail($_POST['email']);
        // $lognin->setPassword($_POST['password']);

        // $success = $lognin->lognin();





    }

    public function Delete()
    {
        $id = $_GET['delete'];

        $stm = $this->dbCnx->prepare("DELETE FROM `songs` WHERE id=$id");
        $stm->execute();
    }
    public function update()
    {
        // var_dump($this->artist[0]);
        // die;
        # code...
        $stm = $this->dbCnx->prepare("UPDATE `songs` SET `artist`=?,`song_title`=?,`lyrics`=?,`user_id`=? WHERE id = ?");
        $stm->execute([
            $this->artist[0],
            $this->song_title[0],
            $this->lyrics[0],
            $_SESSION['id'],
            $this->id
        ]);
        header("location: ../home.php");
    }

    public function CountSong()
    {
        $stm = $this->dbCnx->prepare("SELECT COUNT(artist) as count FROM songs");
        $stm->execute();
        return $stm->fetch();
    }
    // public function CountAdmin()
    // {
    //     $stm = $this->dbCnx->prepare("SELECT COUNT(artist) as count FROM users");
    //     $stm->execute();
    //     return $stm->fetch();
    // }
    public function CountArtist()
    {
        $stm = $this->dbCnx->prepare("SELECT count(DISTINCT artist) as count FROM songs");
        $stm->execute();
        return $stm->fetch();
    }

}
