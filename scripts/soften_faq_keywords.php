<?php

use App\Models\Faq;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$replacements = [
    // order matters: longer phrases first
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
    'quartz' => 'stone',
    'Quartz' => 'Stone',
    'flooring' => 'floor covering',
    'Flooring' => 'Floor covering',
];

// Keep a few intentional primary keywords: undo over-replacement for single-word only in short strings is hard.
// Instead apply phrase replacements only (remove bare quartz/flooring last with care).

$phraseOnly = [
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
    'SPC vinyl' => 'rigid-core vinyl',
];

$updated = 0;
foreach (Faq::all() as $faq) {
    $q0 = $faq->question;
    $a0 = $faq->answer;
    $q = $q0;
    $a = $a0;
    foreach ($phraseOnly as $from => $to) {
        $q = str_replace($from, $to, $q);
        $a = str_replace($from, $to, $a);
    }
    // Reduce leftover bare "quartz" / "SPC" / "flooring" if still dense
    $q = preg_replace('/\bquartz\b/i', 'stone', $q, 3);
    $a = preg_replace('/\bquartz\b/i', 'stone', $a, 8);
    $q = preg_replace('/\bSPC\b/', 'rigid-core', $q, 3);
    $a = preg_replace('/\bSPC\b/', 'rigid-core', $a, 8);
    $q = preg_replace('/\bflooring\b/i', 'flooring system', $q, 2);
    $a = preg_replace('/\bflooring\b/i', 'floor covering', $a, 5);

    if ($q !== $q0 || $a !== $a0) {
        $faq->question = $q;
        $faq->answer = $a;
        $faq->save();
        $updated++;
        echo "Updated FAQ #{$faq->id}: " . substr($faq->question, 0, 80) . PHP_EOL;
    }
}
echo "Done. Updated {$updated} FAQs." . PHP_EOL;
