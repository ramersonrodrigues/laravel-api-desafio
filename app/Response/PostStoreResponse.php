<?php

namespace App\Response;

use App\Models\Post;
use App\Traits\PostResponseTrait;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Support\Responsable;


class PostStoreResponse implements Responsable
{

    use PostResponseTrait;

    protected $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function toResponse($request)
    {
        return $this->successResponseTrait($this->post , "Created", 201);
    }

    public function errorResponse($message = null, $code = 200)
    {
        return $this->errorResponseTrait($message, $code);
    }
    
}