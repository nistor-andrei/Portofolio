<?php

namespace View;
include_once 'Model/model.php';
use Model\Model;

class LoginForm
{
    public $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function buildForm()
    {
        echo '<html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
          <title>Shopping Cart</title>
        </head>
        <body>';
        echo '<div class="container">
        <div class="row">
      			<div class="col-md-5 mx-auto">
      			<div id="first">
      				<div class="myform form ">
    					 <div class="logo mb-3">
    						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>';
        echo sprintf('<form action="%s" method="%s">', $_SERVER['PHP_SELF'], 'post');
        echo '<div class="form-group">';
        echo '<label for="exampleInputUser1" class="form-label">Username </label><br>';
        echo '<input type="text" name="username" id="exampleInputUser1" class="form-control"><br>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="exampleInputPassword1" class="form-label">Password </label><br>';
        echo '<input type="password" class="form-control"  id="exampleInputPassword1" name="password"><br>';
        echo '</div>';
        echo '<div class="col-md-12 text-center">';
        echo '<input type="submit" value="Submit" name="submit" class="btn btn-primary">';
        echo '</div>';
        echo '<div class="text-center">';
        echo '<p>Nu ai cont ? <a href="register.php"> Click Aici</a></p>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
        echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        </body>
      </html>';

    }
}
