<?php

namespace App\Response;

use App\Models\Post;
use App\Traits\PostResponseTrait;
use Illuminate\Contracts\Support\Responsable;


class PostDeleteResponse implements Responsable
{

    use PostResponseTrait;

     public function toResponse($request)
    {
        return $this->successResponseTrait('',"No Content", 204);
    }

    public function errorResponse($message = null, $code = 200)
    {
        return $this->errorResponseTrait($message, $code);
    }
    
}