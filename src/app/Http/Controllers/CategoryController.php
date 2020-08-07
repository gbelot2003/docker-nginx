<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categs = Category::paginate(10);
        return View('categories.index', compact('categs'));
    }

    public function create()
    {
        return View('categories.create');
    }

    public function store(Request $request)
    {
        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
        $fname = $cover->getFilename().'.'.$extension;
        Storage::disk('public')->put($fname,  File::get($cover));
        $image_url = env('APP_URL') .'/storage/' . $fname;

        $request['image_url'] = $image_url;
        Category::create($request->all());
        return redirect()->to('/categorias');
    }
}
