<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Datatables;
use Symfony\Component\HttpFoundation\Request;

class CategoriesController extends Controller
{
    /**
     * get index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $categoryPath = route('admin.categories.index');
        $categories = Category::tree();
        return view('admin.categories.index', compact('categories', 'categoryPath'));
    }

    /**
     * get tree view
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTreeView()
    {
        $categories = Category::tree();
        return response()->json($categories);
    }

    /**
     * post create
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(Request $request)
    {
        $request->merge([
            'slug' => $request->get('slug') ? $request->get('slug') : str_slug($request->get('title')),
            'meta_title' => $request->get('meta_title') ? $request->get('meta_title') : $request->get('title')
        ]);

        $result = Category::create($request->all());
        if ($result) {
            return redirect()->route('admin.categories.index')->with('notify_success', 'Category create success');
        }
        return redirect()->refresh();
    }

    /**
     * get view edit
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $categoryPath = route('admin.categories.index');
        $categories = Category::where('id', '!=', $id)->get();
        $category = Category::findOrFail($id);

        $status = Category::$statusName;
        return view('admin.categories.edit', compact('categories', 'category', 'categoryPath', 'status'));
    }

    /**
     * post edit
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(Request $request, $id)
    {
        $result = Category::findOrFail($id);
        $request->merge([
            'slug' => $request->get('slug') ? $request->get('slug') : str_slug($request->get('title')),
            'meta_title' => $request->get('meta_title') ? $request->get('meta_title') : $request->get('title')
        ]);
        $result->update($request->all());
        if ($result) {
            return redirect()->route('admin.categories.index')->with('notify_success', 'Update category success');
        }
        return redirect()->refresh();
    }

    /**
     * get view getCreate
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $category = new category();
        $categories = Category::where('parent_id', 0)->get();

        $status = Category::$statusName;
        return view('admin.categories.create', compact('categories', 'category', 'status'));
    }

}
