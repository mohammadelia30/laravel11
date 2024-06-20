<?php

namespace App\Http\Controllers;

use App\Http\Requests\LabelRequest;
use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Label::with('orders', 'warranty')->find($id);
        } else {
            $factor = Label::paginate(10);
        }
        return response()->json($factor);
    }

    public function store(LabelRequest $request)
    {
        $factor = Label::create($request->toArray());
        return response()->json($factor);
    }

    public function edit(LabelRequest $request)
    {
        $label= Label::updated($request->toArray()) ;
        return response()->json($label);
    }

    public function delete($id)
    {
        $factor = Label::destroy($id);
        return response()->json($factor);
    }
}
