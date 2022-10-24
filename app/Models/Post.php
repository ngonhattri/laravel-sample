<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'name', 'contents'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    function comments(){
    	return $this->hasMany('app\Models\Comment')->orderBy('id','desc');
    }
}
