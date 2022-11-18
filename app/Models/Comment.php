<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'post_id', 'comment'];

    function post()
    {
        return $this->belongsTo('app\Models\Post');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}