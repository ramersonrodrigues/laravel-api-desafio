<?php

namespace App\Repositories\Contracts;

use App\Models\Post;

interface PostRepositoryInterface
{

    public function adicionar($post_data);

    public function buscar(Post $post);

    //TAG é opcional
    public function buscarTodos($tag_search);

    public function excluir(Post $post);

    public function atualizar(Post $post, $post_data);

}
