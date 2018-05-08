<?php 

namespace App\Http\Controllers;


use App\Article;
use Symfony\Component\HttpFoundation\Request;

class ArticleController
{
    public function index()
    {
//        $article = Article::find(1)->user;
//        dd($article);
        $articles = Article::paginate(5);
        $ts ='liang';
        return view('article.index',['articles' => $articles,'ts'=>$ts]);
    }
    public  function create()
    {
      return view('article.create');
    }
    public function update($id){

    }
    public function save(Request $request)
    {

    $data = $request->input('Article');
//    var_dump($data); exit();
    $article = new Article;
    $article->title = $data['title'];
    $article->content = $data['content'];

    $article->created_by=1;
    if($article->save()){
       return redirect('article/index');
    } else {
        return redirect()->back();
    }
    }
    public function view($id){

    }

    public function delete($id){

    }




}

 ?>