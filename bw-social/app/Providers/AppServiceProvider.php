<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('datetimeActivity', function($expression) {
            $date = \DateTime::createFromFormat('Y-m-d hh:mm:ss',$expression);
            return "<?php echo 'le '.with($date, 'g:ia \a l jS F Y'); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
