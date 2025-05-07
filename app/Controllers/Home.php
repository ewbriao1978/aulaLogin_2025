<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function showLogin(): string
    {
        return view('login');
    }

    public function registerUser(): string
    {
        return view('register');
    }
    public function registerUserInDataBase()
    {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ];
        var_dump($data);
        // Proxima Aula: 
        // 1. Criar o Model
        // 2. Criar o método de inserir no banco de dados
        // 3. Criar o método de autenticar o usuário
        // 4. Criar o método de logout

    }
}
