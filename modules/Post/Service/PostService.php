<?php

namespace Modules\Post\Service;

use App\Models\User;
use Modules\Post\Models\Post;

class PostService {
    public function getDropdownUserData()
    {
        return User::select('name', 'id')->pluck('name', 'id')->toArray();
    }
    public function getPostsData()
    {
        return Post::select('title', 'id')->pluck('title', 'id')->toArray();
    }
}
