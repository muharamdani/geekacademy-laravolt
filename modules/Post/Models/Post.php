<?php

namespace Modules\Post\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;

class Post extends Model
{
    use AutoSearch, AutoSort, AutoFilter;

    protected $table = 'posts';

    protected $guarded = [];

    protected $searchableColumns = ["title", "content",];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
