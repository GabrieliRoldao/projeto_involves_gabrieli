<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use \App\Repository\UserRepository;

class RegisterService
{
    private $userActions;

    public function __construct()
    {
        $this->userActions = new UserRepository();
    }

    public function validateUser(array $user)
    {
        $validacao = Validator::make($user, $this->regras(), $this->mensagens());
        if ($validacao->fails()) {
            return ['status' => 'error', 'obj' => $validacao];
        }

        $save = $this->userActions->saveUser($user);
        return $save;
    }


    private function regras()
    {
        return [
            'name'     => 'required|max:50|string',
            'email'    => 'required|string|email|max:255|unique:users',
            'birthday' => 'required|date_format:Y-m-d',
            'avatar'   => 'file|required',
            'password' => 'required|string|min:6|confirmed'
        ];
    }

    private function mensagens()
    {
        return [
            'name.required'  => 'Por favor, preencha o seu nome',
            'email.required' => 'Por favor, preencha o campo email',
            'birthday.required' => 'Por favor, preencha o campo de Data de nascimento',
            'avatar.required' => 'Por favor, envie uma foto.',
            'file' => 'Os formatos válidos são: jpeg, jpg ou png',
            'email' => 'Por favor, insira um email válido',
            'confirmed' => 'As senhas não batem',
            'min' => 'A senha deve conter no mínimo 6 caractéres'
        ];
    }


}