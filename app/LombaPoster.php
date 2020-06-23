<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LombaPoster extends Model
{
    protected $table = "lomba_poster";

    protected $fillable = ['username','pembayaran','link_submit'];
}
