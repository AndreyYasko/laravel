<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthController extends Controller
{

 public function auth(Request $request)
    {
        $html = <<<HTML
        <h1>Log in</h1><p><input type="text" name="AuthFormLogin" placeholder="Login here">
<input type="password" name="AuthFormPassword" placeholder="Password here">
<label><input type="checkbox" name="AuthFormCheckbox"> Remember me</label>
<button type="button" name="AuthFormButton" formtarget="_self" autofocus>Log in</button></p>
HTML;

        return $html;

    }
}
