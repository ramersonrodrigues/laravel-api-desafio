<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostController extends Controller
{

    protected $post;

    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function index(Request $request)
    {
        return $this->post->buscarTodos($request);
    }

    public function store(PostStoreRequest $request)
    {
        return $this->post->adicionar($request);
    }

    public function show(Post $id)
    {
        return $this->post->buscar($id);
    }

    public function update(Request $request, Post $id)
    {
        return $this->post->atualizar($id, $request);
    }

    public function destroy(Post $id)
    {
       return $this->post->excluir($id);
    }
}
