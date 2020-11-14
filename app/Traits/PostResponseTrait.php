<?php 

namespace App\Traits;

trait PostResponseTrait{

    protected function successResponsetrait($post, $message, $code)
	{
        //return $message;
		return response()->json([
			'message' =>  $message, 
			'data' => $post
		], $code);
	}

	protected function errorResponseTrait($message = null, $code)
	{
		return response()->json([
			'status'=>'Error',
			'message' => $message,
			'data' => null
		], $code);
	}

}