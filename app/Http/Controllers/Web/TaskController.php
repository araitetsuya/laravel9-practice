<?php

namespace App\Http\Controllers\Web;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller as BaseController;

class TaskController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        $tasks = Task::query()->get();

        return view('pages.task.index', compact('tasks'));
    }
}
