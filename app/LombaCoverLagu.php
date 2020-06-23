<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LombaCoverLagu extends Model
{
    protected $table = "lomba_cover_lagu";

    protected $fillable = ['username','pembayaran','link_submit'];
}
