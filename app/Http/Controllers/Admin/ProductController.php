<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET  /admin/products
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // GET  /admin/products/create
    public function create()
    {
        return view('admin.products.create');
    }

    // POST /admin/products
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_pt'        => 'required|string',
            'name_en'        => 'required|string',
            'description_pt' => 'required|string',
            'description_en' => 'required|string',
            'price'          => 'required|numeric',
            'image'          => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')
                                      ->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('admin.products.index');
    }

    // GET  /admin/products/{product}
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    // GET  /admin/products/{product}/edit
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // PUT  /admin/products/{product}
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name_pt'        => 'required|string',
            'name_en'        => 'required|string',
            'description_pt' => 'required|string',
            'description_en' => 'required|string',
            'price'          => 'required|numeric',
            'image'          => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')
                                      ->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('admin.products.index');
    }

    // DELETE /admin/products/{product}
    public function destroy(Product $product)
    {
        // opcional: apagar imagem do disco
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
