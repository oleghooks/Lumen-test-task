<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 *  @mixin Model
 *
 */
class Loan extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
    protected $dateFormat = 'U';
}
