<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Auth extends BaseController
{
    private $data;

    public function __construct()
    {
        helper(['form']);
        $this->session    = session();
        $this->data       = array();
        $this->userModel  = new UserModel();
    }

    public function index():string{

    	helper(['form']);
		return view('auth/login');
	}

	public function login(){

        $email         = $this->request->getVar('email');
        $password      = $this->request->getVar('password');

        $this->data['user']  = $this->userModel->where('email', $email)->first();
        
        if($this->data['user']){

            $pass = $this->data['user']['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $this->data['user']['id'],
                    'name' => $this->data['user']['name'],
                    'email' => $this->data['user']['email'],
                    'role' => $this->data['user']['user_type'],
                    'isLoggedIn' => TRUE
                ];
                $this->session->set($ses_data);
                if($this->session->get('role') == 'admin'){
                    return redirect()->to('/dashboard');
                }else{
                    return redirect()->to('/Udashboard');
                }
                
            
            }else{
                $this->session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }
        }else{
            $this->session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/register');
        }

	}

	public function register(){

        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'mobile'        => 'required|min_length[2]|max_length[50]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $this->data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'mobile'    => $this->request->getVar('mobile'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $this->userModel->save($this->data);
            return redirect()->to('/');
        }else{
            $this->data['validation'] = $this->validator;
            return view('auth/register', $this->data);
        }
	}


    public function dashboard()
    {
        return view('/admin_dashboard',array('title'=>'Admin Dashboard'));
    }

    public function unauthorized()
    {
        return view('errors/unauthorized');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }








}
