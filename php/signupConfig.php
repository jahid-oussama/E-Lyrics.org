<?php
require_once("dbConnect.php");
include("logninConfig.php");



class signupConfig{

    private $id;
    private $email;
    private $username;
    private $password;
    protected $dbCnx;

    // public function __construct($id=0 ,$email="" ,$username="" ,$password=""){
    public function __construct($email="" ,$username="" ,$password=""){
        // $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

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

    // public function setUsername($username)
    // {
    //     $this->username = $username;
    // }
    // public function getUsername()
    // {
    //     return $this->username;
    // }

    // public function setPassword($password)
    // {
    //     $this->password = $password;
    // }
    // public function getPassword()
    // {
    //     return $this->password;
    // }

    public function checkUser($email){
        try{
             $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email='$email'");
             $stm->execute();
             if($stm->fetchColumn()){
                return true;
             }
             else{
                return false;
             }
        }
        catch(Exception $e){
                return $e->getMessage();
        }
    }

    public function insertData()
    {

        try {
            $stm = $this->dbCnx->prepare("INSERT INTO users(email,username,password) values(?,?,?)");
            $stm->execute([$this->email,$this->username,md5($this->password)]);

            $lognin = new logninConfig($_POST['email'],$_POST['password']);
            // $lognin->setEmail($_POST['email']);
            // $lognin->setPassword($_POST['password']);

            $success = $lognin->lognin();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
