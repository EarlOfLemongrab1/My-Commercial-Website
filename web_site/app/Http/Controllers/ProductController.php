<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
  
class ProductController extends Controller
{   
    public function index3() {
        $products=Product::all();
        return view('/panier',['products'=> $products]);
    }
    public function index() {
    $products=Product::all();
    return view('/catalogue',['products'=> $products]);
}
    public function index2(Request $request) {
        $product=Product::find($request->id);
        return view('product', compact('product'));
    }

    public function products() {
        return view('product',['products' => Product::all()]);
    }
    
    public function add(Request $request) 
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        $product=new Product();
        $product->name = request('name');
        $imagname=time().'.'. $request->image->extension();
        $request->image->move(public_path('img'),$imagname);
        $product->image=$imagname;
        $product->stock = request('stock');
        $product->description = request('description');
        $product->price = request('price');
        $product-> save();
    return back();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}