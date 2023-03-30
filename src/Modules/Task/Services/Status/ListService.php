<?php

namespace Modules\Task\Services\Status;

use Modules\Task\Entities\Status;

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
    public function getStatusList()
    {
        return Status::all();
    }
}
