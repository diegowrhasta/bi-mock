<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendant;
class AttendantController extends Controller
{
    public function index(){
        $attendant = Attendant::all();
        $count = $attendant->count();
        if($count>=1){
                return $attendant;
        }
        else{
                return response()->json(['Message'=>'Not Found'],404);;
        }
    }
    public function show($id_attendant){
        $attendant = Attendant::find($id_attendant);
        if(!$attendant){
            return response()->json(['Message'=>'Not Found'],404);
        }
        else{
            return $attendant;
        }  
    }
    public function store(Request $request){
        $attendant = $request->json()->all();
        $created = Attendant::create($attendant);
        return $created;
    }
    public function update(Request $request, $id){
        $attendant = Attendant::findOrFail($id); 
        $attendant->update($request->json()->all());
        return $attendant;
    }
    public function delete(Request $request, $id){
        $attendant = Attendant::findOrFail($id);
        $attendant->delete();
        return 204;
    }

}
