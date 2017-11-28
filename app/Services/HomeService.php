<?php

namespace App\Services;

use App\Repository\UserRepository;

class HomeService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function allUsers()
    {
        $users = $this->userRepository->users();
        return $users;
    }

    public function findUser(int $id)
    {
        $user = $this->userRepository->findUser($id);

        if (! $user) {
            return ['status' => 'error', 'message' => 'Usuário não encontrado'];
        }
        return $user;
    }

    public function avatar(string $name)
    {
        $avatar = \Storage::disk('public')->url('/avatares/'.$name);
        return $avatar;
    }

}