<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait ApiControllerTrait {

  public function index (Request $request) {
    if (method_exists($this, 'beforeIndex'))
      $this->beforeIndex($request);
    
    $order = $request->all()['order'] ?? ' id asc ';
    $where = $request->all()['where'] ?? true;
    
    if (method_exists($this, 'beforeIndex'))
    $this->beforeIndex($request);
    
    $result = $this->model->whereRaw($where)
      ->orderByRaw($order)
      ->with($this->with ?? [])
      ->get();

    if (method_exists($this, 'afterIndex'))
      $this->afterIndex($request, $result);

    return response()->json($result);
  }

  public function store (Request $request) {
    if (method_exists($this, 'beforeStore'))
      $this->beforeStore($request);

    $result = $this->model->create($request->all()); 
    $result = $this->model->withoutGlobalScopes()->with($this->with ?? [])->find($result->id);
   
    if (method_exists($this, 'afterStore'))
      $this->afterStore($result, $request);

    return response()->json($result);
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function show ($id) {
    $result = $this->model->withoutGlobalScopes()->with($this->with ?? [])->findOrFail($id);

    return response()->json($result);
  }

  public function update (Request $request, $id) {
    $oldValue = $this->model->withoutGlobalScopes()->find($id);
    if (method_exists($this, 'beforeUpdate'))
      $this->beforeUpdate($oldValue, $request, $id);

      $this->model->withoutGlobalScopes()->findOrFail($id)->update($request->all());
      $result = $this->model->withoutGlobalScopes()->with($this->with ?? [])->findOrFail($id);

    if (method_exists($this, 'afterUpdate'))
      $this->afterUpdate($oldValue, $request, $id, $result);


    return response()->json($result);
  }

  public function updateMany (Request $request) {
    foreach ($request->all() as $item) {
      $objeto = $this->model->withoutGlobalScopes()->findOrFail($item['id']);
      $objeto->update($item);
      $result[] = $objeto;
    }

    return response()->json($result);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy ($id) {
    if (method_exists($this, 'beforeDelete'))
      $this->beforeDelete($id);

    $result = $this->model->withoutGlobalScopes()->with($this->with ?? [])->findOrFail($id);
    $result->delete();

    if (method_exists($this, 'afterDelete'))
      $this->afterDelete($result, $id);

    return response()->json($result);
  }

  // Função que percorre as tarefas para inserir a duração total, é usado na controller das tarefas e conenctions
  public function recursive ($tasks) {
    $sum = 0;
    foreach (($tasks ?? []) as $task) {
      $sum += intval($task->column_duration) + intval($this->recursive($task->durationSubTasks));
    }
    return $sum;
  }

//    public function destroyMany(Request $request) {
//        dd($request->all());
//        foreach ($request->all() as $item) {
//            $objeto = $this->model->findOrFail($item['id']);
//            $objeto->delete($item);
//            $result[] = $objeto;
//        }
//
//        return response()->json($result);
//    }
}
