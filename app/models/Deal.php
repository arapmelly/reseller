<?php

class Deal extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];



	public static function add($data){

		$deal = new Deal;

		$deal->user_id = Confide::user()->id;
		$deal->customer = array_get($data, 'customer');
		$deal->product = array_get($data, 'product');
		$deal->value = array_get($data, 'value');
		$deal->status = array_get($data, 'status');
		$deal->comments = array_get($data, 'comments');
		$deal->save();
	}



	public static function edit($data){

		$deal = Deal::find(array_get($data, 'id'));

		$deal->user_id = Confide::user()->id;
		$deal->customer = array_get($data, 'customer');
		$deal->product = array_get($data, 'product');
		$deal->value = array_get($data, 'value');
		$deal->status = array_get($data, 'status');
		$deal->comments = array_get($data, 'comments');
		$deal->update();
	}


	

}