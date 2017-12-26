<?php

namespace App\Http\Controllers;


use App\Blog;
use App\Property;
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


        public function blogDetail($id){
            $article=Blog::where("id",'=',$id)->get();
            return view('partials.MarketDetails',compact('article'));
         }

        public function approvedArticles(){

             $id=Auth::user()->getid();
             $articles= Blog::where('user_id','=',$id)->where('status','=',1)->get();

             $result=$this->usermenu();


             return view('user.blog.myarticles',compact('articles','result'));

         }


        public function disapprovedArticles(){

                $id=Auth::user()->getid();
                $articles= Blog::where('user_id','=',$id)->where('status','=',0)->get();
                 $result=$this->usermenu();
                return view('user.blog.myarticles',compact('articles','result'));

        }

        public function showAll(){  // user articles

            $id=Auth::user()->getid();
            $articles= Blog::where('user_id','=',$id)->get();
           return view('user.blog.myarticles',compact('articles'));
//
        }

        public function editArticle($id){

            $data = Blog::where('id','=',$id)->get();

            return view('user.blog.editarticle',compact('data'));
        }

        public function allBlogs(){ //market analysis All Blogs

            $articles=Blog::paginate(2);

            return view('partials.MarketAnalysis',compact('articles'));
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
