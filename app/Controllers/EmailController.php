<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmailsModel;

class EmailController extends BaseController
{
    public function __construct()
    {
        $this->emailModel = new EmailsModel();
    }

    public function index()
    {
        return view('input/index');
    }

    public function create()
    {
        try{
            $validation=$this->validate([
                'email'=>'is_unique[emails.email]',
            ],
        );
       if(!$validation){
           return view ('/input/gagal');
       }
       else{
      
        $payload = [
            "id" => uniqid(),
            "name" => $this->request->getPost('name'),
            "email" => $this->request->getPost('email'),
        ];

        $this->emailModel->insert($payload);
        return view ('/input/berhasil');
    }
        }
    catch(\Exception $e) {
        return redirect()->to(previous_url());
    }
    }
    
}
