<?php

namespace App\Http\Controllers;

use App\Models\SerialNumber;
use Illuminate\Http\Request;

class SerialNumberController extends Controller
{
    public function create()
    {
        return view('serial_number.create');
    }

    public function store(Request $request)
    {
        $lastSerialNumber = SerialNumber::latest('id')->first();

        if ($lastSerialNumber) {
            $lastSerialNumber = (int)$lastSerialNumber->serial_number;
        } else {
            $lastSerialNumber = 0;
        }

        $newSerialNumber = $lastSerialNumber + 1;

        $serialNumber = new SerialNumber();
        $serialNumber->serial_number = str_pad($newSerialNumber, 4, '200', STR_PAD_LEFT);
        $serialNumber->save();

        return redirect()->route('serial_number.create')
            ->with('success', 'Serial number created successfully.');
    }
}
