<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')
            ->where('available', true)
            ->with('category')->paginate(9);
        $categories = Category::all(['id', 'name'])->pluck('name', 'id');
        $total = Product::where('available', true)->count();

        return View('products.index', compact('products', 'categories', 'total'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return View('products.create', compact( 'categories'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
        $fname = $cover->getFilename().'.'.$extension;
        Storage::disk('public')->put($fname,  File::get($cover));
        $image_url = env('APP_URL') .'/storage/' . $fname;

        $request['image_url'] = $image_url;
        $request['available'] = true;
        $request['offer'] = rand(0, 1);
        $request['offer_price'] = rand(25, 85);
        Product::create($request->all());
        return redirect()->to('/productos');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(['id', 'name'])->pluck('name', 'id');
        return View('products.edit', compact('product', 'categories'));
    }
}
