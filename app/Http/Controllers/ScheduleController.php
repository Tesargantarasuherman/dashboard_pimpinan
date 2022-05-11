<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
class ScheduleController extends Controller
{
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        
        $data = Schedule::latest()->get();

        return response()->json($data);
  
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function AddAgenda(Request $request){
        Schedule::create($request->all());
        return redirect()->back();
    }
    public function ajax(Request $request)
    {
 
        // switch ($request->type) {
        //    case 'add':
        //       $event = Schedule::create([
        //           'title' => $request->title,
        //           'start' => $request->start,
        //           'end' => $request->end,
        //       ]);
 
        //       return response()->json($event);
        //      break;
  
        //    case 'update':
        //       $event = Schedule::find($request->id)->update([
        //           'title' => $request->title,
        //           'start' => $request->start,
        //           'end' => $request->end,
        //       ]);
 
        //       return response()->json($event);
        //      break;
  
        //    case 'delete':
        //       $event = Schedule::find($request->id)->delete();
  
        //       return response()->json($event);
        //      break;
             
        //    default:
        //      # code...
        //      break;
        // }
    }
}
