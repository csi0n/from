<?php

namespace csi0n\From\Models\From;

use Illuminate\Database\Eloquent\Model;

class From extends Model
{
    protected $fillable = ['actid', 'point', 'from', 'created_at', 'updated_at'];
}
