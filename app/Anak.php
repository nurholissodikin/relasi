<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    //

  protected $table = 'anaks';
protected $fillable = ['nama','ortu_id','umur','alamat'];
protected $visible = ['nama','ortu_id','umur','alamat'];
public $timestamps = true;

public function ortu()
	{
		return $this->belongsTo('App\Ortu', 'ortu_id');
	}

}
