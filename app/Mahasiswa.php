<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{    
    use SoftDeletes;
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'alamat'];
    protected $dates = ['deleted_at'];

    public function telepon()
    {
    	return $this->hasOne('App\Telepon');
    }
}
