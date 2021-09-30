<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\FbPost;

class FbPostController extends Controller
{
    public function postAdd(){
        $post = New FbPost();
        $post->tilte = "1 st post tilte";
        $post->text = "1 st post body";
        $post->save();
        return "post has been added";
    }
    public function commentsAdd($id){
        $post = FbPost::find($id);
        $comments = new Comments();
        $comments->comments = '1st post comments';
        $post->comments()->save($comments);
        return "post comments addedd";
    }
}
