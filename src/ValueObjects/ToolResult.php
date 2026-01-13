<?php

declare(strict_types=1);

namespace Prism\Prism\ValueObjects;

readonly class ToolResult
{
    /**
     * @param  array<string, mixed>  $args
     * @param  array<string, mixed>  $result
     * @param  array<int, Artifact>  $artifacts
     */
    public function __construct(
        public string $toolCallId,
        public string $toolName,
        public array $args,
        public int|float|string|array|null $result,
        public ?string $toolCallResultId = null,
        public array $artifacts = [],
    ) {}

    public function hasArtifacts(): bool
    {
        return $this->artifacts !== [];
    }
}
