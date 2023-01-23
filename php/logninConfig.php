<?php
require_once "dbConnect.php";

class logninConfig
{


    // private $id;
    private $email;
    private $password;
    protected $dbCnx;

    // public function __construct($id=0 ,$email="" ,$password=""){
    public function __construct($email = "", $password = "")
    {
        // $this->id = $id;
        $this->email = $email;
        $this->password = $password;

        $this->dbCnx = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    // public function setId($id)
    // {
    //     $this->id = $id;
    // }
    // public function getId()
    // {
    //     return $this->id;
    // }

    // public function setEmail($email)
    // {
    //     $this->email = $email;
    // }
    // public function getEmail()
    // {
    //     return $this->email;
    // }

    // public function setPassword($password)
    // {
    //     $this->password = $password;
    // }
    // public function getPassword()
    // {
    //     return $this->password;
    // }

    public function fetchAll()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function lognin()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email=? AND password=?");
            $stm->execute([$this->email, md5($this->password)]);
            $user = $stm->fetchAll();
            if (count($user) > 0) {
                $_SESSION['id'] = $user[0]['id'];
                $_SESSION['email'] = $user[0]['email'];
                $_SESSION['password'] = $user[0]['password'];
                // var_dump($user);
                // var_dump($_SESSION);
                // die;
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function CountAdmin()
    {
        $stm = $this->dbCnx->prepare("SELECT COUNT(id) as count FROM users");
        $stm->execute();
        return $stm->fetch();
    }
}
