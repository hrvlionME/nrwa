<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name'                    => 'required|string',
            'ProductNumber'           => 'required|string',
            'MakeFlag'                => 'required',
            'FinishedGoodsFlag'       => 'required',
            'Color'                   => 'nullable|string',
            'SafetyStockLevel'        => 'required|integer',
            'ReorderPoint'            => 'required|integer',
            'StandardCost'            => 'required|numeric',
            'ListPrice'               => 'required|numeric',
            'Size'                    => 'nullable|string',
            'SizeUnitMeasureCode'     => 'nullable|string',
            'WeightUnitMeasureCode'   => 'nullable|string',
            'Weight'                  => 'nullable|numeric',
            'DaysToManufacture'       => 'required|integer',
            'ProductLine'             => 'nullable|string',
            'Class'                   => 'nullable|string',
            'Style'                   => 'nullable|string',
            'ProductSubcategoryID'    => 'nullable|integer',
            'ProductModelID'          => 'nullable|integer',
            'SellStartDate'           => 'required|date',
            'SellEndDate'             => 'nullable|date',
            'DiscontinuedDate'        => 'nullable|date',
            'rowguid'                 => 'required',
            'ModifiedDate'            => 'required|date',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'Name'                    => 'required|string',
            'ProductNumber'           => 'required|string',
            'MakeFlag'                => 'required',
            'FinishedGoodsFlag'       => 'required',
            'Color'                   => 'nullable|string',
            'SafetyStockLevel'        => 'required|integer',
            'ReorderPoint'            => 'required|integer',
            'StandardCost'            => 'required|numeric',
            'ListPrice'               => 'required|numeric',
            'Size'                    => 'nullable|string',
            'SizeUnitMeasureCode'     => 'nullable|string',
            'WeightUnitMeasureCode'   => 'nullable|string',
            'Weight'                  => 'nullable|numeric',
            'DaysToManufacture'       => 'required|integer',
            'ProductLine'             => 'nullable|string',
            'Class'                   => 'nullable|string',
            'Style'                   => 'nullable|string',
            'ProductSubcategoryID'    => 'nullable|integer',
            'ProductModelID'          => 'nullable|integer',
            'SellStartDate'           => 'required|date',
            'SellEndDate'             => 'nullable|date',
            'DiscontinuedDate'        => 'nullable|date',
            'rowguid'                 => 'required',
            'ModifiedDate'            => 'required|date',
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
