<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\ProdutosModel;

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
            'nome' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ];
        $users_model = new UsersModel();
        if($users_model->save($data)){
            return redirect()->to('/')->with('success', 'Usuário cadastrado com sucesso');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar usuário');
        }

        // Proxima Aula: 
    
        // 3. Criar o método de autenticar o usuário
        // 4. Criar o método de logout

        // COMO FAÇO PARA PEGAR VÁRIOS PRODUTOS DE UM MESMO CLIENTE?
        //$produtoModel = new ProdutoModel();
        //$dados['produtos'] = $produtoModel->where('id_usuario', $idCliente)->findAll();

    }

    public function loginUser(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    

        $users_model = new UsersModel();
        $user = $users_model->where('nome', $username)->first();
        // select * from users where nome = $username

        if ($user && password_verify($password, $user['password'])) {
            // Autenticação bem-sucedida
            $this->session->set('user_id', $user['id']);
            $this->session->set('nome', $user['nome']);
            $this->session->set('email', $user['email']);
            if ($user['nome']=="adm@adm.org"){
                return redirect()->to('/home_adm')->with('success', 'Login bem-sucedido');
            }else{
                return redirect()->to('/home')->with('success', 'Login bem-sucedido');
            }
        } else {
            // Falha na autenticação
            return redirect()->back()->with('error', 'Usuário ou senha inválidos');
            
        }
    }


    public function enterMyHome(): string
    {    
        $userId = $this->session->get('user_id');
        $produtosModel = new ProdutosModel();
        $data['produtos_do_usuario'] = $produtosModel->where('id_usuario', $userId)->findAll();
        return view('myHome', $data);
    }

    public function logoutUser()
    {
        $this->session->destroy();
        return redirect()->to('/')->with('success', 'Logout realizado com sucesso');
    }


    public function enterMyHomeAdm(): string
    {    
        
        return view('myHomeAdm');
    }



}
