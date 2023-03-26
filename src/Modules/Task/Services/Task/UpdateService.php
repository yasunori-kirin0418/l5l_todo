<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * 指定のタスクの内容を更新する。
 **/
class UpdateService
{
    /**
     * 指定のタスクの内容を更新する。
     * @param int $id
     * @param int $statusId
     * @param int $userId
     * @param string $title
     * @param string $description
     * @param string $deadline
     *
     * @return array
     **/
    public function updateTask(
        int $id,
        int $statusId,
        int $userId,
        string $title,
        string $description,
        string $deadline,
    ) {
        Task::find($id)->update([
            'status_id'     => $statusId,
            'user_id'       => $userId,
            'title'         => $title,
            'description'   => $description,
            'deadline'      => $deadline,
        ]);

        return [
            'task_id' => $id,
            'request_date' => [
                'status_id'     => $statusId,
                'user_id'       => $userId,
                'title'         => $title,
                'description'   => $description,
                'deadline'      => $deadline,
            ],
        ];
    }
}
