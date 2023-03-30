<?php

namespace Modules\Task\Services\Task;

use Modules\Core\Services\User\UsableModuleService;
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
        if (UsableModuleService::isUsableModule($userId, Task::moduleId())) {
            $createData = [
                'status_id'     => $statusId,
                'user_id'       => $userId,
                'title'         => $title,
                'description'   => $description,
                'deadline'      => $deadline,
            ];
            $task = Task::create($createData);

            return ['created_data' => ShowService::getTask($task->id)];
        }

        return ['create_data' => 'Aborted task create.'];
    }
}
