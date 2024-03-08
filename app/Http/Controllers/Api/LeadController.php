<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        $validator = Validator::make($data , [
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'succes' => false,
                'errors' => $validator->errors(),
                
            ]);
        };

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        Mail::to('boolfolio@mail.com')->send(new NewContact($new_lead));

        return response()->json([
            'succes' => true
        ]);
    }
}
