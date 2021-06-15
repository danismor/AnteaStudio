<?php

namespace App\Controllers;
use App\Models\ModelUtenti;

class Utenti extends BaseController
{
	public function index()
	{
		$data=[];
		helper(['form']);


		if($this->request->getMethod()=='post'){
			$check=[
				'username' => 'required|min_length[3]|max_length[20]',
				'password'=> 'required|min_length[4]|max_length[20]|validateUser[username,password]',	
			];

			$errors=[
				'password'=> [
					'validateUser'=>'Credenziali non valide: controlla username e password'
				]
			];

			if (!$this->validate($check,$errors)){
				$data['validation']=$this->validator;
			}else{
			
				$model = new ModelUtenti();
				$user = $model->where('username',$this->request->getVar('username'))->first();
				$this->setUserSession($user);
			
				// $session->setFlashData('success','registrazione effettuata con successo');
				 return redirect()->to('dashboard');


			}

		}

		echo view("templates/header", $data);
		echo view("login");
		echo view("templates/footer");

	}

	private function setUserSession($user){
		$data = [
			'id'=> $user['id'],
			'nome'=> $user['nome'],
			'cognome'=> $user['cognome'],
			'email'=> $user['email'],
			'username' =>$user['username'],
			'password'=>$user['password'],
			'loggato'=> true
		];

		session()->set($data);
		return true;		
	}
	
	 public function register (){
		$data=[];
		helper(['form']);

		if($this->request->getMethod()=='post'){
			$check=[
				'nome'=> 'required|min_length[3]|max_length[20]',
				'cognome' => 'required|min_length[3]|max_length[20]',
				'email'=> 'required|min_length[3]|max_length[30]|valid_email|is_unique[users.email]',
				'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
				'password'=> 'required|min_length[4]|max_length[20]',
				'password_conf'=> 'matches[password]',
			];

			if (! $this->validate($check)){
				$data['validation']=$this->validator;
			}
			else{
				$model = new ModelUtenti();
				$newData=[
					'nome'=>$this->request->getVar('nome'),
					'cognome'=>$this->request->getVar('cognome'),
					'email'=>$this->request->getVar('email'),
					'username'=>$this->request->getVar('username'),
					'password'=>$this->request->getVar('password'),

				];
				$model->save($newData);
				$session=session();
				$session->setFlashData('success','registrazione effettuata con successo');
				return redirect()->to('/');

			}

		}
		
		echo view("templates/header", $data);
		echo view("register");
		echo view("templates/footer");
	} 

	public function listaUtenti(){
		$data=[];
		helper(['form']);
		$model = new ModelUtenti();
	    $data['users']=$model->stampaListaUtenti();
		return view("listaUtenti",$data);

		echo view("templates/footer");
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}
}
