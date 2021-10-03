<?php

namespace Modules\Comment\Tables;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Comment\Models\Comment;

class CommentTableView extends TableView
{
    public function source()
    {
        return Comment::autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('user_id')->sortable(),
            Text::make('post_id')->sortable(),
            Text::make('title')->sortable(),
            Text::make('message')->sortable(),
            RestfulButton::make('modules::comment'),
        ];
    }
}
