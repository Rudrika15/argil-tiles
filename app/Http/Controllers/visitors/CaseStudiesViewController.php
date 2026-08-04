<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudiesViewController extends Controller
{
    public function caseStudyList()
    {
        $caseStudies  = CaseStudy::where('status', 'published')
            ->latest()
            ->paginate(9);

        return view('visitors.case_studies.caseStudies', compact('caseStudies'));
    }

    // public function caseStudyDetail($slug)
    // {
    //     $caseStudies  = CaseStudy::where('slug', $slug)
    //         ->where('status', 'published')
    //         ->firstOrFail();

    //     $relatedCaseStudies = CaseStudy::where('id', '!=', $caseStudies ->id)
    //         ->where('status', 'published')
    //         ->latest()
    //         ->take(3)
    //         ->get();

    //     return view(
    //         'visitors.case_studies.caseStudiesDetail',
    //         compact('caseStudies', 'relatedCaseStudies')
    //     );
    // }
    public function caseStudyDetail($slug)
    {
        $caseStudies = CaseStudy::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $relatedCaseStudies = CaseStudy::where('id', '!=', $caseStudies->id)
            ->where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        $seo = [
            'title' => $caseStudies->seo_title ?: $caseStudies->title . ' | Argil Tiles',
            'description' => $caseStudies->seo_description ?: $caseStudies->short_description,
            'keywords' => $caseStudies->seo_keywords,
            'url' => url()->current(),
            'image' => asset($caseStudies->featured_image),
        ];

        return view(
            'visitors.case_studies.caseStudiesDetail',
            compact(
                'caseStudies',
                'relatedCaseStudies',
                'seo'
            )
        );
    }
}