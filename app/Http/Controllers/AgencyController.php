<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Property;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function show($agencyId)
    {
        $agency = Agency::findOrFail($agencyId);

        $properties = Property::select(['id', 'title', 'description', 'photos',
            'price', 'area', 'rooms', 'bathrooms'])
            ->where('agency_id', $agencyId)
            ->orderBy('id', 'desc')
            ->limit(50)
            ->get();

        return view('property.agency', [
            'properties' => $properties,
            'agency' => $agency,
        ]);
    }
}
