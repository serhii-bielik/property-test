<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $items = \App\Property::select(['id', 'title'])
            ->orderBy('id', 'desc')
            ->limit(50)
            ->get();

        return view('property.index', ['items' => $items]);
    }

    public function show($propertyId)
    {
        $property = Property::where('id', $propertyId)
            ->with(['city', 'type', 'status', 'amenities', 'areas', 'agency'])
            ->first();

        return view('property.single', [
                'property' => $property,
            ]);
    }
}
