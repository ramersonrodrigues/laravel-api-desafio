<?php

namespace App\Repositories\RepositoryDesafio;


use App\Models\Author;
use App\Models\Post;
use App\Models\Tag;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Response\PostDeleteResponse;
use App\Response\PostStoreResponse;
use Exception;
use Illuminate\Support\Facades\DB;

class PostRepository implements PostRepositoryInterface
{

    public function buscar(Post $post)
    {
        try {
            return response()->json($post, 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function excluir(Post $post)
    {
        try {
            $post->delete();
            return new PostDeleteResponse();
            //return response()->json([], 204);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function buscarTodos($request)
    {
        try {
            if ($request->has('tag')) {
                $tag = $request->tag;
                $data = Post::with('tagss')->whereHas('tagss', function ($q) use ($tag) {
                    $q->where('tag', '=', $tag);
                })->get();
                return response()->json($data, 200);
            } else {
                return response()->json(Post::all(), 200);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function atualizar(Post $post, $request)
    {
        try {

            DB::beginTransaction();

            if ($request->has('author')) {
                $post->author()->update(['name' => $request->author]);
            }

            if ($request->has('tags')) {
                $post->tagss()->detach();
                foreach ($request->tags as $value) {
                    if ($tag = Tag::where('tag', $value)->first()) {
                        $post->tagss()->attach($tag->id);
                    } else {
                        $post->tagss()->create(['tag' => $value]);
                    }
                }
            }

            if ($request->has('title') || $request->has('content')) {
                $post->update($request->only('title', 'content'));
            }

            DB::commit();
            return response()->json($post, 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function adicionar($request)
    {
        try {

            DB::beginTransaction();

            if (! $author = Author::where("name", $request->author)->first()) {
                $author = Author::create(['name' => $request->author]);
            }

            $request['author_id'] = $author->id;

            $post = Post::create($request->all());

            foreach ($request->tags as $value) {                
                if ($tag = Tag::where('tag', $value)->first()) {
                    $post->tagss()->attach($tag->id);
                } else {                
                    $post->tagss()->create(['tag' => $value]);
                }
            }

            DB::commit();

            return new PostStoreResponse($post);
            //return response()->json($post, 201);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

