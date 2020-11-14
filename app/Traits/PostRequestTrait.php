<?php

namespace App\Traits;

trait PostRequestTrait {

    public function storeValidate()
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ];
    }

}
