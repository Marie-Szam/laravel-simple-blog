<?php

/**
 * Post model config
 */

return array(

	'title' => 'Posts',
	'single' => 'post',
	'model' => 'Post',

	'form_width' => 400,

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title',
		'body',
		'author' => array(
			'title' => 'Author',
			'output' => function($value)
			    {
			        return "{$value['first_name']} {$value['last_name']}" ;
			    },
		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
		'body' => array(
            'type' => 'textarea',
    		'title' => 'Body',
    		'height' => 130
        ),
        'author' => array(
		    'type' => 'relationship',
		    'title' => 'Author',
		    'name_field' => 'first_name'
        ),
	),
);