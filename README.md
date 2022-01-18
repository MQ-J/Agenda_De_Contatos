# Laravel on Replit: fork by MQ-J

> Important: This project uses the built-in PHP webserver. This is not advised by the Laravel project maintainers. Additional code for this to work in Replit was placed in Providers\AppServiceProvider. 

> This project is not meant for production deployments or to be publicly accessible, however it can be. If that is the case I recommend setting up NGINX/Apache and PHP-FPM instead of using the local dev server.

> Nix is still in beta and subject to changes by Replit.

This project serves as a template to run a full-stack development Laravel application on Replit using Nix, PHP 8, MariaDB, and Redis. This project should support all Laravel addons including Jetstream, Horizon, Sanctum, and more.


# Troubleshooting
* Repl will not stop
  * Try running ``pkill mysqld`` in the Shell.





