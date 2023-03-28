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
     * @param User $user 対象のユーザー
     * @param int $moduleId 対象のモジュールID
     * @return bool
     **/
    public static function isUsableModule(
        User $user,
        int $moduleId
    ) {
        return $user->modules->contains('id', $moduleId);
    }
}

