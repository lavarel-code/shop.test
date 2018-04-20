<?php
/**
 * Created by PhpStorm.
 * User: cheremhovo
 * Date: 19.04.18
 * Time: 18:30
 */

namespace App\Http\Controllers\Api\Cp;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {
        $user = User::new(
            $request->post('name'),
            $request->post('email'),
            $request->post('password')
        );

        $user->save();
    }
}