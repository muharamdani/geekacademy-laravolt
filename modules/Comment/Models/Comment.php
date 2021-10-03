<?php

namespace Modules\Comment\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Support\Traits\AutoFilter;
use Laravolt\Support\Traits\AutoSearch;
use Laravolt\Support\Traits\AutoSort;

class Comment extends Model
{
    use AutoSearch, AutoSort, AutoFilter;

    protected $table = 'comments';

    protected $guarded = [];

    protected $searchableColumns = ["title", "message",];
}
