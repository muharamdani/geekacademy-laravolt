<?php

namespace Modules\Comment\Providers;

use App\Providers\ModuleServiceProvider;

class CommentServiceProvider extends ModuleServiceProvider
{
    public function getIdentifier()
    {
        return 'comment';
    }

    protected function menu()
    {
        app('laravolt.menu.sidebar')->register(function ($menu) {
            $menu->modules
                ->add('Comment', route('modules::comment.index'))
                ->data('icon', 'circle outline')
                ->data('permission', $this->config['permission'] ?? [])
                ->active('modules/comment/*');
        });
    }
}
