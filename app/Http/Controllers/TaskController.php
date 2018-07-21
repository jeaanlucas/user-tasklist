<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Http\Request\CreateTaskRequest;

class TaskController extends Controller
{
    private $usersService;

    public function __construct() {
        $this->taskService = new TaskService();
    }

    public function createTask(CreateTaskRequest $request) {
        return $this->taskService
            ->create($request);
    }

    public function listTask() {
        return $this->taskService
            ->list();
    }

    public function taskData($id) {
        return $this->taskService
            ->getData($id);
    }

    public function editTask($id, Request $request) {
        return $this->taskService
            ->edit($id, $request);
    }

    public function deleteTask($id) {
        return $this->taskService
            ->delete($id);
    }
}
