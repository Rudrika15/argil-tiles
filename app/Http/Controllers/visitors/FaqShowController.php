<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqShowController extends Controller
{public function index($type = null)
    {
        $query = Faq::query();

        // SPC FAQs
        if ($type == 'spc-flooring') {
            $query->where('is_spc', 1);
        }

        // Quartz FAQs
        elseif ($type == 'quartz-surface') {
            $query->where('is_quartz', 1);
        }

        // invalid or no type → show all
        $faqs = $query->get();

        return view('visitors.faq.index', compact('faqs', 'type'));
    }
}
