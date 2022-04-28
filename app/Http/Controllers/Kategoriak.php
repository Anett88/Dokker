<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriak as kategoria;
class Kategoriak extends Controller
{
    public function index()
    {
        $tasks=kategoria::all();
        return response()->json($tasks);
    }
    public function store(Request $request)
    {
        $task=new kategoria();
        $task->id=$request->id;
        $task->nev=$request->nev;
  
        $task->save();
    }

    public function update(Request $request, $taskId)
    {
        $task=kategoria::find($taskId);
        $task->id=$request->id;
        $task->nev=$request->nev;
        $task->save();
    }

    public function destroy($taskId)
    {
        $task=kategoria::find($taskId);
        $task->delete();
    }



}
