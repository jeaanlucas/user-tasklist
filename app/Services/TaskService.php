<?php

namespace App\Services;

use JWTAuth;
use JWTFactory;
use Image;
use App\Models\Tasks;

class TaskService
{
    protected $tasks;

    public function __construct() {
        $this->tasks = new Tasks();
    }

    public function create($data) {
        $this->tasks->title = $data->title;
        $this->tasks->status = $data->status;
        $this->tasks->description = $data->description;
        $this->tasks->save();

        return response()->json(['mensagem' => 'Task saved!'], 200);
    }

    public function list() {
        return response()->json($this->tasks::all());
    }

    public function getData($id) {
        return response()->json($this->tasks::find($id));
    }

    public function edit($id, $data) {
        $task = $this->tasks::find($id);

        if (!$task) {
            return response()->json(['mensagem' => 'Invalid Task!'], 401);
        }

        $task->title = $data->title;
        $task->status = $data->status;
        $task->description = $data->description;
        $task->save();

        return response()->json(['mensagem' => 'Task edited!'], 200);
    }

    public function delete($id) {
        $task = $this->tasks::find($id);

        if (!$task) {
            return response()->json(['mensagem' => 'Invalid Task!'], 401);
        }

        $task->delete();

        return response()->json(['mensagem' => 'Task deleted!'], 200);
    }

}
