<?php 
namespace CareerCraft\Classes;
use CareerCraft\Classes\DB;

class Jobs{

    private $connect;

    public function __construct(){
        $db = new DB();
        $this->connect  = $db->connection();
    }

    public function create( $employer_id, $title, $description, $location, $salary_range, $job_type){

        $statement =  $this->connect->prepare("
            INSERT INTO cc_jobs  (employer_id, title, description, location, salary_range, job_type)
            VALUE (?, ?, ?, ?, ?, ?)
        ");

        $statement->execute([
            $employer_id,
            $title,
            $description,
            $location,
            $salary_range,
            $job_type
        ]);

        if( $statement->rowCount() > 0 ){
            Helper::redirect('../../index.php?add=true');
        }
    }

    public function update(){

    }

    public function delete(){

    }

    public function get(){

    }
}