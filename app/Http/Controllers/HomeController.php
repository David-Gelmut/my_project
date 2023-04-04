<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
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

    private const BB_VALIDATOR = [
        'name' => 'required|max:50',
        'description' => 'required',
        'price' => 'required|numeric'
    ];

    private const BB_ERROR_MESSAGES = [
        'price.required' => 'Заполните это поле',
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число'
    ];
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',
            ['products' => Auth::user()->products()->latest()->get()]);
    }

    public function formAdd() {
        return view('product_add');
    }

    public function storeProduct(Request $request) {
        $validated = $request->validate(self::BB_VALIDATOR,self::BB_ERROR_MESSAGES);
        Auth::user()->products()->create(['name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price']]);
        return redirect()->route('home');
    }

    public function formEdit(Product $product) {
        return view('product_edit', ['product' => $product]);
    }

    public function updateProduct(Request $request, Product $product) {
        $validated = $request->validate(self::BB_VALIDATOR,self::BB_ERROR_MESSAGES);
        $product->fill(['name' => $validated['name'],'description' => $validated['description'],'price' => $validated['price']]);
        $product->save();
        return redirect()->route('home');
    }

    public function formDelete(Product $product) {
        return view('product_delete', ['product' => $product]);
    }

    public function destroyProduct(Product $product) {
        $product->delete();
        return redirect()->route('home');
    }
}
