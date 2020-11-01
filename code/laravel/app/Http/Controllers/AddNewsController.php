<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AddNewsController extends Controller
{
 public function addnews(Request $request)
    {
        $html = <<<HTML
        <h1>Add News Form</h1><p>
        <label for="NewsAddFormHeader">Header of News:</label>
<input type="text" id="NewsAddFormHeader" name="NewsAddFormHeader"><br><br>
 <label for="NewsAddFormDetails">Content of News:</label>
<input type="text" id="NewsAddFormDetails" name="NewsAddFormDetails"><br><br>
 <label for="NewsAddFormDescription">Brief description:</label>
<input type="text" id="NewsAddFormDescription" name="NewsAddFormDescription"><br><br>
<input type="submit" value="Submit" name="NewsAddFormSubmit"></p>
HTML;

        return $html;

    }
}

