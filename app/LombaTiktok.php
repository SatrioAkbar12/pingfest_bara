<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LombaTiktok extends Model
{
    protected $table = "lomba_tiktok";

    protected $fillable = ['username','pembayaran','link_submit'];
}
