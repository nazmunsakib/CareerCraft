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
        $user_name      = Helper::sanitizeInput($name, 'string');
        $user_email     = Helper::sanitizeInput($email, 'email');
        $user_password  = Helper::sanitizeInput($password, 'password');
        $user_type      = Helper::sanitizeInput($type, 'user_type');

        if( $user_name && $user_email && $user_password && $user_type ){
            $statement = $this->connect->prepare("INSERT INTO cc_user (name, email, password, user_type) VALUE (?, ?, ?, ?)");

            $statement->execute([
                $user_name,
                $user_email,
                password_hash($user_password, PASSWORD_BCRYPT),
                $user_type
            ]);
    
            if( $statement->rowCount() > 0 ){
                Helper::redirect('../../login.php?register=true');
            }
        }else{
            Helper::redirect('../../login.php?register=false');
            exit();
        }
    }

    public function login( $email, $password ){
        $user_email     = Helper::sanitizeInput($email, 'email');
        $user_password  = Helper::sanitizeInput($password, 'password');

        if( $user_email && $user_password ){
            $statement = $this->connect->prepare("SELECT id, name, email, password FROM cc_user WHERE email = ?");

            if( !$statement->execute([$email]) || $statement->rowCount() == 0  ){
                $statement = null;
                Helper::redirect('../../login.php?login=false');
                exit();
            }
    
            $user = $statement->fetch(\PDO::FETCH_ASSOC);
    
            if( $user && password_verify($password, $user['password'])){
                session_start();
    
                $_SESSION['user_id']        = $user['id'];
                $_SESSION['user_name']      = $user['name'];
                $_SESSION['user_email']     = $user['email'];
                $_SESSION['user_type']      = $user['user_type'];
                $_SESSION['is_logged_in']   = true;
    
                Helper::redirect('../../login.php?login=true');
            }else{
                Helper::redirect('../../login.php?login=false');
                exit();
            }
        }else{
            Helper::redirect('../../login.php?login=false');
            exit();
        }
    }
}
