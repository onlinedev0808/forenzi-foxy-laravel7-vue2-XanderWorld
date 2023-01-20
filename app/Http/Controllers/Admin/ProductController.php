<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    //! VALIDATION
    // private $validation = [
    //     // 'code' =>
    //     // [
    //     //     'min:3', 'max:5', 'required',
    //     //     Rule::unique('products', 'code')->ignore($product->id),
    //     // ],
    //     // 'name' =>
    //     // [
    //     //     'min:3', 'max:20', 'required',
    //     //     Rule::unique('products', 'name')->ignore($product->id),
    //     // ],
    //     // 'length' => 'min:1|numeric|required',
    //     // 'width' => 'min:1|numeric|required',
    //     // 'height' => 'min:1|numeric|required',
    //     // 'color' => 'min:3|required',
    //     // 'type' => 'min:3|required',
    //     // 'print' => 'min:3|required',
    //     // 'description' => 'max:250',
    //     // 'price' => 'min:1|numeric|required',
    //     // 'img' => 'min:3|active_url|url|required',
    // ];
    // private $validationCustom = [
    //     // 'code.required' => ':attribute è necessario.',
    //     // 'min' => ':attribute non ha raggiunto i caratteri richiesti dal sistema.',
    //     // 'max' => ':attribute ha superato il limite di caratteri supportati dal sistema.',
    //     // 'numeric' => ':attribute deve essere un numero. ',
    //     // 'url' => ':attribute necessita di un url reale e attivo.',
    // ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        $prints = Product::select('print')->distinct()->get();
        $colors = Product::select('color')->distinct()->get();
        $purchasable_in_multi_of = Product::select('purchasable_in_multi_of')->distinct()->get();
        //* dd($colors);
        return view('admin.products.create', compact('colors', 'prints', 'categories', 'subcategories', 'purchasable_in_multi_of'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validation = $request->validate($this->validation, $this->validationCustom);
        $data = $request->all();
        // dd($data);

        $validatedData = $request->validate([
            'code' => [
                'required',
                'min:3',
                'max:10',
                Rule::unique('products')
            ],
            'name' => 'required|min:3|max:255',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
            'color' => 'required|string',
            'print' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'img' => 'required|url|max:2048',
            'mini_description' => 'required|string',
            'price_saled' => 'nullable|numeric',
            'weight' => 'required|numeric',
            'first_price' => 'numeric',
            'second_price' => 'numeric',
            'third_price' => 'numeric',
            'fourth_price' => 'numeric',
            'purchasable_in_multi_of' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
            'subcategory_id' => 'required|integer|exists:subcategories,id',
        ]);

        // dd($data);

        $product = new Product();

        $product->category_id = $data['category_id'];
        $product->subcategory_id = $data['subcategory_id'];

        $product->code = $data['code'];
        $product->name = $data['name'];
        $product->length = $data['length'];
        $product->height = $data['height'];
        $product->width = $data['width'];
        $product->color = $data['color'];
        $product->print = $data['print'];

        $product->first_price = $data['first_price'];
        $product->second_price = $data['second_price'];
        $product->third_price = $data['third_price'];
        $product->fourth_price = $data['fourth_price'];

        $product->price = $data['price'];
        $product->price_saled = $data['price_saled'];

        $product->quantity = $data['quantity'];
        $product->weight = $data['weight'];

        $product->purchasable_in_multi_of = $data['purchasable_in_multi_of'];

        $product->img = $data['img'];

        $product->mini_description = $data['mini_description'];
        $product->description = $data['description'];

        $product->save();


        return redirect()
            ->route('admin.products.show', $product->id)
            // ->route('admin.products.index')
            ->with('created', $data['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        //* dd($product);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();
        $subcategories = Subcategory::all();

        $prints = Product::select('print')->distinct()->get();
        $colors = Product::select('color')->distinct()->get();
        $purchasable_in_multi_of = Product::select('purchasable_in_multi_of')->distinct()->get();

        return view('admin.products.edit', compact('product', 'categories', 'subcategories', 'colors', 'prints', 'purchasable_in_multi_of'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $data = $request->all();
        // dd($data);

        // $validation = $request->validate($this->validation, $this->validationCustom);

        $validatedData = $request->validate([
            'code' => [
                'required',
                'min:3',
                'max:10',
                Rule::unique('products')->ignore($product->id)
            ],
            'name' => 'required|min:3|max:255',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
            'color' => 'required|string',
            'print' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'img' => 'required|url|max:2048',
            'mini_description' => 'required|string',
            'price_saled' => 'nullable|numeric',
            'weight' => 'required|numeric',
            'first_price' => 'numeric',
            'second_price' => 'numeric',
            'third_price' => 'numeric',
            'fourth_price' => 'numeric',
            'purchasable_in_multi_of' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
            'subcategory_id' => 'required|integer|exists:subcategories,id',
        ]);


        //! non dobbiamo creare un new product ma modificare quello scelto
        $product->category_id = $data['category_id'];
        $product->subcategory_id = $data['subcategory_id'];

        $product->code = $data['code'];
        $product->name = $data['name'];
        $product->length = $data['length'];
        $product->height = $data['height'];
        $product->width = $data['width'];
        $product->color = $data['color'];
        $product->print = $data['print'];

        $product->first_price = $data['first_price'];
        $product->second_price = $data['second_price'];
        $product->third_price = $data['third_price'];
        $product->fourth_price = $data['fourth_price'];

        $product->price = $data['price'];
        $product->price_saled = $data['price_saled'];

        $product->quantity = $data['quantity'];
        $product->weight = $data['weight'];

        $product->purchasable_in_multi_of = $data['purchasable_in_multi_of'];

        $product->img = $data['img'];

        $product->mini_description = $data['mini_description'];
        $product->description = $data['description'];

        $product->save();

        return redirect()
            // rinominiamo la variabile post
            ->route('admin.products.show', ['product' => $product])
            ->with('edited', $data['name']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()
            ->route('admin.products.index')
            ->with('deleted', $product['name']);
    }
}
