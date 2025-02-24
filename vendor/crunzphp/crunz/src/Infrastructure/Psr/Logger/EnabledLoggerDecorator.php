<?php

declare(strict_types=1);

namespace Crunz\Infrastructure\Psr\Logger;

use Crunz\Application\Service\ConfigurationInterface;
use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

final class EnabledLoggerDecorator extends AbstractLogger
{
    public function __construct(
        private readonly LoggerInterface $decoratedLogger,
        private readonly ConfigurationInterface $configuration,
    ) {
    }

    public function log($level, string|\Stringable $message, array $context = []): void
    {
        $loggingEnabled = true;
        switch ($level) {
            case LogLevel::INFO:
                $loggingEnabled = $this->configuration
                    ->get('log_output')
                ;

                break;
            case LogLevel::ERROR:
                $loggingEnabled = $this->configuration
                    ->get('log_errors')
                ;

                break;
        }

        if (false === $loggingEnabled) {
            return;
        }

        $this->decoratedLogger
            ->log(
                $level,
                $message,
                $context
            )
        ;
    }
}
