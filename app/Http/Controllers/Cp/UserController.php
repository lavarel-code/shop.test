<?php
/**
 * Created by PhpStorm.
 * User: cheremhovo
 * Date: 16.04.18
 * Time: 19:50
 */

namespace App\Http\Controllers\Cp;


use App\Http\Controllers\Controller;
use App\User;

/**
 * Class UserController
 * @package App\Http\Controllers\Cp
 */
class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('cp.user.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('cp.user.create');
    }

    public function show(User $user)
    {
        return $user->id;
    }
}