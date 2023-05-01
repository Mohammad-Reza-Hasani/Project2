<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function creatComments()
    {

        $data = [
          //  ['comment' =>'This Comment from Ahmad','user_id'=>'2'],
            ['comment' =>'This Comment from Reza','user_id'=>'3'],
          //  ['comment' =>'This Comment from Ali','user_id'=>'1'],
        ];

       Comment::insert($data);

     /* $comment = new Comment($data);
      $comment->saveMany();*/


        return Comment::all();

    }



    public function getComments(){
        $comments = Comment::all();
        return view('comments',['comments' => $comments]);
    }

}
