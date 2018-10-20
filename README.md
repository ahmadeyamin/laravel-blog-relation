# laravel-blog-relation

There is some example who laravel database relation work for any project 


Run Commend on git commend line ``git clone https://github.com/ahmadeyamin/laravel-blog-relation``



and copy ```example.env``` file to ```.env``` and add your database info 


and run commend ```php artisan db:seed```


you can seed dame post,user,tag,category,comments by using one commend ```php artisan db:seed```


check ```\database\seeds\DatabaseSeeder.php``` to control seed data item and options


seeding dame data 

```php
public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CategorisTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
```
