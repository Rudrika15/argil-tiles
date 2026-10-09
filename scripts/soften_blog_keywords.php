<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Blog;

$phraseOnly = [
    'SPC flooring' => 'rigid-core vinyl',
    'spc flooring' => 'rigid-core vinyl',
    'SPC Flooring' => 'Rigid-Core Vinyl',
    'quartz countertops' => 'kitchen countertops',
    'Quartz Countertops' => 'Kitchen Countertops',
    'quartz surfaces' => 'engineered surfaces',
    'Quartz Surfaces' => 'Engineered Surfaces',
    'quartz surface' => 'engineered surface',
    'Quartz Surface' => 'Engineered Surface',
    'artificial quartz' => 'engineered stone',
    'Artificial Quartz' => 'Engineered Stone',
    'engineered quartz' => 'engineered stone',
    'Engineered Quartz' => 'Engineered Stone',
];

$updated = 0;
foreach (Blog::all() as $blog) {
    $t0 = $blog->title;
    $d0 = $blog->description ?? '';
    $t = $t0;
    $d = $d0;
    foreach ($phraseOnly as $from => $to) {
        $t = str_replace($from, $to, $t);
        $d = str_replace($from, $to, $d);
    }
    // Limit leftover dense singles in titles only
    if (preg_match_all('/\bquartz\b/i', $t) > 1) {
        $t = preg_replace('/\bquartz\b/i', 'stone', $t, 1);
    }
    if (preg_match_all('/\bflooring\b/i', $t) > 1) {
        $t = preg_replace('/\bflooring\b/i', 'floors', $t, 1);
    }
    if (preg_match_all('/\bSPC\b/', $t) > 1) {
        $t = preg_replace('/\bSPC\b/', 'rigid-core', $t, 1);
    }

    if ($t !== $t0 || $d !== $d0) {
        $blog->title = $t;
        $blog->description = $d;
        $blog->save();
        $updated++;
        echo "Blog #{$blog->id}: {$blog->title}\n";
    }
}
echo "Updated {$updated} blogs\n";
