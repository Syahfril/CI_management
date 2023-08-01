<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function save()
    {
        $userModel = new UserModel();

        // Validate the form input
        $validationRules = [
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Save the user
        $userModel->save([
            'name' => $this->request->getVar('name'),
            'position' => $this -> request->getVar('position'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('login')->with('success', 'Registration successful. Please log in.');
    }
}
