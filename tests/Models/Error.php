<?php

namespace BeyondCode\ErdGenerator\Tests\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    public function error()
    {
        throw new Exception('Expected exception');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
