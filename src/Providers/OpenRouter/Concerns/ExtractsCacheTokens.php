<?php

declare(strict_types=1);

namespace Prism\Prism\Providers\OpenRouter\Concerns;

trait ExtractsCacheTokens
{
    /**
     * @param  array<string, mixed>  $data
     */
    protected function extractCacheReadTokens(array $data): ?int
    {
        $tokens = data_get($data, 'usage.prompt_tokens_details.cached_tokens');

        return $tokens !== null ? (int) $tokens : null;
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function extractCacheWriteTokens(array $data): ?int
    {
        $tokens = data_get($data, 'usage.prompt_tokens_details.cache_write_tokens');

        return $tokens !== null ? (int) $tokens : null;
    }
}
