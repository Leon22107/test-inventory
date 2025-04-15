<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Item_Stock;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock(){
        $items = Item_Stock::get();
        $itemsTotal = DB::table('items as i')
        ->join('item__stocks as is', 'i.id', '=', 'is.item_id')
        ->join('categories as c', 'c.id', '=', 'i.category_id')
        ->select('i.id', 'i.name', 'c.name as category', 'i.unit', DB::raw('SUM(is.qty) as total'))
        ->groupBy('i.id', 'i.name', 'c.name', 'i.unit')
        ->get();

        return view('pages.inventory.stock',["stock" => $items, "total_stock" => $itemsTotal]);
    }

    public function inputStock(){
        $stocks = Item_Stock::all();
        $vendor = Vendor::get();
        $category = Category::get();
        $items = Item::get();
        return view('pages.inventory.input',
        ["stock" => $stocks, "item" => $items,
        "category" => $category, "vendor" => $vendor]);
    }

    public function addmaterial(Request $request){
        Item_Stock::where('item_id', $request->input('name'))
        ->where('vendor_id', $request->input('vendor'))
        ->increment('qty', $request->input('qty'));

        return redirect('/stock');

    }

    public function newStock(){
        $category = Category::get();
        return view('pages.inventory.new', ["category" => $category]);
    }

    public function newItem(Request $request){
        Item::create([
            "name" => $request->input('name'),
            "sku" => $request->input('sku'),
            "unit" => $request->input('unit'),
            "category_id" => $request->input('category'),
        ]);

        return redirect('/stock');

    }
}
