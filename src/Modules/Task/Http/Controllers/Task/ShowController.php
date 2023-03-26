<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Modules\Task\Services\Task\ShowService;

/**
 * 指定したIDのタスクを取得する。
**/
class ShowController extends Controller
{
    /**
     * 指定したIDのタスクを取得する。
     *
     * @param int $id Task id
     * @return type
     **/
    public function __invoke(int $id, ShowService $task)
    {
        return response()
            ->json($task->getTask($id))
            ->header('Content-Type', 'application/json');
    }
}
