<?php

namespace Modules\Core\Services\User;

use Modules\Core\Entities\User;

/**
 * ユーザーが対象のモジュールを使えるか確認する
 */
class UsableModuleService
{
    /**
     * ユーザーが対象のモジュールを使えるか確認する
     *
     * @param int $userId 対象のユーザー
     * @param int $moduleId 対象のモジュールID
     * @return bool
     **/
    public static function isUsableModule(
        int $userId,
        int $moduleId
    ) {
        $user = User::find($userId);
        return $user->modules->contains('id', $moduleId);
    }
}

