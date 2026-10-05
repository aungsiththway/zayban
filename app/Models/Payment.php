<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'pay',
        'logo',
        'acc_no',
        'acc_name'
    ];
}
