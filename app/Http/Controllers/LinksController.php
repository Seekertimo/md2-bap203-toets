<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
   public function index() {
       $links = Link::all();

       return view('links', compact('links'));

   }

   public function showLinksForm() {

       return view('formulier');
   }

   public function handleLinksForm(Request $request) {
       $data = $request->validate(
           [
               'new_title' => 'required|confirmed|min:6',
               'new_password_confirmation' => 'required|min:6',
               'new_description' => 'required|confirmed',
               'new_description_confirmation' => 'required',
               'new_url' => 'required|confirmed',
               'new_url_confirmation' => 'required'

           ]
       );

   }


}
