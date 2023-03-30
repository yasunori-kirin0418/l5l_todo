<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * 指定のタスクを削除する。
 */
class DeleteService
{
    /**
     * 指定のタスクを削除する。
     * @param int $id Task id
     *
     * @return array 削除されたタスクの情報を'deleted_task_info'というキーで返却する。
     **/
    public function deleteTask($id)
    {
        Task::find($id)->delete();

        return [
            'deleted_task_info' => Task::withTrashed()->find($id),
        ];
    }
}
