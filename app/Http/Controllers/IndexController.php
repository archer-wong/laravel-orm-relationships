<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserAccount;
use App\Models\Post;

class IndexController extends Controller
{
    public function index(){
        return view('relationships.index');
    }

    public function oneToOne(){
        $user_account = User::find(1)->account;
        $user = UserAccount::find(1)->user;
        dd($user_account, $user);
    }

    public function oneToMany(){
        $post = User::find(1)->posts;
        //如果我们想增加更多的附加条件，可以使用posts()方法，这样仍然支持链式。
        $post2 = User::find(1)->posts()->where('title','vitae')->get();
        //区分user和user2的区别
        $user = Post::find(1)->user;
        $user2 = Post::find(1)->user();
        //注意author方法的话，需要增加键的限制
        $author = Post::find(1)->author;
        dd($post, $post2, $user, $user2, $author);
    }

    public function manyToMany(){
        $user_account = User::find(1)->account;
        $user = UserAccount::find(1)->user;
        dd($user_account, $user);
    }

}

