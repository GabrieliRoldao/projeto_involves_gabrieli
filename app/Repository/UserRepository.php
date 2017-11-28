<?php

namespace App\Repository;

use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use DB;

class UserRepository
{
    public function saveUser(array $data)
    {
        try{
            DB::beginTransaction();
            $avatar = Image::make($data['avatar'])->resize(380, 500)->encode($data['avatar']->getClientOriginalExtension());
            $avatarName = time().'_'.$data['avatar']->getClientOriginalName();;

            $user = new User();
            $user->name  = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->birthday = $data['birthday'];
            $user->avatar = $avatarName;
            $path = public_path('avatares/' . $avatarName);
            //Storage::disk('local')->put('avatares/'.$avatarName, $avatar);
            $avatar->save($path);
            $user->save();

            DB::commit();
            return ['status' => 'success', 'obj' => $user];
        } catch (\Exception $e) {
            DB::rollback();
            return ['status' => 'error', 'message' => 'Erro ao salvar dados'];
        }
    }

    public function users()
    {
        $users = \App\Models\User::orderBy('created_at', 'desc')->paginate(5);
        return $users;
    }

    public function findUser(int $id)
    {
        $user = \App\Models\User::find($id);
        return $user;
    }
}