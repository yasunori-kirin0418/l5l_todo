<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Task\Entities\Task;
use Symfony\Component\HttpFoundation\Response;

/**
 * タスクを作成する。
 *
 * @param 
 * @return json
 **/
class Create extends Controller
{
    public function __invoke(Request $request, Task $task)
    {
        $id = $task->create($request->all())->id;

        return response()
            ->json(
                [
                    'task_id'       => $id,
                    'messages'      => 'New task created.',
                    'request_data'  => $request->all(),
                ],
                Response::HTTP_CREATED)
            ->header('Content-Type', 'application/json');
    }
}
