<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * タスク一覧を取得する
 */
class ListService
{
    /**
     * タスクの一覧を取得する
     *
     * @return array
     **/
    public function getTaskList()
    {
        return Task::get([
            'id',
            'status_id',
            'user_id',
            'title',
            'description',
            'deadline',
        ]);
    }
}
