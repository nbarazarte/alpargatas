<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class blog extends Model
{
/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lng_idadmin','lng_idautor', 'str_estatus','str_titulo', 'str_post', 'str_post_resumen', 'str_tipo', 'str_video','str_audio', 'blb_img1', 'blb_img2', 'blb_img3', 'bol_eliminado'];
}
