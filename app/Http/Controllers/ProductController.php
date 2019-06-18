<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function index(){
//        return view('product');
//    }

    public function index()
    {
        $products = Product::with('categories')->get();

        return view('products.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::get();

        return view('products.create', ['categories' => $categories]);
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|unique:products|max:255',
            'description' => 'required',
            'price'       => 'required|integer',
            'category_id' => 'required|integer',
            'icons'       => ''
        ]);

        $data = [];

        if (!empty($files = $request->file('icons'))) {
            foreach ($files as $image) {
                if (!empty($image)) {
                    $fileName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path() . '/images/', $fileName);
                    $data[] = $fileName;;
                }
            }
        }

        $product = new Product();

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->type = $request->input('type');
        $product->category_id = $request->input('category_id');
        $product->icons = json_encode($data);

        $product->save();

        return redirect()->route('products.index')->withStatus(__('Product successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $categories = Category::get();

        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * @param $request
     * @param Product $product
     * @return mixed
     */
    public function update(Request $request, Product $product)

    {
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'price'       => 'required|integer',
            'category_id' => 'required|integer',
            'icons'       => ''
        ]);

        $data = [];

        if (!empty($files = $request->file('icons'))) {
            foreach ($files as $image) {
                if (!empty($image)) {
                    $fileName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path() . '/images/', $fileName);
                    $data[] = $fileName;;
                }
            }
        }
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->type = $request->input('type');
        $product->category_id = $request->input('category_id');
        $product->icons = json_encode($data);

        $product->save();

        return redirect()->route('products.index')->withStatus(__('Product successfully updated.'));
    }

    /**
     * @param Product $product
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->withStatus(__('Product successfully deleted.'));
    }

    public function detail($id)
    {
        $product = Product::find($id);

        if (!empty($product)) {
            return view('product-show', ['product' => $product]);
        }

        return redirect()->route('home-page');

    }
}
