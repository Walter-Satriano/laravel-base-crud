<?php

Route::get("/postIndex", "ControllerPost@index") -> name("post.index");

Route::get("/postCreate", "ControllerPost@create") -> name("post.create");

Route::post("/", "ControllerPost@store") -> name("post.store");

Route::get("/{id}/edit", "ControllerPost@edit") -> name("post.edit");
Route::post("/{id}", "ControllerPost@update") -> name("post.update");

Route::get("/{id}/delete", "ControllerPost@destroy") ->name("post.destroy");
