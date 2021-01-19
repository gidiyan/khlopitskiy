<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'logo' => 'mimes:jpg,jpeg,png,svg|max:1000'
        ]);
        $brand = Brand::create($request->all());
        if ($request->image) {
            $imagedata = file_get_contents($request->image);
            $base64 = base64_encode($imagedata);
            $logo = $base64;
            $brand->update(['logo' => $logo]);
        }
        if (!$brand) {
            return back()->withInput();
        }
        return redirect()->route('admin.brands.index')->withMessage('ЖК успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());
        return redirect()->route('admin.brands.index')->withMessage('ЖК успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('admin.brands.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function trashed()
    {
        $brands = Brand::onlyTrashed()->get();
        return view('admin.brands.trashed',
            compact('brands')
        );
    }

    public function restore($id)
    {
        Brand::withTrashed()->where('id', $id)->restore();
        return redirect()->route('admin.brands.trashed');
    }

    public function force($id)
    {
        $brand = Brand::withTrashed()->where('id', $id)->first();
        $brand->forceDelete();
        return redirect()->route('admin.brands.trashed');
    }
}
