<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('tutoriales');
    } 

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {

        return view('blog');
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
