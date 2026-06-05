<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\MetaPropertyBlog;
use Illuminate\Http\Request;

class BlogAuthorController extends Controller
{
   public function showAuthor($author = null)
{
    $query = Blog::select(
                'blogs.*',
                'meta_property_blogs.author'
            )
            ->join(
                'meta_property_blogs',
                'blogs.id',
                '=',
                'meta_property_blogs.blogId'
            );

    // Apply filter only if author exists
    if ($author) {

        $authorExists = MetaPropertyBlog::where('author', $author)->exists();

        if ($authorExists) {
            $query->where('meta_property_blogs.author', $author);
        }
    }

    $blogs = $query->latest()->get();

    $authors = Blog::join(
                    'meta_property_blogs',
                    'blogs.id',
                    '=',
                    'meta_property_blogs.blogId'
                )
                ->select('meta_property_blogs.author')
                ->distinct()
                ->get();

    return view('visitors.blog.blogAuthor', compact(
        'blogs',
        'authors',
        'author'
    ));
}
}
// <?php

// namespace App\Http\Controllers\visitors;

// use App\Http\Controllers\Controller;
// use App\Models\Blog;
// use App\Models\MetaPropertyBlog;
// use Illuminate\Http\Request;

// class BlogAuthorController extends Controller
// {
//    public function showAuthor($author = null)
//     {
//         $blogs = Blog::select(
//                     'blogs.*',
//                     'meta_property_blogs.author'
//                 )
//                 ->join(
//                     'meta_property_blogs',
//                     'blogs.id',
//                     '=',
//                     'meta_property_blogs.blogId'
//                 )
//                 ->when($author, function ($query) use ($author) {
//                     $query->where(
//                         'meta_property_blogs.author',
//                         $author
//                     );
//                 })
//                 ->latest()
//                 ->get();

//         $authors = Blog::join(
//                         'meta_property_blogs',
//                         'blogs.id',
//                         '=',
//                         'meta_property_blogs.blogId'
//                     )
//                     ->select('meta_property_blogs.author')
//                     ->distinct()
//                     ->get();

//         return view('visitors.blog.blogAuthor', compact(
//             'blogs',
//             'authors',
//             'author'
//         ));
//     }
// }

