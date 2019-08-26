<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Blogcategorias;
use App\Model\Admins;
use App\Http\Requests;

class BlogsController extends FrontendController
{
   public function index()
   {
            $postagens = DB::table('blog')->where('status', 1)->get();
   	      return view("frontend/blogs/index", array("postagens"=>$postagens));
   }

   public function show($id){
            $blogs = DB::table('blog')->where('status', 1)->get();
            $postagens = DB::table('blog')->where('slug', $id)->get();
            $usuario   = DB::table('admins')->where('admins_id', $postagens[0]->users_id)->get();
            return view("frontend/blogs/show", array("postagens"=>$postagens, "usuario"=>$usuario, "blogs"=>$blogs));
   }

   public function pesquisa($id){
            $categoria = DB::table('blogcategorias')->where('slug', $id)->get();   
            $postagens = DB::table('blog')->where('blogcategorias_id', $categoria[0]->blogcategorias_id)->get();
            $usuario   = DB::table('admins')->where('admins_id', $postagens[0]->users_id)->get();
            return view("frontend/blogs/index", array("postagens"=>$postagens, "usuario"=>$usuario));
      }
}
