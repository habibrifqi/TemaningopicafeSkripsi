<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $primaryKey = 'id';

    // menentukan colom mana yg harus di jaga
    protected $guarded = [];
}
