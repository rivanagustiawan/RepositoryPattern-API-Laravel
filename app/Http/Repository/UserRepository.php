<?php
namespace App\Http\Repository;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


interface UserRepository
{
    public function create(Request $request);
    public function getAll();
    public function getById($id);
    public function update(Request $request, $id);
    public function destroy($id);
}

