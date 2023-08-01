<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
    
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
    
        if ($user && password_verify($password, $user['password'])) {
            // Start a session using the session() helper function
            $session = session();
    
            // Set session variables
            $session->set('greeting', "Hello, " . $user['name']);
            $session->set('userId', $user['id']);
    
            // Redirect to 'Adm' or any other desired page
            return redirect()->to('Adm')->with('success', 'Login successful.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        // Destroy the session
        session()->destroy();

        // Redirect to the login page
        return redirect()->to('/login');
    }

    
    
}
