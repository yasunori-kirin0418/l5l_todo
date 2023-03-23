<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * タスク一覧を取得する
 */
class TaskListService
{
    /**
     * タスクの一覧を取得する
     *
     * @return array
     **/
    public function getTaskList()
    {
        $tasks = Task::all();

        return $tasks;
    }
}
