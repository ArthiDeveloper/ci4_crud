<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;
use App\Models\UserDetModel;
use App\Models\ServiceDetModel;

class User extends BaseController
{
    protected $userDetModel;

    // Constructor
    public function __construct()
    {
        // Load the UserDetModel
        $this->userDetModel = new userDetModel();
        $this->serviceDetModel = new ServiceDetModel();

        // Load the form helper
        helper(['form']);
    }
    
    public function index()
    {
        $userModel = new UserModel();
        $data['title'] = 'List Of Users';
        // $data['users'] = $userModel->findAll();
        $data['users'] = $userModel->select('name,mobile,email,created_at,status')->where('user_type','user')->find();
        if(!empty($data)){
        	return view('users/user_list',$data);
        }else{
        	return view('users/user_list');
        }
    }

    public function createUser()
    {
        $data['services'] = $this->serviceDetModel->findAll();
        return view('users/user_details', $data); 
    }

    public function serviceDesc()
    {
        if ($this->request->isAJAX()) {
            $serviceId = $this->request->getPost('service_id');
            $data = $this->serviceDetModel->where('id', $serviceId)->find();
            return $this->response->setJSON($data);
        }
    }

    public function addUser()
    {
        $rules = [
            'uname' => 'required|min_length[3]|max_length[70]',
            'uemail' => 'required|min_length[12]|max_length[100]|valid_email',
            'umobile' => 'required|min_length[10]|max_length[12]',
            'advers' => 'required',
            'cname'  => 'required|min_length[4]|max_length[150]',
            'caddress' => 'required|min_length[10]',
            'gstNum'   => 'required|min_length[15]|max_length[15]',
            'fssaiNum' => 'required|min_length[14]|max_length[14]',
            'service'  => 'required',
            'expdate'  => 'required',
            'servicedesc' => 'required'
        ];
          
        if($this->validate($rules)){
            $this->data = [
                'name'      => $this->request->getVar('uname'),
                'email_id'  => $this->request->getVar('uemail'),
                'mobile_num'  => $this->request->getVar('umobile'),
                'requirement' => $this->request->getVar('advers'),
                'company_name'=> $this->request->getVar('cname'),
                'company_address' => $this->request->getVar('caddress'),
                'gst_num'     => $this->request->getVar('gstNum'),
                'fssai_num'   => $this->request->getVar('fssaiNum'),
                'service_id'   => $this->request->getVar('service'),
                'expire_date'   => $this->request->getVar('expdate'),
                'service_desc' => $this->request->getVar('servicedesc'),
            ];
            $this->userDetModel->save($this->data);
            return redirect()->to('userList');
        }else{
            $this->data['validation'] = $this->validator;
            $this->data['services'] = $this->serviceDetModel->findAll();
            return view('users/user_details', $this->data); 
        }
    }
}
