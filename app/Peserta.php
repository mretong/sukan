<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table		= 'peserta';
    protected $primaryKey	= 'id';
    protected $fillable		= ['nama', 'no_ic', 'id_jabatan'];

    public $timestamps		= false;

    public function acara() {

    	return $this->belongsToMany('App\Acara');
    }

    public function jabatan() {

    	return $this->belongsTo('App\Jabatan', 'id_jabatan', 'id');
    }
}
