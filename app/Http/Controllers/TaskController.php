<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Retornando tareas
        // $tasks=Task::orderBy('id','DESC')->get();
        // return $tasks;
        //Retornando tareas con paginación
        $tasks=Task::orderBy('id','DESC')->paginate(3);
        return [
        'pagination'=>[
            'total'        => $tasks->total(),      //total
            'current_page' => $tasks->currentPage(),//Pagina actual
            'per_page'     => $tasks->perPage(),    //Por pagina
            'last_page'    => $tasks->lastPage(),   //Ultima pagina
            'from'         => $tasks->firstItem(),  //Desde
            'to'           => $tasks->lastItem(),   //Hasta
        ],
        'tasks'            => $tasks
        ];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'keep'=>'required'
            ]);
        Task::create($request->all());
        return;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //formulario
        $task=Task::findOrFail($id);
        return $task;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'keep'=>'required',
            ]);
        Task::find($id)->update($request->all());
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task=Task::findOrFail($id);
        $task->delete();
    }
}
