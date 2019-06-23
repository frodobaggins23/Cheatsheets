<?php 

/*** USING REQUEST ***/
//1. Request object
use Illuminate\Http\Request;

public function store(Request $request)
{
    $name = $request->input('name');

}

//2. use request() 
public function store()
{
    $request = request();
    $name = $request->input('name');
}

//getting information
$name = $request->input('name', 'unknown'); //To get a piece of data from the request, use the input method.ou can also pass a second argument to the input method, which will be the returned value in case this name is not found in the request

if ($request->has('name')) {
//
}

$method = $request->method(); //POST, GET


/*** REDIRECTING ***/
echo 'redirect is one of many Laravel helpers, read more here: https://laravel.com/docs/5.8/helpers'

return redirect('home/dashboard');
return redirect()->action(

    'UserController@profile', ['id' => 1]

);
return redirect()->route('login'); //Redirect to a named route
return back()->withInput();  //To redirect to the previous page  

/*** USING OLD INPUT ***/
/*In its implementation of PRG Laravel redirects a lot. That means that after redirection we no longer have the user's input in $_POST to pre-fill the form and show him his errors. Fortunately, when Laravel redirects, it automatically flashes the entire current request.
To retrieve values from the previous, old request, we use the global helper function old():*/

<input type="text" name="first_name" value="<?= old('first_name') ?>">

/*not always there will be old input available [no POST happened before page was loaded], 
but we can always specify a default fallback value in case 'old' is not set*/

<input type="text" name="first_name" value="<?= old('first_name', $data->first_name) ?>">

/*** CSRF form protection ***/

echo 'https://stackoverflow.com/questions/5207160/what-is-a-csrf-token-what-is-its-importance-and-how-does-it-work/33829607#33829607'
?>

<input type="hidden" value='<?= csrf_field() ?>'> <?php //  To add a CSRF token field to your form

csrf_token(); // To get the current token that is in the session 

/*** AFTER FORM IS SUBMITTED  ***/ 

session()->flash('success_message', 'Success!');
return redirect('comment/edit/?id='.$comment_id);

<?php if (Session::has('success_message')) : ?>
    <div class="alert alert-success">

        <?= Session::get('success_message') ?>

    </div>
<?php endif; ?>