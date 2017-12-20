<?php

namespace App\Http\Controllers;


use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //



        public function saveArticle(Request $request){


            $article= new Blog();

            $article['user_id']=Auth::user()->getid();
            echo $article['title']=$request->title;
            echo $article['description']=$request->description;

            $files=$request->file('file');
            $name = $files->getClientOriginalName();
            $path = $files->move($request['title'], $name);
            $article['path'] = $path;

                $article->save();

                return redirect('/myarticles');
        }


        public function showAll(){

                    $id=Auth::user()->getid();


            $articles= Blog::where('user_id','=',$id)->get();

//             echo $articles[0]->title;








            //            $articles=Blog::where('user_id','=',$id);


           return view('user.blog.myarticles',compact('articles'));
//

        }

        public function editArticle(){



        }





}
