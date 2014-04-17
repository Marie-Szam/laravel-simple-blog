<?php

class Author extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['first_name', 'last_name', 'email'];

	public function posts()
    {
        return $this->hasMany('Post');
    }

}