<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FileUploads\HandleSpladeFileUploads;
use ProtoneMedia\Splade\FormBuilder\Checkbox;
use ProtoneMedia\Splade\FormBuilder\File;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\FormBuilder\Textarea;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = SpladeTable::for(Category::class)
            ->column('name')
            ->column('title_image')
            ->column('description')
            ->column('featured',as: function($featured){
                return $featured ? 'Yes' : 'No';
            })
            ->column('status',as: function($status){
                return $status ? 'Active' : 'Inactive';
            })
            ->column('actions')
            ->paginate(10);

        return view('dashboard.category.index')->with('categories',$categories);
    }

    public function create()
    {
        $details = [
            'url' => route('dashboard.category.store'),
            'method' => 'POST',
            'title' => 'Create New Category',
            'type' => 'create'
        ];
        return view('dashboard.category.form')->with('details',$details);
    }

    public function store(CategoryRequest $request)
    {
        HandleSpladeFileUploads::forRequest($request);

        Category::create([
            'name' => $request->name,
            'title_image' => $request->file('title_image')->store('categories','public'),
            'description' => $request->description,
            'featured' => $request->featured,
            'status' => $request->status,
        ]);
        Toast::success('Category created successfully!');
        return redirect()->route('dashboard.category.index');
    }

    public function edit(Category $category)
    {
        $details = [
            'url' => route('dashboard.category.update',['category' => $category]),
            'method' => 'PUT',
            'title' => 'Update Category',
            'type' => 'edit'
        ];
        $defaults = [
            'name' => $category->name,
            'title_image' => asset('storage/'.$category->title_image) ,
            'description' => $category->description,
            'featured' => $category->featured,
            'status' => $category->status,
            'category'=>$category->id,
        ];
        return view('dashboard.category.form')->with('details',$details)->with('defaults',$defaults);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        if($request->file('title_image')){
             unlink(public_path('storage/'.$category->title_image));
            $category->update([
                'title_image' => $request->file('title_image')->store('categories','public'),
            ]);
        }
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'featured' => $request->featured,
            'status' => $request->status,
        ]);
        Toast::success('Category Updated successfully!');
        return redirect()->route('dashboard.category.index');
    }

    public function delete(Category $category)
    {
        unlink(public_path('storage/'.$category->title_image));
        $category->delete();
        Toast::success('Category Deleted successfully!');
        return redirect()->route('dashboard.category.index');
    }

    function createForm(){

    }

}
