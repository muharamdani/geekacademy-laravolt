<?php

namespace App\Providers;

use Laravolt\Support\Base\BaseServiceProvider;

abstract class ModuleServiceProvider extends BaseServiceProvider
{
    public function getIdentifier()
    {
        return 'post';
    }

    public function register()
    {
        $file = $this->packagePath("config/{$this->getIdentifier()}.php");
        $this->mergeConfigFrom($file, "modules.{$this->getIdentifier()}");
        $this->publishes([$file => config_path("modules/{$this->getIdentifier()}.php")], 'config');

        $this->config = collect(config("modules.{$this->getIdentifier()}"));
    }

    protected function menu()
    {
        app('laravolt.menu.sidebar')->register(function ($menu) {
            $menu->modules
                ->add('Post', route('modules::post.index'))
                ->data('icon', 'circle outline')
                ->data('permission', $this->config['permission'] ?? [])
                ->active('modules/post/*');
        });
    }
}
