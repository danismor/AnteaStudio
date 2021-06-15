<?php 
namespace App\Validation;
use App\Models\ModelUtenti;

class UtentiRules{
    public function validateUser(string $str, string $campi, array $data){

        $model = new ModelUtenti();
        $user= $model->where('username',$data['username'])->first();

        if(! $user){
            return false;
        }
       // return password_verify($data['password'],$user['password']);
        return $data['password']==$user['password'];

    }

  
}