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



           return view('user.blog.myarticles',compact('articles'));
//
        }

        public function editArticle($id){

            $data = Blog::where('id','=',$id)->get();

            return view('user.blog.editarticle',compact('data'));
        }


        public function updateArticle(Request $request){

            $article_id= $request['article_id'];
//            $feature_id = $request['feature_id'];

//            ($files=$request->file('file'));
//            $name = $files->getClientOriginalName();
//            $path = $files->move($request['title'], $name);
////            $update['path'] = $path;

            if( ($files=$request->file('file'))  ){
                $name = $files->getClientOriginalName();
                $path = $files->move($request['title'], $name);
//                $update['path'] = $path;
            }


            else{
                $path = $request->path;
            }



            Blog::where('id','=',$article_id)->update(['title'=> $request['title'],'description'=>$request['description'],
                'path'=> $path ]);

            return redirect('/myarticles');
        }
}
