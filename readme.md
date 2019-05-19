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
<small>Route::apiResource('products','ProductController');

Route::group(['prefix' => 'products'], function () {
    Route::apiResource('/{product}/reviews','ReviewController');

});</small>
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
 eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImEwMzA0YmRkZDkzZTE2Y2VhOGQwMjdlNTc4N2JkOWYxY2U0MTkyYzJlNTc0MDhhM2EzODA2ZmY4ZTUxZDYwN2RhNmY0Y2ZkMjM5MTkzNDI1In0.eyJhdWQiOiIyIiwianRpIjoiYTAzMDRiZGRkOTNlMTZjZWE4ZDAyN2U1Nzg3YmQ5ZjFjZTQxOTJjMmU1NzQwOGEzYTM4MDZmZjhlNTFkNjA3ZGE2ZjRjZmQyMzkxOTM0MjUiLCJpYXQiOjE1NTgyMjkxNTYsIm5iZiI6MTU1ODIyOTE1NiwiZXhwIjoxNTg5ODUxNTU2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.R9WzvpzevVvOR8uIDM9-q2McGBn19vR3jwJrjWvL1hnVbMWxPOx5_N7iBtE9w4bM-f6lW1Kr8uNJLLe-RKskUTyWZy5K3MAS7Nib1QG705BJHbl06-nXIR91tIlaeoT-Xc-6vVnLxwnIGR943oUqOvL5V0pUL7er6wWCx3rGSqf43JFYPBp1_IR9D8UgQTSt9Uqgpa1R3s5UfAWvA24Sa2wq1gxNmv-rEpU5VNzFvcoJcqwYSHjYts-OBdtIezkIBF9Pu2aF52fEbQJJOKXgWySlhfgiUXALQo92cCSzN2yab5uVi8Dkok6QNmUxrekiQq--yc2F5WjOMTuf4HnffYaDZSmOowsKOAONyTaZIsY-wU0i6G2f38gtQ3jKxq0SJjUiKvsm_igveJ27OTnyTOIURhvgqfY8RRXUsxz_NWvgKQYwM8mypUYO3IiZvKgr-Fms6UGC96TF5qCpKWS4g7_1w3tQq3CxwkFiTuf1uGXUQY3Nv0t1J7PYylhy2pEYm53NKhPD5okOr1g1LlD4RKyGIWp8ZyeIdAwsE369tj5HH5BnKcK5Q2nCLAoH2HMGhdCI4ChPtg4G4so2YfJldHuC_CP4-Kfn2t4czfJzUiAEPXdIF8si86EwSYZOr94r0ojdDLiBa_sM9vXZs3JkDmfbccwRk5nwnKRHqdxwpyw
</p>