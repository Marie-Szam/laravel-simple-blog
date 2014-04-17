<?php

class Post extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		'body' => 'required'
	];

	protected $fillable = array('title', 'body');

	public function author()
    {
        return $this->belongsTo('Author');
    }
}