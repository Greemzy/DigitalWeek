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
            $date = \DateTime::createFromFormat('Y-m-d hh:mm:ss', $expression);
            return "<?php echo 'le '.with($date, 'g:ia \a l jS F Y'); ?>";
        });

      \Blade::directive('datetime', function($expression) {
            return "<?php echo 'posté le '. with{$expression}->format('d/m/Y'); ?>";
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
