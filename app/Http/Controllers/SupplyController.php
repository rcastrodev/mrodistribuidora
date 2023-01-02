<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplie;
use App\Manufacturer;
use SEO;

class SupplyController extends Controller
{
    public function index()
    {
        SEO::setTitle("Productos");
        $items = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->distinct()
        ->paginate(20);

        $supplies_footer = Supplie::select('manufacturers.slug as name', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->orderByRaw('rand()')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->take(2)
        ->get();

        $title = 'PRODUCTOS';

        return view('products', compact('items', 'title', 'supplies_footer'));
    }

    
    public function show($manufacturer, $number)
    {
        $supplie = Supplie::where('slug', $number)->where('sync_connection_id', 1)->first();
        
        if(!$supplie){
            $supplie = Supplie::where('slug', $number)->first();
        }

        SEO::setTitle($supplie->number);
        SEO::setDescription($supplie->large_description);
        
        $fabricante = Manufacturer::where('id', $supplie->manufacturers_id)->first();

        $supplies = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('supplies.manufacturers_id', $supplie->manufacturers_id)
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->take(4)
        ->get();

        $supplies_footer = Supplie::select('manufacturers.name as manufacturer', 'manufacturers.slug as manufacturer_slug', 'supplies.number', 'supplies.slug as number_slug')
        ->leftJoin('manufacturers', 'supplies.manufacturers_id', 'manufacturers.id')
        ->where('manufacturers.slug', '<>', '')
        ->where('supplies.slug', '<>', '')
        ->orderByRaw('rand()')
        ->take(2)
        ->get();


        $title = strtoupper($number);
        return view('product', compact('supplie', 'supplies', 'title', 'supplies_footer'));
    }
}
