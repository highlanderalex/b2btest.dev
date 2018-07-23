<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'bad_domain';
    public $timestamps = false;
    protected $fillable = ['name'];
}
