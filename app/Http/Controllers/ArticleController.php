<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{


    public function createArticle()
    {

        $validator = Validator::make(request()->all(), [
            'title' => 'required|min:3|max:100',
            'body' => 'required|min:10|max:255'
        ],[
            'title.required'=>'لطفا عنوان را وارد کنید',
            'title.min'=>'طول عنوان باید بیشتر از 2 کاراکتر باشد',
            'title.max'=>'طول عنوان نباید بیشتر از 100 کاراکتر باشد',
            'body.required'=>'لطفا متن را وارد کنید',
            'body.min'=>'طول عنوان باید بیشتر از 9 کاراکتر باشد',
            'body.max'=>'طول عنوان نباید بیشتر از 255 کاراکتر باشد',
        ]);



        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }


        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->save();


        return redirect('/articles/all');
    }


    public function insertArticle()
    {
        return view('form');
    }


    public function getArticles(){
        $articles= Article::all();
        return view('articles',['articles' => $articles]);
    }


    public function deleteArticle($id){

        $article = Article::find($id);
  //       dd($article);
        $article->delete();

        return redirect()->back();

    }


    public function editArticle($id){

        $article = Article::find($id);
       return view('articleEdit',['article'=>$article]);
    }



    public function updateArticle($id){
        $article = Article::find($id);

        $article->title = request()->title;
        $article->body = request()->body;
        $article->save();

        return redirect('/articles/all');
    }

}
