sf4-api
========

A Symfony 4 project with JWT for user authentication.

## Installation

First off, build the docker images

`docker-compose build`

Run the containers

`docker-compose up -d`

Now shell into the PHP container

`docker-compose exec php-fpm bash`

And install all the dependencies

`composer install`

#### Creating the database schema

Once you've installed the dependencies, you may now create a database and the schema. 

You can do this by running the script, which will create a clean database and schema.

`bash install-clean.sh`

**Note: This script will actually delete any database that's already created, so be careful when using this.

#### Show all endpoint

You can see all endpoints with this endpoint.

`/api/doc`
`/api/doc.json`

#### User register

Customers can sign up with this format at body.

{"username":"user", "password":"userpw","email":"mail@mail.com"}

#### Create product data

You can create one dummy product data with this endpoint after login.

`/api/product/create`






