<?php 
namespace CareerCraft\Classes;
use CareerCraft\Classes\DB;
use CareerCraft\Classes\Helper;

class User{

    private $connect;
    
    public function __construct( ){
        $db = new DB();
        $this->connect  = $db->connection();
    }

    public function register($name, $email, $password, $type){

        $statement = $this->connect->prepare("INSERT INTO cc_user (name, email, password, user_type) VALUE (?, ?, ?, ?)");

        $statement->execute([
            $name,
            $email,
            password_hash($password, PASSWORD_BCRYPT),
            $type
        ]);

        if( $statement->rowCount() > 0 ){
            Helper::redirect('../../login.php?register=true');
        }else{
            Helper::redirect('../../login.php?register=false');
        }
        
        return true;
    }

    public function login( $email, $password ){
        $statement = $this->connect->prepare("SELECT id, name, email, password FROM cc_user WHERE email = ?");

        $statement->execute([
            $email
        ]);

        $user = $statement->fetch(\PDO::FETCH_ASSOC);

        if( $user && password_verify($password, $user['password'])){
            session_start();

            $_SESSION['user_id']        = $user['id'];
            $_SESSION['user_name']      = $user['name'];
            $_SESSION['user_email']     = $user['email'];
            $_SESSION['user_type']      = $user['user_type'];
            $_SESSION['is_logged_in']   = true;

            Helper::redirect('../../index.php');
        }else{
            Helper::redirect('../../login.php?login=false');
        }
    }
}
