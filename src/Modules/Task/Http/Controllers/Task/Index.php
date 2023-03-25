<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Modules\Task\Services\Task\ListService;

/**
 * タスク一覧をJSONレスポンスする。
 **/
class Index extends Controller
{
    /**
     * タスク一覧をJSONレスポンスする。
     *
     * @param TaskListService
     * @return json
     **/
    public function __invoke(ListService $tasks)
    {
        return response()
            ->json($tasks->getTaskList())
            ->header('Content-Type', 'application/json');
    }
}
