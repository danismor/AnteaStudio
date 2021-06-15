<?php namespace App\Models;

use CodeIgniter\Model;

Class ModelUtenti extends Model{
    protected $table='users';
    protected $allowedFields=['nome','cognome','email','username','password'];
    protected $hashing = ['hashing'];

//da verificare, non funziona
 public function hashing(array $data){
    if(isset($data['data']['password'])){
        $data['data']['password']=password_hash($data['data']['password'],PASSWORD_BCRYPT);
    }
    return $data;
} 


public function stampalistaUtenti(){
    $db=\Config\Database::connect();
    $query=$db->query('select nome,cognome,email from users');
    $result=$query->getResult();
    if(count($result)>0){
        return $result;
    }
    else{
        return false;
    }
}

}

