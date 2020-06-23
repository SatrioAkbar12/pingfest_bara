<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LombaCP extends Model
{
    protected $table = "lomba_cp";

    protected $fillable = ['username','pembayaran','link_submit'];
}
