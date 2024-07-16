<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($dataValidation): bool
    {
        try {
            DB::beginTransaction();
            if (isset($dataValidation['tag_ids'])) {
                $tagIds = $dataValidation['tag_ids'];
                unset($dataValidation['tag_ids']);
            }
            $dataValidation['main_image'] = Storage::disk('public')->put('/image', $dataValidation['main_image']);
            $dataValidation['preview_image'] = Storage::disk('public')->put('/image', $dataValidation['preview_image']);
            $post = Post::firstOrCreate($dataValidation);
            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($dataValidation, Post $post): object
    {
        try {
            DB::beginTransaction();
            if (isset($dataValidation['tag_ids'])) {
                $tagIds = $dataValidation['tag_ids'];
                unset($dataValidation['tag_ids']);

            }
            if (isset($dataValidation['main_image'])) {
                $dataValidation['main_image'] = Storage::disk('public')->put('/image', $dataValidation['main_image']);
            }
            if (isset($dataValidation['preview_image'])) {
                $dataValidation['preview_image'] = Storage::disk('public')->put('/image', $dataValidation['preview_image']);
            }
            $post->update($dataValidation);
            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();
            abort(500);
        }
        return $post;
    }

}
