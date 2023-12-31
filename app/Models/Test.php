<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\TestController;


class Test extends Model
{
    use HasFactory;
    protected $table = 'test';
    protected $fillable = ['title', 'content'];
}
