## Cape & Bay's Dev Sample Assessment ##

**This build** is a tutorial application created with Laravel 5.8.

### Installation ###

* Clone Project into local server
* `cd projectname`
* `composer install`
* `php artisan key:generate`
* Create a database and inform *.env*
* `php artisan migrate --seed` to create and populate tables
* Inform *config/mail.php* for email sends
* Install vueJS scaffolding with `npm install && npm run dev`
* `php artisan serve` to start the app on http://localhost:8000/ or use Laravel Homestead or Valet to serve.
* On local (outside of Homestead) run `npm run watch` for hot reloading.

### Queue Info ###
* New, Free-Pass leads will be sent to the default queue and can be found within the Jobs table.
* `php artisan queue:listen` to fire the queue listener/watcher.
* `php artisan queue:work` to fire the queue worker which will begin processing queued jobs in your database.


