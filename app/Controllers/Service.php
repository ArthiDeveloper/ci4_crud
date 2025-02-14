<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ServiceDetModel;

class Service extends BaseController
{
	protected $serviceDetModel;

    // Constructor
    public function __construct()
    {
        // Load the UserDetModel
        $this->serviceDetModel = new ServiceDetModel();

        // Load the form helper
        helper('form');
    }
    public function index()
    {
        $data['title']    = 'List Of Services';
        $data['services'] = $this->serviceDetModel->findAll();
        // $data      = $userModel->select('name,mobile,email')->where('user_type','user')->find();
        if(!empty($data)){
        	return view('service/service_list',$data);
        }else{
        	return view('service/service_list');
        }
    }

    public function createService()
    {
        return view('service/service_detail');
    }

    public function addService()
    {
        $rules = [
            'sname' => 'required|min_length[5]|max_length[70]',
            'cold' => 'required|min_length[1]|max_length[3]|numeric',
            'warm' => 'required|min_length[1]|max_length[3]|numeric',
            'hot'  => 'required|min_length[1]|max_length[3]|numeric',
            'sdescription' => 'required'
        ];
          
        if($this->validate($rules)){
            $this->data = [
                'service_name' => $this->request->getVar('sname'),
                'cold'  => $this->request->getVar('cold'),
                'warm'  => $this->request->getVar('warm'),
                'hot'   => $this->request->getVar('hot'),
                'service_description'    => $this->request->getVar('sdescription'),
            ];
            $this->serviceDetModel->save($this->data);
            return redirect()->to('serviceList');
        }else{
            $this->data['validation'] = $this->validator;
            return view('service/service_detail', $this->data);
        }
    }

    public function editService($id)
    {
    	$data['service'] = $this->serviceDetModel->find($id);
        return view('service/service_detail', $data);
    }

    public function delService($id)
    {
        $this->serviceDetModel->delete($id);
        return redirect()->to('/serviceList');
    }
}
