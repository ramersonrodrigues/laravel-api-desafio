<?php

namespace App\Http\Requests;

use App\Traits\PostRequestTrait;
use Illuminate\Foundation\Http\FormRequest;


class PostStoreRequest extends FormRequest 
{
    use PostRequestTrait;

     public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return $this->storeValidate();
    }

    public function messages()
    {
        return [
            'title.required' => 'Titulo é um campo obrigatorio',
            'content.required' => 'Conteudo é um campo obrigatorio.',
            'author.required' => 'Autor é um campo obrigatorio.',
        ];
    }
}
