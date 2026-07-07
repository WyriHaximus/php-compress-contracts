<?php

declare(strict_types=1);

namespace WyriHaximus\Compress;

/** @api */
interface CompressorInterface
{
    public function compress(string $string): string;
}
