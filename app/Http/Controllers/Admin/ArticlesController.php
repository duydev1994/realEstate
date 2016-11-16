<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location\Location;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Datatables;
use App\Models\Post;
use App\Models\Category;

use Auth;

class ArticlesController extends Controller
{
    protected $folder = '/public/images/posts/';

    /**
     * get index article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return view('admin.article.index');
    }

    /**
     *
     * get ajax database article
     * @return json
     */

    public function getDatatables(Request $request)
    {
        $article = Post::
        with(['category' => function ($query) {
            $query->select('title', 'id');
        },
            'users' => function ($query) {
            }]);
        return Datatables::of($article)
            ->editColumn('title', function ($article) {
                return '&nbsp;<a href="javascript:void(0)" data-articleId="' . $article->id . '"  onclick="popupView($(this))">' . $article->title . '</a>';
            })
            ->editColumn('author', function ($article) {
                return isset($article->users->username) ? $article->users->username : '--';
            })
            ->editColumn('status', function ($article) {
                if ($article->status == Post::STATUS_PUBLISHED) {
                    return '<label class="label label-success">' . array_get(Post::$statusName, $article->status) . '</label>';
                } else {
                    return '<label class="label label-danger">' . array_get(Post::$statusName, $article->status) . '</label>';
                }
            })
            ->editColumn('category_id', function ($article) {
                return isset($article->category->title) ? $article->category->title : '--';
            })
            ->addColumn('action', function ($article) {
                $action = '<a href="' . route('admin.articles.edit', $article->id) . '" class="label label-warning">Sữa</a>';
                $action .= '&nbsp;<a href="javascript:void(0)" data-articleId="' . $article->id . '" class="label label-danger" onclick="confirmDelete($(this))">Xóa</a>';
                return $action;
            })
            ->make(true);
    }

    /**
     * get index edit from article
     * @param $id integer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getViewEdit($id)
    {
        $article = Post::findOrFail($id);
        $categories = Category::select('id', 'title')->get();
        $locationCheck = Location::select(['id', 'name'])
            ->where('ward_id', $article['ward_id'])
            ->where('district_id', $article['district_id'])
            ->where('country_id', $article['country_id'])
            ->get();
        return view('admin.article.edit', compact(
            'categories',
            'article',
            'locationCheck'
        ));
    }

    /**
     * get view crate article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getViewCreate()
    {
        $categories = Category::select('id', 'title')->get();
        $article = new Post();
        return view('admin.article.create', compact('categories', 'article'));
    }

    /**
     * post create article
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(Request $request)
    {
        $now = getdate();
        $url = (string)$now["year"] . "/" . (string)$now["mon"] . "/" . (string)$now["mday"] . '/';
        // check image render
        if (!is_dir(base_path($this->folder . $url))) {
            mkdir(base_path($this->folder . $url), 0777, true);
        }
        if ($request->file('picture')) {
            $fileName = uniqid() . '.jpg';
            $request->file('picture')->move(base_path($this->folder . $url), $fileName);
            $picture = $url . $fileName;
            $request->merge(['picture' => $picture]);
        }

        $request->merge([
            'meta_description' => $request->get('meta_description'),
            'content' => str_replace([' class=""'], '', $request->get('content')),
            'user_id' => Auth::user()->id,
            'meta_custom_title' => $request->get('meta_custom_title') ? $request->get('meta_custom_title') : $request->get('title'),
            'slug' => $request->get('slug') ? $request->get('slug') : str_slug($request->get('title')),
            'user_id' => Auth::user()->id,
        ]);

        //check location
        if ($request->get('location')) {
            $dataLocation = Location::select('ward_id', 'district_id', 'country_id', 'city_id')->find($request->get('location'));
            $request->merge([
                'ward_id' => isset($dataLocation['ward_id']) ? $dataLocation['ward_id'] : 0,
                'country_id' => isset($dataLocation['country_id']) ? $dataLocation['country_id'] : 0,
                'district_id' => isset($dataLocation['district_id']) ? $dataLocation['district_id'] : 0,
                'city_id' => isset($dataLocation['city_id']) ? $dataLocation['city_id'] : 0,
            ]);
        }

        $result = Post::create($request->all());
        if ($result) {
            return redirect()->route('admin.articles.index')->with('notify_success', 'Article create success!');
        }
        return redirect()->refresh();
    }

    /**
     * post edit article
     * @param Request $request
     * @param $id integer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(Request $request, $id)
    {
        $article = Post::findOrFail($id);
        $now = getdate();
        $url = (string)$now["year"] . "/" . (string)$now["mon"] . "/" . (string)$now["mday"] . '/';
        if (!is_dir(base_path($this->folder . $url))) {
            mkdir(base_path($this->folder . $url), 0755, true);
        }
        // check image render
        if ($request->file('picture')) {
            foreach ($request->file('picture') as $pictureUpload) {
                $fileName = uniqid() . '.jpg';
                if ($article->picture) {
                    if (file_exists(base_path($this->folder . $article['picture']))) {
                        unlink(base_path($this->folder . $article['picture']));
                    }
                }
                $pictureUpload->move(base_path($this->folder . $url), $fileName);
                $picture[] = $url . $fileName;
            }
            $request->merge(['pictures' => json_encode($picture, true)]);
        }

        $request->merge([
            'meta_description' => $request->get('meta_description'),
            'content' => str_replace([' class=""'], '', $request->get('content')),
            'user_id' => Auth::user()->id,
            'meta_custom_title' => $request->get('meta_custom_title') ? $request->get('meta_custom_title') : $request->get('title'),
            'slug' => $request->get('slug') ? $request->get('slug') : str_slug($request->get('title')),
            'user_id' => Auth::user()->id,
        ]);

        //check location
        if ($request->get('location')) {
            $dataLocation = Location::select('ward_id', 'district_id', 'country_id', 'city_id')->find($request->get('location'));
            $request->merge([
                'ward_id' => isset($dataLocation['ward_id']) ? $dataLocation['ward_id'] : 0,
                'country_id' => isset($dataLocation['country_id']) ? $dataLocation['country_id'] : 0,
                'district_id' => isset($dataLocation['district_id']) ? $dataLocation['district_id'] : 0,
                'city_id' => isset($dataLocation['city_id']) ? $dataLocation['city_id'] : 0,
            ]);
        }

        $result = $article->update($request->all());
        if ($result) {
            return redirect()->route('admin.articles.index')->with('notify_success', 'Article update success!');
        }
        return redirect()->refresh();
    }

    /**
     * post delete article
     * @param Request $request
     * @return json
     */
    public function postDelete(Request $request)
    {
        if (Post::where('id', '=', $request->get('id'))->delete()) {
            return response()->json(['status' => 'success']);
        }
        return response()->json(['status' => 'error']);
    }

    /**
     * post view detail popup
     * @param Request $request
     * @return json
     */
    public function postDetail(Request $request)
    {
        $dataDetail = Post::findOrFail($request->get('id'));
        if ($dataDetail) {
            return response()->json([
                'success' => true,
                'data' =>
                    [
                        'title' => $dataDetail['title'],
                        'slug' => $dataDetail['slug'],
                        'content' => $dataDetail['content'],
                        'id' => $dataDetail['id']
                    ]
            ]);
        }

        return response()->json([
            'success' => false,
            'data' => [],
        ]);
    }

    /**
     * Post upload image ajax
     * @param Request $request
     * @return array
     */
    public function postUpload(Request $request)
    {
        $now = getdate();
        $url = (string)$now["year"] . "/" . (string)$now["mon"] . "/" . (string)$now["mday"] . '/';
        // check image render
        if (!is_dir(base_path($this->folder . $url))) {
            mkdir(base_path($this->folder . $url), 0777, true);
        }
        if ($request->file('file')) {
            $fileName = uniqid() . '.jpg';
            $request->file('file')->move(base_path($this->folder . $url), $fileName);
            $picture = $url . $fileName;
            return [
                'status' => true,
                'url' => '/images/posts/' . $picture,
            ];
        }
        return [
            'status' => false,
        ];
    }

    /**
     * get ajax location select
     * @param Request $request
     * @return json
     */
    public function getLocations(Request $request)
    {
        if (isset($request->all()['key'])) {
            $location = Location::select('id', 'name')->where('name', 'like', '%' . $request->all()['key'] . '%')->take(10)->get();
        } else {
            $location = [];
        }
        return response()->json($location);
    }
}
