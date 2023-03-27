<?php

namespace Modules\Task\Services\Task;

use Modules\Task\Entities\Task;

/**
 * 新規タスクを作成する。
 */
class CreateService
{
    /**
     * 新規タスクを作成する。
     *
     * @param int $statusId default_value: 1 (Draft)
     * @param int $userId required argument.
     * @param string $title default_value: 'None title.'
     * @param string|null $description default_value: null
     * @param string|null $deadline default_value: null
     *
     * @return array 引数の内容と作成できたタスクのID
     **/
    public function createTask(
        ?int $statusId = 1,
        int $userId,
        ?string $title = 'None title.',
        ?string $description = null,
        ?string $deadline = null
    ) {
        $task = Task::create(
            [
                'status_id'     => $statusId,
                'user_id'       => $userId,
                'title'         => $title,
                'description'   => $description,
                'deadline'      => $deadline,
            ]
        );

        return [
            'created_data' => ShowService::getTask($task->id),
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
