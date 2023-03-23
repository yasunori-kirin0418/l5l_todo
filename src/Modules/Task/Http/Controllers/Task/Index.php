<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Modules\Task\Services\Task\TaskListService;

class Index extends Controller
{
    /**
     * __invoke
     *
     * @return json
     **/
    public function __invoke(TaskListService $tasks)
    {
        return response()->json($tasks->getTaskList());
    }
}
