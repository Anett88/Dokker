<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ingatlanok as ingatlan;

class Ingatlanok extends Controller
{
    public function index()
    {
        $tasks=ingatlan::all();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $task=new ingatlan();
        $task->id=$request->id;
        $task->kategoria=$request->kategoria;
        $task->leiras=$request->leiras;
        $task->hirdetesDatuma=$request->hirdetesDatuma;
        $task->tehermenetes=$request->tehermenetes;
        $task->ar=$request->ar;
        $task->kepUrl=$request->kepUrl;

        $task->save();
    }

    public function update(Request $request, $taskId)
    {
        $task=ingatlan::find($taskId);
        $task->id=$request->id;
        $task->kategoria=$request->kategoria;
        $task->leiras=$request->leiras;
        $task->hirdetesDatuma=$request->hirdetesDatuma;
        $task->tehermenetes=$request->tehermenetes;
        $task->ar=$request->ar;
        $task->kepUrl=$request->kepUrl;
        $task->save();
    }
    public function destroy($taskId)
    {
        $task=ingatlan::find($taskId);
        $task->delete();
    }

}
