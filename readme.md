This is an opinionated(_?_) PHP web application starter package and development environment utilizing the Slim framework.

# Usage

From the application directory, run:  
`docker-compose up`

Your development machine will be available at [localhost](http://localhost). If you need to change the port number, you can do this by editing the ports field under the `nginx` service in `docker-compose.yml`.

## Services

Three services are used and exposed:

### Database (mariadb:10.5)

A MariaDB instance is started and pegged at version 10.5. The user is set as `root` and the password is set as `123`. The database files are mounted as a volume to `.db/`, ensuring that your data is retained across containers. Port 3306 is exposed, allowing you to connect to the database server from your client of choice.

### PHP (php-fpm:7.4)

The first time you run `docker-compose up`, a new PHP image will be built and the following extensions will be installed:

- gd (image manipulation)
- xdebug (remote debugging)
- pdo_mysql (mysql database drivers)
- bz2 (compression)

Additionally, Composer will also be available.
