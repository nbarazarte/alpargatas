<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Noticias;
use App\Blog;

class PublicController extends Controller
{
     
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ultimasNoticias = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('id','blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(0) //las siguientes tres noticias
        ->limit(8)
         ->orderBy('id', 'desc')
        ->get();

        $ultimosBlog = DB::table('tbl_post')
        ->where('str_estatus', '=' ,'activo')
        ->select('id','blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(0) //las siguientes tres noticias
        ->limit(8)
         ->orderBy('id', 'desc')
        ->get();                

        return \View::make('indexSmarty', compact('ultimasNoticias','ultimosBlog'));        
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
        /*$ultimasNoticias = Noticias::latest()
        ->where('str_estatus', '=' ,'activo')
        ->select('str_tipo','blb_img1','str_titulo','str_post_resumen')
         ->take(3)
         ->get();*/

        $ultimasNoticias = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(0) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($ultimasNoticias); die();

        $noticiasRecientes = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(3) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($noticiasRecientes); die();  

        $estaSemana = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(6) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($estaSemana); die(); 

        $otrasNoticias = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(9) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($otrasNoticias); die(); 

        $puedeInteresar = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(12) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($puedeInteresar); die();   

        $miniNoticias = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(15) //las siguientes tres noticias
        ->limit(2)
         ->orderBy('id', 'desc')
        ->get();

        //dd($miniNoticias); die();                 

        $categorias = DB::table('tbl_categorias_noticias as cat')
        ->join('tbl_noticias as p', 'p.id', '=', 'cat.lng_idnoticias')
        ->where('p.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->get();          

        return view('noticias', ['miniNoticias' => $miniNoticias,'puedeInteresar' => $puedeInteresar,'otrasNoticias' => $otrasNoticias,'estaSemana' => $estaSemana,'ultimasNoticias' => $ultimasNoticias,'noticiasRecientes' => $noticiasRecientes, 'categorias' => $categorias]);
    }   

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function verNoticias($titulo)
    {
        $posts = DB::table('tbl_noticias as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_titulo', 'like' ,"%$titulo%")        
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.id','p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_post', 'p.str_post_resumen','p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')

        ->orderBy('p.id', 'desc')
        ->get(); 

        //dd($posts);die();

        $categorias = DB::table('tbl_categorias_noticias as cat')
        ->join('tbl_noticias as p', 'p.id', '=', 'cat.lng_idnoticias')
        ->where('p.str_titulo', 'like' ,"%$titulo%")
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->get();  

        $blogRecientes = DB::table('tbl_noticias')
        ->where('str_estatus', '=' ,'activo')
        ->where('str_titulo', 'not like' ,"%$titulo%")
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(0) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($blogRecientes);die();

        return \View::make('verNoticias', compact('posts','categorias','blogRecientes'));
        
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
        ->where('p.str_titulo', 'like' ,"%$titulo%")
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.id','p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_post', 'p.str_post_resumen','p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')

        ->orderBy('p.id', 'desc')
        ->get(); 

        $categorias = DB::table('tbl_categorias_post as cat')
        ->join('tbl_post as p', 'p.id', '=', 'cat.lng_idpost')
        ->where('p.str_titulo', 'like' ,"%$titulo%")
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->get();  

        $blogRecientes = DB::table('tbl_post')
        ->where('str_estatus', '=' ,'activo')
        ->select('blb_img1','blb_img2','blb_img3','created_at as fecha','str_video','str_audio','str_titulo','str_post_resumen','str_tipo')
        ->offset(0) //las siguientes tres noticias
        ->limit(3)
         ->orderBy('id', 'desc')
        ->get();

        //dd($blogRecientes);die();

        return \View::make('verBlog', compact('posts','categorias','blogRecientes'));
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
