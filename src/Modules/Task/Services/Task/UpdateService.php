<?php

namespace Modules\Task\Services\Task;

use Modules\Core\Services\User\UsableModuleService;
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
        if (UsableModuleService::isUsableModule($userId, Task::moduleId())) {
            $updateData = [
                'status_id'     => $statusId,
                'user_id'       => $userId,
                'title'         => $title,
                'description'   => $description,
                'deadline'      => $deadline,
            ];
            Task::find($id)->update($updateData);

            return ['updated_data' => ShowService::getTask($id)];
        }

        return ['updated_data' => 'Aborted task update.'];
    }
}
