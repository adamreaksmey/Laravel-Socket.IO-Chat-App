<?php

namespace App\Publish;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

class Publisher
{
    public static function publish()
    {
        Redis::publish('channel', json_encode(['event' => 'left', 'data' => ['user' => ['id' => Auth::user()->id, 'name' => Auth::user()->name]]]));
        auth()->logout();
        return redirect('/login');
    }
}
