<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    //
  protected $table = 'ortus';

protected $fillable = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
protected $visible = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
public $timestamps = true;

	public function anak()
	{
		return $this->hasMany('App\Anak', 'ortu_id');
	}

}

