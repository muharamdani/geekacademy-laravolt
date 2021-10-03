<?php

namespace Modules\Post\Tables;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Post\Models\Post;

class PostTableView extends TableView
{
    public function source()
    {
        return Post::with('users')->autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('title')->sortable(),
            Text::make('content')->sortable(),
            Text::make('users.name', 'Author')->sortable(),
            RestfulButton::make('modules::post'),
        ];
    }
}
