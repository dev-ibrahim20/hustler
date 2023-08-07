<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Traits\saveImagesTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use saveImagesTrait;

    public function index()
    {
        $product = Product::get();
        return view('Admin.product.home', compact('product'));
    }

    public function addProduct()
    {
        return view('Admin.product.addProduct');
    }

    public function store(Request $request)
    {

        // Save photo in folder
        $file_name = $this->saveImage($request->image, 'frontend/images/product');
        // install Data
        Product::create([
            'name' => $request->name,
            'disc' => $request->disc,
            'price' => $request->price,
            'image' => $file_name,
            'size' => $request->size,
            'color' => $request->color,
            'drive_cost' => $request->cost,
        ]);

        return redirect(route('product_admin'));
    }

    public function editProduct($id)
    {
        $products = Product::find($id); // search in given table id only
        if (!$products)
            return redirect()->back();

        $prod = Product::select('id', 'name', 'disc', 'price', 'image', 'size', 'color', 'drive_cost')->find($id);

        return view('Admin/product/editProduct', compact('prod'));
    }
    public function updateProduct(Request $request, $id)
    {
        // $product = Product::get();
        $_product = Product::find($id);
        if (!$_product)
            return redirect()->back();

        // update data
        if ($request->image) {
            $file_name = $this->saveImage($request->image, 'frontend/images/product');

            $_product->update([
                'name' => $request->name,
                'disc' => $request->disc,
                'price' => $request->price,
                'image' => $file_name,
                'size' => $request->size,
                'color' => $request->color,
                'drive_cost' => $request->cost,
            ]);
        } else {
            $_product->update([
                'name' => $request->name,
                'disc' => $request->disc,
                'price' => $request->price,
                'image' => $_product->image,
                'size' => $request->size,
                'color' => $request->color,
                'drive_cost' => $request->cost,
            ]);
        }

        return redirect()->route('product_admin');
    }


    public function deleteProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product)
            return redirect()->back();

        $product->delete();
        return redirect()->back();
    }


    // Order Logic

    public function order_dash()
    {
        $order = Order::get();
        return view('Admin/product/order', compact('order'));
    }

    public function Delete_order(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order)
            return redirect()->back();

        $order->delete();
        return redirect()->back();
    }
}
