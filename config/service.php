<?php
/**
 *
 */

use View5\Compiler\Compile\Comments;
use View5\Compiler\Compile\Echos;
use View5\Compiler\Compile\Extension;
use View5\Compiler\Compile\Statements;
use View5\Compiler\ViewTemplate;

return [
    'view5\template' => [ViewTemplate::class, [
        'compiler' => [new Extension, new Statements, new Comments, new Echos],
        'import' => ['arc5']
    ]]
];
