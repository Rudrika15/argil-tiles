<?php

namespace App\Support;

class SeoCopy
{
    /**
     * Soften dense SEO keywords in visible/schema copy without altering source records.
     */
    public static function soften(?string $text): string
    {
        if ($text === null || $text === '') {
            return '';
        }

        $map = [
            'SPC flooring' => 'rigid-core vinyl',
            'spc flooring' => 'rigid-core vinyl',
            'SPC Flooring' => 'Rigid-Core Vinyl',
            'artificial quartz stone' => 'engineered stone',
            'Artificial quartz stone' => 'Engineered stone',
            'artificial quartz' => 'engineered stone',
            'Artificial quartz' => 'Engineered stone',
            'engineered quartz' => 'engineered stone',
            'Engineered quartz' => 'Engineered stone',
            'quartz surfaces' => 'engineered surfaces',
            'Quartz surfaces' => 'Engineered surfaces',
            'quartz surface' => 'engineered surface',
            'Quartz surface' => 'Engineered surface',
            'quartz slabs' => 'stone slabs',
            'Quartz slabs' => 'Stone slabs',
            'quartz slab' => 'stone slab',
            'Quartz slab' => 'Stone slab',
            'quartz countertops' => 'kitchen countertops',
            'Quartz countertops' => 'Kitchen countertops',
            'quartz stone' => 'engineered stone',
            'Quartz stone' => 'Engineered stone',
            'SPC products' => 'rigid-core products',
            'SPC Products' => 'Rigid-Core Products',
        ];

        $out = str_replace(array_keys($map), array_values($map), $text);

        // Cap leftover singles so listing/FAQ pages stay under 2% density.
        // Primary terms remain in static titles, H1s, and nav labels.
        $out = self::limitWord($out, 'quartz', 'stone', 0);
        $out = self::limitWord($out, 'Quartz', 'Stone', 0);
        $out = self::limitWord($out, 'SPC', 'rigid-core', 0);
        $out = self::limitWord($out, 'flooring', 'floor covering', 0);
        $out = self::limitWord($out, 'Flooring', 'Floor covering', 0);
        $out = self::limitWord($out, 'Argil', 'our team', 0);
        $out = self::limitWord($out, 'argil', 'our team', 0);

        return $out;
    }

    private static function limitWord(string $text, string $word, string $replacement, int $keep): string
    {
        $count = 0;

        return preg_replace_callback(
            '/\b' . preg_quote($word, '/') . '\b/',
            function ($m) use (&$count, $keep, $replacement) {
                $count++;
                return $count <= $keep ? $m[0] : $replacement;
            },
            $text
        ) ?? $text;
    }
}
