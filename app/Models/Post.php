<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'view', 'like', 'top'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at'
    ];

    public static function getHomeTopPosts()
    {
        return [
            ['id' => 1, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 2, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 3, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 4, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 5, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 6, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 7, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 8, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 9, 'title' => 'xxx上市了', 'comments' => 999],
            ['id' => 10, 'title' => 'xxx上市了', 'comments' => 999],
        ];
    }
}
