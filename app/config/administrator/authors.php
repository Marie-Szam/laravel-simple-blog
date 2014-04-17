<?php

/**
 * Post model config
 */

return array(

	'title' => 'Authors',

	'single' => 'author',

	'model' => 'Author',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'first_name',
		'last_name',
		'email'
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'first_name' => array(
            'title' => 'First name',
            'type' => 'text'
        ),
		'last_name' => array(
            'title' => 'Last name',
            'type' => 'text'
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text'
        ),

	),
);