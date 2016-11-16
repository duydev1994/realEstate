<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        $articles = Post::where('status', Post::STATUS_PUBLISHED)->paginate(15);
        $category = new Category();
        $search = null;
        return view('site.home', compact('articles', 'category', 'search'));
    }

    public function getNavBar()
    {
        $categories = Category::select(['slug', 'title', 'parent_id', 'id'])->where('status', Category::STATUS_ACTIVE)->get();
        return view('site.navbar', compact('categories'));
    }

    public function getArticles($id)
    {
        $search = null;
        $category = Category::where('slug', $id)->first();
        $articles = Post::where('category_id', $category->id)->paginate(15);
        return view('site.home', compact('articles', 'category', 'search'));
    }

    public function getView($slug)
    {
        if (!preg_match('/-(\d+)$/', $slug, $matches)) {
            abort(404);
        }
        $postId = $matches[1];
        $tops = Post::where('id', '!=', $postId)->skip(0)->take(20)->get();
        $article = Post::with('category')->find($postId);
        if (!$article) {
            abort(404);
        }
        return view('site.view', compact('article', 'tops'));
    }

    public function getContact()
    {
        return view('site.contact');
    }

    public function getSearchHome(Request $request)
    {
        $articles = Post::where([
            ['status', Post::STATUS_PUBLISHED],
            ['category_id', $request->get('search_category')],
            ['title', 'like', '%' . $request->get('search_text') . '%']
        ])->paginate(15);

        $category = new Category();
        $search = [
            'search_category' => $request->get('search_category'),
            'search_text' => $request->get('search_text')
        ];
        return view('site.home', compact('articles', 'category', 'search'));
    }
}
