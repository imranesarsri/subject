# Expose ORM

## Migration

```bash
php artisan make:migration CreatePostTable
```

```php

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

```

**Run migration**

```bash
php artisan migrate
```


## Les models

```bash
php artisan make:model Post

```

___

## Récupérer des articles

```php
Route::get('/', function () {
    $post = \App\Models\Post::all();
    return $post;
});

```

```php
Route::get('/', function () {
    $post = \App\Models\Post::all(['title', 'slug', 'content']);
    return $post;
});

```


```php
Route::get('/', function () {
    $post = Post::find(3);
    return $post;
});

```

```php
Route::get('/', function () {
    $post = \App\Models\Post::paginate(2);
    return $post;
});
```

```php
Route::get('/', function () {
    $post = \App\Models\Post::where('id', '>', 0)->limit(2)->get();
    dd($post);
    return $post;
});

```
### Créer un article

**Creation basic**

```php

Route::get('create', function () {
    $post = new \App\Models\Post();
    $post->title = "mon premier article 3";
    $post->slug = "mon-premier-article 3";
    $post->content = "Mon contenu";
    $post->save();
    return $post;
});

```

**Creation normale**

```php
class Post {

    protected $fillable = ['title', 'slug', 'online'];

}
```

```php
Route::get('create', function () {
    $post = \App\Models\Post::create([
        'title' => 'title article 4',
        'slug' => 'slug article 4',
        'content' => 'content article 4',
    ]);
    return $post;
});

```


### Modifier

```php
Route::get('modifier', function () {
    $post = \App\Models\Post::find(3);
    $post->title = "article 3";
    $post->save();
    return $post;
});

```

### Supprimer 

```php
$post = Post::find(3);
$post->delete();
```
