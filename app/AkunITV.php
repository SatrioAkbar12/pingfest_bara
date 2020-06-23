<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunITV extends Model
{
    protected $table = "akun_itv";

    protected $fillable = ['username','email','pass','nama','no_hp','instansi','lomba_cp','lomba_poster','lomba_tiktok','lomba_coverlagu'];
}
