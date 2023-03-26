<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * タスク一覧を取得する
 */
class DeleteService
{
    /**
     * タスクの一覧を取得する
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
