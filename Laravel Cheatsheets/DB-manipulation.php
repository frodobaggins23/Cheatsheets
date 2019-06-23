<?php
/*** DATABASE MANIPULATION ***/

/*********************************RAW SQL*************************************************/

$results = DB::select('SELECT * FROM `users` WHERE `id` = 1');
$first = DB::selectOne('SELECT * FROM `users` WHERE `id` = 1');
$nr_of_inserted = DB::insert('INSERT into `users` (`id`, `name`) VALUES (1, "Dayle")');

$inserted_id = DB::getPdo()->lastInsertId(); // get the autoincremented id of the last inserted row

$nr_of_affected = DB::update('UPDATE `users` SET `votes` = 100 WHERE `name` = "John"');
// update returns the number of affected rows

$nr_of_deleted = DB::delete('DELETE FROM `users`');
// delete returns the number of deleted rows

DB::statement('TRUNCATE `users`'); //universal command for SQL queries


/*Value substitution (for added security)*/

$query = "

    UPDATE `users`
    SET `username` = ?
    WHERE `users`.`id` = ?

";
$values =  ['steve', 1];

DB::select($query, $values);


/*********************************FLUENT QUERY BUILDER *************************************************/

echo 'https://classes.codingbootcamp.cz/coding-bootcamp/spring-2019/638-fluent-query-builder';
echo 'https://laravel.com/docs/5.7/queries';

$var = DB::table('table_name')->first(); //performs a SELECT query and fetches the first result row
$var = DB::table('table_name')->value(); // performs a SELECT query and fetches the value of the first column in the first result row
$var = DB::table('table_name')->pluck(); //performs a SELECT query and fetches the value of one column from every row
$var = DB::table('table_name')->count(); // performs a SELECT COUNT query
$var = DB::table('users')->insert(
    ['email' => 'john@example.com', 'votes' => 0]
);
$var = DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);
$var = DB::table('users')->delete();
$var = DB::table('users')->where('votes', '>', 100)->delete();

$var = DB::table('table_name')->get(); //If the query ends with the call to ->get(), it returns a collection object where every row is represented as an stdClass object.


/*********************************ELOQUENT ORM*************************************************/

echo 'https://laravel.com/docs/5.8/eloquent#defining-models';

class SomeModel extends Model

{
    // **** this is optional setup ****
    public $table = 'some_table_name'; // the table's name is not the plural form of this model's name

    public $primaryKey = 'foo'; // the primary key is column `foo`, not `id`

    public $keyType = 'string'; // the primary key is not an integer, but a string

    public $incrementing = false; // the primary key does not have the auto-increment

    public $timestamps = false; // no created_at and updated_at columns

    const CREATED_AT = 'creation_date'; // a different name for the created_at column

    const UPDATED_AT = 'last_update'; // a different name for the updated_at column

}

\App\User::all(); // retrieve all records
\App\User::find(1); // find record by it's primary key

//inserting - option 1
$user = new \App\User();
$user->username = 'Bob';
$user->save();

//inserting - option 2
$new_user = \App\User::create([
    'username' => 'Stuart'
]);

//updating
$user = \App\User::find(1);
$user->username = 'Kevin';
$user->save();

//deleting
$user = \App\User::find(1);
$user->delete();


//relationships

public function profile()
{
    return $this->hasOne('App\Profile'); // 1:1
    return $this->hasMany('App\Comment'); // 1:N
    return $this->belongsTo('App\User'); // 1:1 or 1:N on the side of the other model

}

echo 'https://laravel.com/docs/5.7/eloquent-relationships#many-to-many';
