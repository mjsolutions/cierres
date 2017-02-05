<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'galeria';

	protected $fillable = ['nombre', 'tipo', 'descripcion'];
}