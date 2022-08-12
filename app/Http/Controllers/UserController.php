<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Repository\EloquentUserRepository;

class UserController extends Controller
{
    private $eloquentUser;

    public function __construct(EloquentUserRepository $eloquentUser)
    {
        $this->eloquentUser = $eloquentUser;
    }

    public function index(){

        $user = $this->eloquentUser->getAll();

        return $user;
    }

    public function show($id){

        $user = $this->eloquentUser->getById($id);

        return $user;
    }

    public function destroy($id){

        $user = $this->eloquentUser->destroy($id);

        return "User deleted !";
    }

    public function store(UserRequest $request){
        
        $user = $this->eloquentUser->create($request);

        return $user;
    }

    public function update(UserUpdateRequest $request, $id){
        
        $user = $this->eloquentUser->update($request, $id);

        return $user;
    }
}
