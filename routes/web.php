<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

Route::resource('tasks', TaskController::class);


Route::put('tasks/{task}/complete', function(Task $task) {
    $task->complete();
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task completed!');
})->name('tasks.complete');