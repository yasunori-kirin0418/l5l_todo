<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Task\Services\Task\UpdateService;
use Symfony\Component\HttpFoundation\Response;

class UpdateController extends Controller
{
    /**
     * 指定のタスクを更新する。
     *
     * @param Request $request
     * @param CreateService $task
     *
     * @return json
     **/
    public function __invoke(Request $request, int $id, UpdateService $task)
    {
        return response()
            ->json($task->updateTask(
                $id,
                $request->status_id,
                $request->user_id,
                $request->title,
                $request->description,
                $request->deadline
            ), Response::HTTP_CREATED)
            ->header('Content-Type', 'application/json');
    }
}
