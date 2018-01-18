<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $table 		= 'acara';
    protected $primaryKey 	= 'id';
    protected $fillable		= ['nama', 'catatan', 'id_peserta'];

    public $timestamps		= false;

    public function peserta() {

    	return $this->belongsToMany('App\Peserta');
    }

}
