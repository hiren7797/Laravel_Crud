<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Car;
use DB;
class CarController extends Controller
{
     /**method to add new car */
     public function create(Request $request)
    {
        $make=$request['make'];
        $model=$request['model'];
        $p_o=$request['p_o'];

        $car=new Car();
        $car->name=$make;
        $car->model=$model;
        $car->produed_on=$p_o;

        $car->save();
        return redirect()->back();



    }
     
     /**method to show car  details*/
     public function show()
     { 
         $cars=Car::all();
         return view('index',['cars'=>$cars]);
     }

    /**method to edit car details */
     public function edit(Request $request)
     {
        $p_o=$request['p_o'];
        $make=$request['make'];
        $model=$request['model'];
        DB::update('update cars set name = ?,produed_on=? where model=?',[$make,$p_o,$model]);
        //echo "Record updated successfully";
        return redirect()->back();
     }
    /**method to delete car details */
     public function delete(Request $request)
     {
       $model=$request['model'];
       DB::delete('delete from cars where model=?',[$model]);
       //echo"Record deleted successfully.";  
       return redirect()->back();
     }
}
 