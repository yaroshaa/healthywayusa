<?php
namespace App\Repositories;

use App\Models\Blog;
use App\Models\BlogContent;
use Illuminate\Http\Request;

class BlogRepository implements Interfaces\BlogRepositoryInterface
{
    /**
     * @param int $languageId
     */
    public function getPosts(int $languageId): \LaravelIdea\Helper\App\Models\_IH_Blog_C|array|\Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Pagination\LengthAwarePaginator
    {
        return Blog::with(['content' => function ($query) use ($languageId) {
            $query->where('language_id' , $languageId);
        }])->orderBy('created_at', 'DESC')->paginate(5);
    }


    /**
     * @param int $id
     * @param int $languageId
     * @return array
     */
    public function getPost(int $id, int $languageId): array
    {
        return BlogContent::where('language_id' , $languageId)
            ->where('blog_id', $id)
            ->with('blog')
            ->get()
            ->toArray();
    }

    public function storePost(Request $request): bool
    {
        $post = Blog::create();
        $imageName = $request->hasFile('image') ? $request->file('image')->getClientOriginalName() : null;

        $img = Image::make($request->file('image'));
        $img->save('public/img/blog/'.$imageName);
        $blogContent = BlogContent::create([
            'blog_id' => $post->id,
            'language_id' => $request->input('language_id'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'meta_keys' => $request->input('meta_keys'),
            'meta_description' => $request->input('meta_description'),
            'image' => $imageName,
            'status' => true
        ]);

        return isset($blogContent->id);
    }

    public function updatePost(Request $request, $id): string
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $blogId = $request->input('blog_id');
        Blog::find($blogId)->update([
            'status' => (boolean)$request->input('status')
        ]);

        BlogContent::find($id)->update([
            'blog_id' => $request->input('blog_id'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'meta_keys' => $request->input('meta_keys'),
            'meta_description' => $request->input('meta_description')
        ]);

        if($request->hasFile('image')) {
            $imageName = $request->hasFile('image') ? $request->file('image')->getClientOriginalName() : null;
            BlogContent::find($id)->update([
                'image' => $imageName
            ]);
        }


        return 'ok';
    }

    public function deletePost($id)
    {
        Blog::find($id)->delete();

        return 'ok';
    }
}
