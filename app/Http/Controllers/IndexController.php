<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserAccount;

class IndexController extends Controller
{
    public function index (){
        $user = User::find(1)->account;
        $user_account = UserAccount::find(1)->user;
        dd($user, $user_account);
    }
}
