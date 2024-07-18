<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|required',
            'content' => 'string|required',
            'main_image' => 'file|nullable',
            'preview_image' => 'file|nullable',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',];
    }

    public function messages(): array
    {
        return [
            'title.string' => 'Title must be a string.',
            'title.required' => 'Title is required.',
            'content.string' => 'Content must be a string.',
            'content.required' => 'Content is required.',
            'main_image.file' => 'Main image must be a file.',
            'main_image.required' => 'Main image is required.',
            'preview_image.required' => 'Preview image is required.',
            'category_id.integer' => 'Category must be an integer.',
            'category_id.required' => 'Category is required.',
            'category_id.exists' => 'Category is not exists.',
            'tag_ids.array' => 'Tags must be an array.',
            'tag_ids.integer' => 'Tags must be an integer.',
            'tag_ids.exists' => 'Tags is not exists.',
        ];
    }

}
