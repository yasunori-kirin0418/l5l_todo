<?php

namespace Modules\Task\Http\Controllers\Task;

use Illuminate\Routing\Controller;
use Modules\Task\Entities\Task;

class Index extends Controller
{
    /**
     * __invoke
     *
     * @return json
     **/
    public function __invoke()
    {
        return response()->json(Task::all());
    }
}
