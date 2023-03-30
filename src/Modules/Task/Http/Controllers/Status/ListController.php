<?php

namespace Modules\Task\Http\Controllers\Status;

use Illuminate\Routing\Controller;
use Modules\Task\Services\Status\ListService;

/**
 * タスクに設定できるステータスのリストを取得する。
 **/
class ListController extends Controller
{
    /**
     * タスクに設定できるステータスのリストを取得する。
     *
     * @param CreateService $task
     *
     * @return json
     **/
    public function __invoke(ListService $statuses)
    {
        return response()
            ->json($statuses->getStatusList())
            ->header('Content-Type', 'application/json');
    }
}
