<?php
spl_autoload_register(function ($class) {
    require_once strtolower($class) . ".php";
});
class Login_controller extends dbcon
{
    private $Email;
    private $pwd;
    // public function __construct($Email,$pwd){
    //   $this->pwd=$pwd;
    //   $this->Email=$Email;
    // }
    public function ErrorMessage()
    {
        if (empty($this->Email) || empty($this->pwd)) {
            throw new Inputerror("fields cannot be empty");
        }
    }
    public function validateInputWithRegex()
    {
     if(preg_match("//",$this->Email) && preg_match("/^[A-Za-z0-9]+[!@#$%&*_-]*$/",$this->pwd)){

     }
    }
    public function sanitizingEmial()
    {
        $sanitizedEmail = filter_var($this->Email, FILTER_SANITIZE_EMAIL);
        return $sanitizedEmail;
    }
    public function sanitizingPwd()
    {
        $sanitizedInput = filter_var($this->pwd, FILTER_SANITIZE_SPECIAL_CHARS);
        return $sanitizedInput;
    }
    public function UserAuthentication()
    {
        $dbclass = new dbcon;
        $connection = $dbclass->dbconnection();
        $query = "SELECT *  FROM adminusers WHERE email=:email AND Pwd=:pwd";
        $stmt = $connection->prepare($query);
        $stmt->bindValue("email", $this->Email);
        $stmt->bindValue("email", $this->pwd);
        $stmt->execute();
        return $result = $stmt->rowCount();
    }
}