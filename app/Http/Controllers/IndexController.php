<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserAccount;
use App\Models\Post;
use App\Models\Role;
use App\Models\Country;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Tag;

class IndexController extends Controller
{
    public function index(){
        return view('relationships.index');
    }

    public function oneToOne(){
        $user_account = User::find(1)->getAccount;
        $user = UserAccount::find(1)->user;
        dd($user_account, $user);
    }

    public function oneToMany(){
        $post = User::find(1)->getPosts;
        //如果我们想增加更多的附加条件，可以使用posts()方法，这样仍然支持链式。
        $post2 = User::find(1)->getPosts()->where('title','vitae')->get();
        //区分user和user2的区别
        $user = Post::find(1)->user;
        $user2 = Post::find(1)->user();
        //注意author方法的话，需要增加键的限制
        $author = Post::find(1)->author;
        dd($post, $post2, $user, $user2, $author);
    }

    public function manyToMany(){
        $roles = User::find(1)->getRoles;
        $users = Role::find(1)->getUsers;
        //通过动态属性pivot获取中间表字段
        foreach ($roles as $role) {
            $pivot = $role->pivot->role_id;
            echo $pivot . '<br>';
        }
        dd($roles, $users);
    }

    public function hasManyThrough(){
        $country = Country::find(1);
        $posts = $country->getPostsThroughUser;

        echo 'Country#'.$country->name.'下的文章：<br>';
        foreach($posts as $post){
            echo '&lt;&lt;'.$post->title.'&gt;&gt;<br>';
        }
    }

    public function polymorphicRelations(){
        $video = Video::find(1);
        $videoComments = $video->comments;
        $comment = Comment::find(1);
        $item = $comment->item;
        $item2 = $comment->getItem;
        dd($videoComments, $item, $item2);
    }

    public function manyToManyPolymorphicRelations(){
        $post = Post::find(1);
        $tags = $post->tags;
        $tag = Tag::find(1);
        $posts = $tag->posts;
        dd($tags, $posts);
    }

}

