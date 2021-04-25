<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        Paginator::defaultView('pagination::simple-bootstrap-4');
        // 格式化友好时间
        Blade::directive('datetime', function($time){
            return $this->friendlyTime($time);
        });
        Blade::component('partials.popular', 'popular');
        view()->composer('partials.popular', function($view){
            $view->with('popular', Post::getHomeTopPosts());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function friendlyTime(int $time): string
    {
        $timeDiff = time() - $time;
        if ($timeDiff < 120) {
            return '刚刚';
        } else if ($timeDiff < 3600) {
            return floor($timeDiff / 60) . '分钟前';
        } else if ($timeDiff < 86400) {
            return floor($timeDiff / 3600) . '小时前';
        } else {
            if ($time > strtotime(date('Y-m-d'))) {
                return date('m月d日');
            } else {
                return date('Y-m-d', $time);
            }
        }
    }
}
