<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

public function index()
{
$viewData = [];
$viewData["title"] = "Products - Online Store";
$viewData["subtitle"] = "List of products";
//$viewData["products"] = ProductController::$products;
$viewData["products"] = Product::all();
return view('product.index')->with("viewData", $viewData);
}

public function show($id)
{
$viewData = [];
//$product = ProductController::$products[$id-1];
$product = Product::findOrFail($id);
$viewData["title"] = $product->getName()." - Online Store";
$viewData["subtitle"] =  $product->getName()." - Product information";
$viewData["product"] = $product;
return view('product.show')->with("viewData", $viewData);
}
}
