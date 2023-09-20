<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FormBuilder\Checkbox;
use ProtoneMedia\Splade\FormBuilder\File;
use ProtoneMedia\Splade\FormBuilder\Input;
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
            ->column('featured')
            ->column('is_active')
            ->column('actions')
            ->paginate(10);
        return view('dashboard.category.index')->with('categories',$categories);
    }

    public function create()
    {
        $newCategoryForm = SpladeForm::make()
            ->action(route('dashboard.category.store'))
            ->method('POST')
            ->fields([
                Input::make('name')->label('Name')->placeholder('Name')->required(),
                File::make('title_image')->label('Title Image')->filepond()->preview()->placeholder('Title Image')->required(),
                Textarea::make('description')->label('Description')->placeholder('Description')->required(),
                Checkbox::make('featured')->label('Featured')->placeholder('Featured'),
                Checkbox::make('is_active')->label('Is Active')->placeholder('Is Active'),
            ]);
            return view('dashboard.category.create', compact('newCategoryForm'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'title_image' => $request->file('title_image')->store('categories','public'),
            'description' => $request->description,
            'featured' => $request->featured,
            'is_active' => $request->is_active,
        ]);
        Toast::success('Category created successfully!');
        return redirect()->route('dashboard.category.index');
    }

    public function edit()
    {

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
            'is_active' => $request->is_active,
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
