<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Poll;

class PollOption extends Model
{
    public function polls() 
    {
    return $this->belongsToMany(Poll::class, 'poll_options');
    }
}
