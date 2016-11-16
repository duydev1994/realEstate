<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class ArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|between:1,255',
            'category_id' => 'required',
            'content' => 'required',
            'meta_keyword' => 'between:1,255',
            'meta_description' => 'between:1,255',
            'meta_custom_title' => 'between:1,255',
        ];
    }
}
