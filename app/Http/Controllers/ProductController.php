<?php

// namespace App\Http\Controllers;

// use App\Models\Product;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

// class ProductController extends Controller
// {
//     public function index()
//     {
//         $products = Product::all();
//         return view('product.index', compact('products'));
//     }

//     public function create()
//     {
//         return view('product.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'description' => 'required',
//             'price' => 'required|numeric',
//             'quantity' => 'required|numeric',
//             'image' => 'image|nullable|max:1999'
//         ]);

//         if ($request->hasFile('image')) {
//             $filenameWithExt = $request->file('image')->getClientOriginalName();
//             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//             $extension = $request->file('image')->getClientOriginalExtension();
//             $fileNameToStore = $filename.'_'.time().'.'.$extension;
//             $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
//         } else {
//             $fileNameToStore = 'noimage.jpg';
//         }

//         $product = new Product;
//         $product->name = $request->input('name');
//         $product->description = $request->input('description');
//         $product->price = $request->input('price');
//         $product->quantity = $request->input('quantity');
//         $product->image = $fileNameToStore;
//         $product->save();

//         return redirect('/products')->with('success', 'Prodotto aggiunto');
//     }

//     public function show($id)
//     {
//         $product = Product::findOrFail($id);
//         return view('product.show', compact('product'));
//     }

//     public function edit($id)
//     {
//         $product = Product::findOrFail($id);
//         return view('product.edit', compact('product'));
//     }

//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'name' => 'required',
//             'description' => 'required',
//             'price' => 'required|numeric',
//             'quantity' => 'required|numeric',
//             'image' => 'image|nullable|max:1999'
//         ]);

//         $product = Product::findOrFail($id);

//         if ($request->hasFile('image')) {
//             if ($product->image != 'noimage.jpg') {
//                 Storage::delete('public/images/'.$product->image);
//             }

//             $filenameWithExt = $request->file('image')->getClientOriginalName();
//             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//             $extension = $request->file('image')->getClientOriginalExtension();
//             $fileNameToStore = $filename.'_'.time().'.'.$extension;
//             $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
//         } else {
//             $fileNameToStore = $product->image;
//         }

//         $product->name = $request->input('name');
//         $product->description = $request->input('description');
//         $product->price = $request->input('price');
//         $product->quantity = $request->input('quantity');
//         $product->image = $fileNameToStore;
//         $product->save();

//         return redirect('/products')->with('success', 'Prodotto aggiornato');
//     }

//     public function destroy($id)
//     {
//         $product = Product::findOrFail($id);

//         if ($product->image != 'noimage.jpg') {
//             Storage::delete('public/images/'.$product->image);
//         }

//         $product->delete();
//         return redirect('/products')->with('success', 'Prodotto rimosso');
//     }
// }

// òòòòòòòòòòòòòòòòòòòòòòòòòòòòòò
// òòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòò
// òòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòòò


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;
// use Illuminate\Support\Facades\Storage;

// class ProductController extends Controller
// {
//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'name' => 'required',
//             'description' => 'required',
//             'price' => 'required|numeric',
//             'quantity' => 'required|integer',
//             'image' => 'image|nullable|max:1999'
//         ]);

//         if ($request->hasFile('image')) {
//             $fileNameToStore = $request->file('image')->store('images', 'public');
//         } else {
//             $fileNameToStore = 'noimage.jpg';
//         }

//         Product::create([
//             'name' => $data['name'],
//             'description' => $data['description'],
//             'price' => $data['price'],
//             'quantity' => $data['quantity'],
//             'image' => $fileNameToStore
//         ]);

//         return redirect()->route('products.index');
//     }

//     public function update(Request $request, $id)
//     {
//         $data = $request->validate([
//             'name' => 'required',
//             'description' => 'required',
//             'price' => 'required|numeric',
//             'quantity' => 'required|integer',
//             'image' => 'image|nullable|max:1999'
//         ]);

//         $product = Product::findOrFail($id);

//         if ($request->hasFile('image')) {
//             $fileNameToStore = $request->file('image')->store('images', 'public');
//             if ($product->image != 'noimage.jpg') {
//                 Storage::disk('public')->delete($product->image);
//             }
//             $product->image = $fileNameToStore;
//         }

//         $product->update([
//             'name' => $data['name'],
//             'description' => $data['description'],
//             'price' => $data['price'],
//             'quantity' => $data['quantity']
//         ]);

//         return redirect()->route('products.index');
//     }
// }










// 



// 


// 



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->storeAs('images', $imageName, 'public');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $imageName
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('images', $imageName, 'public');
            $product->image = $imageName;
        }

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully');
    }
}
