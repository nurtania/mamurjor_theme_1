<?php



add_action('cmb2_admin_init','custome_func');


function custome_func(){

	$dhora = new_cmb2_box(array(
			'id'		=>	'unique_name',
			'title'		=>	'this is CMB2 box',
			'object_types' => array('post','page')

		));

	$dhora->add_field(array(
			'id'=> 'cell',
			'name'=>'write your cell',
			'type'=> 'text'



		));
	$prefix='_';
	$dhora->add_field(array(
			'id'=> $prefix.'name',
			'name'=> 'give your name ',
			'description'=> 'give your name ',
			'type'=>'text_small'



		));
	$dhora->add_field(array(
			'id'=> $prefix.'medium',
			'name'=> 'give your medium ',
			'description'=> 'give your medium ',
			'type'=>'text_medium'
		));
	$dhora->add_field(array(
			'id'=> $prefix.'mail',
			'name'=> 'give your mail ',
			'description'=> 'give your mail ',
			'type'=>'text_email'
		));
	$dhora->add_field(array(
			'id'=> $prefix.'url',
			'name'=> 'give your url ',
			'description'=> 'give your url ',
			'type'=>'text_url'
		));
	$dhora->add_field(array(
			'id'=> $prefix.'money',
			'name'=> 'give your money ',
			'description'=> 'give your money ',
			'type'=>'text_money',
			'before_field' => '£'
		));
	$dhora->add_field(array(
			'id'=> $prefix.'textarea',
			'name'=> 'give your textarea ',
			'description'=> 'give your textarea ',
			'type'=>'textarea',

		));
		$dhora->add_field(array(
			'id'=> $prefix.'textarea_small',
			'name'=> 'give your textarea_small ',
			'description'=> 'give your textarea_small ',
			'type'=>'textarea_small',

		));
		$dhora->add_field(array(
			'id'=> $prefix.'textarea_code',
			'name'=> 'give your textarea_code ',
			'description'=> 'give your textarea_code ',
			'type'=>'textarea_code',

		));
		$dhora->add_field(array(
			'id'=> $prefix.'text_time',
			'name'=> 'give your text_time ',
			'description'=> 'give your text_time ',
			'type'=>'text_time',
			'time_format' => 'h:i:s A'

		));
		$dhora->add_field(array(
			'id'=> $prefix.'select_timezone',
			'name'=> 'give your select_timezone ',
			'description'=> 'give your select_timezone ',
			'type'=>'select_timezone',
		));
		$dhora->add_field(array(
			'id'=> $prefix.'text_date',
			'name'=> 'give your text_date ',
			'description'=> 'give your text_date ',
			'type'=>'text_date',
		));






}



?>