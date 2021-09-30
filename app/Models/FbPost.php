<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FbPost extends Model
{
    use HasFactory;
    protected $table = 'fb_posts';
    public function comments(){
        return $this->hasMany(Comments::class);
    }
}
