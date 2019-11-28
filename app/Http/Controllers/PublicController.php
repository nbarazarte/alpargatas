<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
     
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('indexSmarty');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function mercados()
    {

        return view('mercados');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function nosotros()
    {

        return view('nosotros');
    }   

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function noticias()
    {

        return view('noticias');
    }   

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutoriales()
    {

        $tutoriales = DB::table('tbl_tutorial as t')
        ->where('t.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('t.bol_eliminado', '=', 0);
        })
        ->select( 't.id', 't.created_at as fecha','t.str_titulo','t.str_video','t.str_post','t.str_src','t.blb_img1')

        ->orderBy('t.id', 'desc')
        ->get();  

        //dd($tutoriales);die();
        return view('tutoriales', ['tutoriales' => $tutoriales]);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutorialesAjax($id)
    {

        $tutoriales = DB::table('tbl_tutorial as t')
        ->where([
            ['t.str_estatus', '=' ,'activo'],
            ['t.bol_eliminado', '=', 0],
            ['t.id', '=', $id],
        ])
        ->select( 't.id', 't.created_at as fecha','t.str_titulo','t.str_video','t.str_post','t.str_src')
        ->orderBy('t.id', 'desc')
        ->get();
        //dd($tutoriales);die();
        return view('tutoriales-ajax',['tutoriales' => $tutoriales]);
    }     

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {

        $posts = DB::table('tbl_post as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.id','p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_post', 'p.str_post_resumen','p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')

        ->orderBy('p.id', 'desc')
        ->get();  

        $categorias = DB::table('tbl_categorias_post as cat')
        ->join('tbl_post as p', 'p.id', '=', 'cat.lng_idpost')
        ->where('p.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->get();          

        return view('blog', ['posts' => $posts, 'categorias' => $categorias]);

    }

    public function verBlog($titulo)
    {
    

        $posts = DB::table('tbl_post as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_titulo', '=' ,$titulo)
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.id','p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_post', 'p.str_post_resumen','p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')

        ->orderBy('p.id', 'desc')
        ->get(); 


        return \View::make('verBlog', compact('posts'));
    }
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function monedas()
    {

        return view('monedas');
    }            
}
