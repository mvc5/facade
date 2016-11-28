<?php
/**
 *
 */

use Mvc5\Plugin\Invoke;
use Mvc5\Plugin\Link;
use View5\Compiler\ViewTemplate;

return [
    'service\context' => new Invoke(Mvc5\Service\Context::class, ['service' => new Link]),
    'view5\template' => [ViewTemplate::class, ['import' => ['arc5']]],
    'web\context' => [Mvc5\Web\Context::class, new Link],
];
