<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Task\Services\Task\CreateService;
use Symfony\Component\HttpFoundation\Response;

/**
 * タスクを作成する。
 **/
class Create extends Controller
{
    public function __invoke(Request $request, CreateService $task)
    {
        return response()
            ->json( $task->createTask(
                    $request->status_id,
                    $request->user_id,
                    $request->title,
                    $request->description,
                    $request->deadline
            ), Response::HTTP_CREATED)
            ->header('Content-Type', 'application/json');
    }
}
