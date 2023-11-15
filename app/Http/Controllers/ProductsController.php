<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Coment;
use App\Models\CartItem;

use function Laravel\Prompts\alert;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products=Product::all();
        $totalVapes = Product::where('flavor', 'vape')->sum('quantity');
        return view("products.crud_productos",compact("products","totalVapes"));
        
    }

    public function store(Request $request)
    {
        // Validación de datos
    $request->validate([
        'nameProduct' => 'required',
        'quantityProduct' => 'required',
        'priceProduct' => 'required',
        'descriptionProduct' => 'required',
        'flavorProduct' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Valida que la imagen sea válida y no supere 2MB
    ]);

    // Procesa la imagen
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName); // Guarda la imagen en la carpeta "public/images"
    } else {
        $imageName = null;
    }

    // Crea el producto con los datos y la ruta de la imagen
    $product = new Product();
    $product->name = $request->input('nameProduct');//
    $product->quantity = $request->input('quantityProduct');
    $product->price = $request->input('priceProduct');
    $product->description = $request->input('descriptionProduct');
    $product->flavor = $request->input('flavorProduct');
    $product->image = $imageName; // Asigna la ruta de la imagen
    $product->save();

    return redirect()->route('products.index')
        ->with('success', 'Producto creado correctamente.');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    } 

    public function update(Request $request, string $id)
    {
        // Validación de datos
    $request->validate([
        'nameProduct' => 'required',
        'quantityProduct' => 'required',
        'priceProduct' => 'required',
        'descriptionProduct' => 'required',
        'flavorProduct' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048 ', // Valida que la imagen sea válida y no supere 2MB
    ]);

    // Busca el producto por ID
    $product = Product::find($id);

    // Actualiza los campos
    $product->name = $request->input('nameProduct');
    $product->quantity = $request->input('quantityProduct');
    $product->price = $request->input('priceProduct');
    $product->description = $request->input('descriptionProduct');
    $product->flavor = $request->input('flavorProduct');

    // Procesa la imagen si se proporciona una nueva
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName); // Guarda la nueva imagen en la carpeta "public/images"
        $product->image = $imageName;
    }

    $product->save();

    return redirect()->route('products.index')
        ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route("products.index");
    }
    public function show(string $id)
    {
        $product = Product::find($id);
        $comments = Coment::where('idProduct', $id)->with('user')->get();
        return view("products.descriProduct", compact("product", "comments"));
    }

    
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        // Verifica si el producto existe
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }

        // Obtiene la cantidad del formulario
        $quantity = $request->input('quantity', 1);

        // Valida que la cantidad sea válida
        if (!is_numeric($quantity) || $quantity < 1 || $quantity > 50) {
            return redirect()->route('products.index')->with('error', 'Invalid quantity.');
        }

        // Crea o actualiza el elemento del carrito en la base de datos
        CartItem::updateOrCreate(
            [
                'product_id' => $id,
                'user_id' => auth()->id(), // Ajusta según tus necesidades de autenticación
            ],
            [
                'quantity' => $quantity,
            ]
        );

        // Redirige al usuario a la página del carrito (ajusta según tus rutas)
        return redirect()->route('dashboard')->with('success', 'Product added to cart successfully!');
    }
    
}
