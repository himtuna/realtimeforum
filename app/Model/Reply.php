<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reply extends Model
{
    //
    protected $fillable = ['body','user_id','question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
