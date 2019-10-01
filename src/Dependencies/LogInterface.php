<?php

namespace Arquivei\XML\Tag\Finder\Dependencies;

interface LogInterface
{
    public function alert(string $message, array $context = []): bool;

    public function debug(string $message, array $context = []): bool;

    public function emergency(string $message, array $context = []): bool;

    public function error(string $message, array $context = []): bool;

    public function info(string $message, array $context = []): bool;

    public function notice(string $message, array $context = []): bool;

    public function warning(string $message, array $context = []): bool;
}
