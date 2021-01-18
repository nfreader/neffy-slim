This is an opinionated(_?_) PHP web application starter package utilizing the [Slim](https://www.slimframework.com/) framework. The work is heavily based on [Odan's slim4 skeleton](https://github.com/odan/slim4-skeleton). 

## Development Environment

The development environment utlizies [Docker](https://docker.com) containers via `docker compose`.

It should work out of the box, just clone this repo and run `docker compose up` from the directory. Your development machine will be available at [localhost](http://localhost). Terminate the development environment with ^C when you're done.

Three services are used and exposed:

### Database (mariadb:10.5)

A MariaDB instance is started and pegged at version 10.5. The user is set as `root` and the password is set as `123`. The database files are mounted as a volume to `.db/`, ensuring that your data is retained across containers. Port 3306 is exposed, allowing you to connect to the database server from your client of choice.

### PHP (php-fpm:7.4)

The first time you run `docker-compose up`, a new PHP image will be built and the following extensions will be installed:

- gd (image manipulation)
- xdebug (remote debugging)
- pdo_mysql (mysql database drivers)
- bz2 (for handling compression)

Additionally, [Composer](https://getcomposer.org/) will also be installed.

These extensions are installed via the [docker-php-extension-installer](https://github.com/mlocati/docker-php-extension-installer).

An environment variable, `APP_ENV` is also set to `local`.

### nginx (nginx)

An nginx webserver is created to serve your application. By default it will be available at [localhost](http://localhost). If you wish to change this, or if it conflicts with another service on your computer, you can change the port assignment to something else. The format is `localport:containerport`. You should only change the local port number.
