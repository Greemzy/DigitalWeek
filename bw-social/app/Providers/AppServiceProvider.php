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
            /* Configure le script en français */
            setlocale (LC_TIME, 'fr_FR','fra');
            //Définit le décalage horaire par défaut de toutes les fonctions date/heure
            date_default_timezone_set("Europe/Paris");
            //Definit l'encodage interne
            mb_internal_encoding("UTF-8");
            $strDate = mb_convert_encoding('%A %d %B %Y, %Hh%M','ISO-8859-9','UTF-8');
            return iconv("ISO-8859-9","UTF-8",strftime($strDate ,strtotime($expression)));

        });

      \Blade::directive('datetime', function($expression) {
            return "<?php echo 'postÃ© le '. with{$expression}->format('d/m/Y'); ?>";
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
