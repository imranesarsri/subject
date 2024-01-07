# Exposé Query Builder VS Eloquent ORM 
## Introduction

Laravel propose deux manières principales d'interagir avec les bases de données : `Eloquent ORM` et `Query Builder`. Les deux outils ont leurs propres `forces` et `faiblesses`, il est donc important de choisir celui qui convient le mieux à votre travail.

___
## Install debugbar for laravel

```bash
composer require barryvdh/laravel-debugbar --dev
```
[Debugbar](https://github.com/barryvdh/laravel-debugbar)

___
## Realisation
```bash
php artisan make:model Post -r
php artisan make:model Project -r

``` 
```bash
php artisan make:migration create_posts_table
php artisan make:migration create_projects_table
```

```bash
php artisan make:view Posts.index
php artisan make:view Posts.create
php artisan make:view Posts.edit
php artisan make:view Posts.show
```

```bash
php artisan make:view Projects.index
php artisan make:view Projects.create
php artisan make:view Projects.edit
php artisan make:view Projects.show
```

```bash
php artisan make:view Layouts.Layout
php artisan make:view Layouts.Navbar
```

```bash
php artisan make:factory Post
php artisan make:factory Project
```

```bash
php artisan make:seeder PostSeeder
php artisan make:seeder ProjectSeeder
```
```bash
php artisan db:seed
```

## Présentation
[Exposé Query Builder VS Eloquent ORM - google slide](https://docs.google.com/presentation/d/1TKUYeHNyaKmjiBR10pVnZ0iaQa0K7YOeP8Je22Ochnk/edit?usp=sharing)
