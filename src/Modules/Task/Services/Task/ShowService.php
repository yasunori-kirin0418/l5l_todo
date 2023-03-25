<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * タスクを取得する
 */
class ShowService
{
    /**
     * 指定されたIDのタスク取得する
     * @param int $id 
     *
     * @return array
     **/
    public function getTask(int $id)
    {
        return Task::find($id);
    }
}
