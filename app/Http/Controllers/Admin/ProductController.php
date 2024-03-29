<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product, Brand, Category, Picture};


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $product = Product::create($request->all());
        if ($request->images) {
            foreach ($request->images as $file) {
                $imagedata = file_get_contents($file);
                $base64 = base64_encode($imagedata);
//                $filename = $this->uploadImage($file);
                $picture = Picture::create([
                    'filename' => $base64
//                    'filename' => $filename
                ]);
                $product->pictures()->attach($picture->id);
            }
        }
        $category = Category::find($request->categories);
        $product->categories()->attach($category);
        return redirect()->route('admin.products.index')->withMessage('Проект успешно создан');
    }

//    public function uploadImage(UploadedFile $file): string
//    {
//        $filename = md5($file->getClientOriginalName() . time()) . uniqid('', true);
//        $file->storeAs('public/products', $filename);
//        return asset('storage/products/' . $filename);
//    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $product_categories = $product->categories()->get();
        return view('admin.products.show', compact('product', 'brands', 'categories', 'product_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $product_categories = $product->categories()->get();
        return view('admin.products.edit', compact('product', 'brands', 'categories', 'product_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        $product->categories()->sync($request->categories);
        return redirect()->route('admin.products.index')->withMessage('Проект успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function trashed()
    {
        $products = Product::onlyTrashed()->get();
        return view('admin.products.trashed',
            compact('products')
        );
    }

    public function restore($id)
    {
        Product::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.products.trashed');
    }

    public function force($id)
    {
        $product = Product::withTrashed()->where('id', $id)->first();
        $product->forceDelete();
        return redirect()->route('admin.products.trashed');
    }

}
