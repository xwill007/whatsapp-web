<?php

use LionHelpers\Arr;
use LionRoute\Route;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', fn() => info("Welcome to index"));

Route::get('messages', function() {
  $messages = fetch("POST", "https://api.tixia.co/messages/", [
    'form_params' => [
      'client' => "10658",
      'token' => "w8iavep1womskmas",
      'page' => 1,
      'limit' => 25,
      'status' => "all",
      'sort' => "desc"
    ]
  ]);

  return $messages;
  // return Arr::of($messages['messages'])->tree("to");
});