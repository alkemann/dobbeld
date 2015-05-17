<?php

namespace App\Panel;

use Debugkit\DebugPanel;

class DumpPanel extends DebugPanel
{

    public function data()
    {
        $debug = \dobbeld\util\Debug::get_instance();
        return ['data' => $debug->array_out()];
    }
}
