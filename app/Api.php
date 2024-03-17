<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Api extends Http
{
    private static $authorization = "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEzMywiaWF0IjoxNjkwNjUzMzYyLCJleHAiOjE2OTA2NTY5NjJ9.6segzKZ10epmUEyWhGNgx1fzE16hXoZVS9WfhZ6caGc";
    
    public function __construct($value) {
        parent::__construct($value);
    }
    public static function token(){
        return self::$authorization;
    }
    public static function withToken(){
        return self::withHeaders(['Authorization' => self::token()]);
    }
}
