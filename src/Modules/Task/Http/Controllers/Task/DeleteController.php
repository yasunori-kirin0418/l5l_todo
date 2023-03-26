<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Modules\Task\Services\Task\DeleteService;
use Symfony\Component\HttpFoundation\Response;

/**
 * 指定のタスクを削除する。
 **/
class DeleteController extends Controller
{
    /**
     * 指定のタスクを削除する。
     *
     * @param int $id 削除対象のタスクID
     * @param DeleteService $task 削除処理のクラス
     * @return json
     **/
    public function __invoke(int $id, DeleteService $task)
    {
        return response()
            ->json($task->deleteTask($id), Response::HTTP_OK)
            ->header('Content-Type', 'application/json');
    }
}
