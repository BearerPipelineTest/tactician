<?php

declare(strict_types=1);

namespace League\Tactician\Handler\Mapping\MethodName;

use function ucfirst;

/**
 * Assumes the method is handle + the last portion of the class name.
 *
 * Examples:
 *  - \MyGlobalCommand              => $handler->handleMyGlobalCommand()
 *  - \My\App\TaskCompletedCommand  => $handler->handleTaskCompletedCommand()
 */
class HandleLastPartOfClassName extends LastPartOfClassName
{
    /**
     * {@inheritdoc}
     */
    public function getMethodName(string $command, string $commandHandler) : string
    {
        $commandName = parent::getMethodName($command, $commandHandler);

        return 'handle' . ucfirst($commandName);
    }
}
