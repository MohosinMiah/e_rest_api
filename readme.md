<h2>Steps of Creating This Ecommerce Rest API</h2>
<p>1. Create A Laravel Project and Create Your Database</p>
<p>2.Create Model and Factory and Facker : <ul>CMD: -> php artisan make:model -a </ul><"Put-Name"></p>
  <small>You can see more details using <ul>CMD : php artisan help make:model</ul></small>
<p>3.Now Write <ul>CMD: php artisan migrate</ul> . </p>
<p>4.Now Create Relation ship between Products and Review .Relation is hasmany and belongto </p>
<p>5.Now Write CMD:php artisan make:resource -c <"Put-Name">
<small>This will generate a collection . For more details <ul>CMD : php artisan help</ul> make:resource</small>
</p>
<p>06.Give route in API .Example 
<small>
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products','ProductController')->middleware('auth:api');

Route::group(['prefix' => 'products'], function () {
    Route::apiResource('/{product}/reviews','ReviewController')->middleware('auth:api');

});
</small>
</p>
<p>07.Install Passport <ul>CMD:composer require laravel/passport</ul>
 <br>
 <ul>CMD:php artisan migrate</ul>
 <br>
 <ul>CMD:php artisan passport:install</ul>
</p>
<p>08.Connect to the Postman

 <small>
 Examle:
 Go http://127.0.0.1:8000/oauth/token  request method type "POST"
 set header 
 1.1   Accept : application/json
 1.2   Content-type : application/json

 set Body 
 Example :
 {
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "cx9QGDa6TWUvo8d5MTqYd5Ky5Uxe8uxK9V3tX5Gt",
	"username" : "email@gmail.com",
	"password" : "email@gmail.com"
}
Now send a post request and see result from the result copy <h5>Access Toke </h5> 
 </small>
 
</p>