<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    function index()
    {
     $brand_list = DB::table('brand_type_size')
         ->groupBy('brand')
         ->get();
     return view('detail-productt')->with('brand_list', $brand_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('brand_type_size')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}

?>
