# Laravel  Passport Api Authentication


## Introduction

> Laravel Passport is an easy way to set up an authentication system for your API. As a Laravel package, it uses an OAuth2 server to perform authentication, creating tokens for user applications that request to interface with the API it protects, and only granting them access if their tokens are validated.


## Installation

If you want use this application then follow those steps:

Clone the repository

```bash
git clone https://github.com/sunjid/laravel-passport-api-authentication.git
```

Migrate your database after installing the package

```bash
php artisan migrate
```

Install Laravel Passport Package

```bash
php artisan passport:install
```



## Usage

Test the API endpoint from postman. If you face any problem then check those screenshots given below.

>API Endpoints 

```bash
http://127.0.0.1:8000/api/register
http://127.0.0.1:8000/api/login
```

> From Header section select this two things as listed below:

```bash
Accept: application/json
```

![acceptjson](https://user-images.githubusercontent.com/31752675/139531366-3cfacb3e-7da4-4187-b83d-80a11bdc84eb.png)


## Create A New User 

![register](https://user-images.githubusercontent.com/31752675/139530860-2d16bab4-6777-4878-b922-6be2b1370eff.png)

## Login User

![login](https://user-images.githubusercontent.com/31752675/139530931-d4314c49-b7e3-4886-a638-297109edbd69.png)

