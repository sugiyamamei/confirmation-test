<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name1',
        'name2',
        'gender',
        'email',
        'tel1',
        'tel2',
        'tel3',
        'address1',
        'address2',
        'content1',
        'content2'
    ];
}
