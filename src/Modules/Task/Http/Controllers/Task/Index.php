<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Modules\Task\Services\Task\TaskListService;

/**
 * タスク一覧をJSONレスポンスする。
 *
 * @param TaskListService
 * @return json
 **/
class Index extends Controller
{
    public function __invoke(TaskListService $tasks)
    {
        return response()
            ->json($tasks->getTaskList())
            ->header('Content-Type', 'application/json');
    }
}
