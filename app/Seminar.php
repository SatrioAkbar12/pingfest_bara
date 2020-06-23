<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $table="seminar";

    protected $fillable = ['nama','email','no_hp'];
}
