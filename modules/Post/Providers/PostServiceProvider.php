<?php

namespace Modules\Post\Providers;

use App\Providers\ModuleServiceProvider;

class PostServiceProvider extends ModuleServiceProvider
{
    public function getIdentifier()
    {
        return 'post';
    }

    protected function menu()
    {
        app('laravolt.menu.sidebar')->register(function ($menu) {
            $menu->modules
                ->add('Post', route('modules::post.index'))
                ->data('icon', 'newspaper')
                ->data('permission', $this->config['permission'] ?? [])
                ->active('modules/post/*');
        });
    }
}
