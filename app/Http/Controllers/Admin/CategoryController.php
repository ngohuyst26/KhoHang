<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {

        return view('pages.admin.categories.add-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status == 'active' ? 1 : 0;
        $category->save();

        return redirect()->back()->with('success', 'Thêm danh mục thành công!');
    }

    public function list()
    {
        $categories = Category::
        orderBy('id', 'desc')
            ->paginate(5);
        return view('pages.admin.categories.list-category', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.admin.categories.edit-category', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status == 'active' ? 1 : 0;
        $category->save();

        return redirect()->back()->with('success', 'Cập nhật danh mục thành công!');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Xóa danh mục thành công!');
    }
}
