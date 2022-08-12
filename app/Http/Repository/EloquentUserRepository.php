<?php

namespace App\Http\Repository;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Repository\UserRepository;

class EloquentUserRepository implements UserRepository{

    public function getAll(){
        return User::all();
    }

    public function getById($id){
        return User::find($id);
    }

    public function destroy($id){
        return User::destroy($id);
    }

    public function create(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return $user;
    }

    public function update(Request $request, $id){

        $user = User::where('id', $id)->update([
            'email' => $request->email,
        ]);

        return $user;
    }

}