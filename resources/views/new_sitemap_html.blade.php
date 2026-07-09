<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML Sitemap | Argil Tiles</title>
    <meta name="description"
        content="HTML sitemap for Argil Tiles. Browse all key pages and export market pages from one place.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://argiltiles.com/sitemap.html">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f8f8f8;
            color: #222;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            padding: 24px;
            border: 1px solid #e5e5e5;
        }

        h1 {
            margin-top: 0;
            font-size: 28px;
        }

        p {
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #e5e5e5;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #f0f0f0;
        }

        a {
            color: #0056b3;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Argil Tiles HTML Sitemap</h1>
        <p>Last updated: 2026-03-23</p>
        <table>
            <thead>
                <tr>
                    <th>URL</th>
                    <th>Last Modified</th>
                    <th>Change Frequency</th>
                    <th>Priority</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="https://argiltiles.com/">https://argiltiles.com/</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>1.0</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/profile">https://argiltiles.com/profile</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/about">https://argiltiles.com/about</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/documentaryfilm">https://argiltiles.com/documentaryfilm</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.7</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/corevalues">https://argiltiles.com/corevalues</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.7</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/groupcompany">https://argiltiles.com/groupcompany</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.7</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/achievements">https://argiltiles.com/achievements</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.7</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/plants">https://argiltiles.com/plants</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.7</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/quality">https://argiltiles.com/quality</a></td>
                    <td>2026-03-23</td>
                    <td>monthly</td>
                    <td>0.7</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/catalogue">https://argiltiles.com/catalogue</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.9</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/contact">https://argiltiles.com/contact</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.9</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/spcproducts">https://argiltiles.com/spcproducts</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.9</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/quartzsurface">https://argiltiles.com/quartzsurface</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.9</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/blogs">https://argiltiles.com/blogs</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                {{-- Dynamic Blogs --}}
@foreach($blogs as $blog)
<tr>
    <td>
        <a href="{{ url('/blogdetails/'.$blog->slug) }}">
            {{ url('/blogdetails/'.$blog->slug) }}
        </a>
    </td>
    <td>{{ optional($blog->updated_at)->format('Y-m-d') }}</td>
    <td>monthly</td>
    <td>0.7</td>
</tr>
@endforeach

{{-- Dynamic Authors --}}
@foreach($authors as $author)
<tr>
    <td>
        <a href="{{ url('/authors/'.$author->author) }}">
            {{ url('/authors/'.$author->author) }}
        </a>
    </td>
    <td>{{ now()->format('Y-m-d') }}</td>
    <td>monthly</td>
    <td>0.6</td>
</tr>
@endforeach


                <tr>
                    <td><a href="https://argiltiles.com/privacyPolicy">https://argiltiles.com/privacyPolicy</a></td>
                    <td>2026-03-23</td>
                    <td>yearly</td>
                    <td>0.5</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/spc-export">https://argiltiles.com/spc-export</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/quartz-export">https://argiltiles.com/quartz-export</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports">https://argiltiles.com/exports</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.9</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports/uae">https://argiltiles.com/exports/uae</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports/usa">https://argiltiles.com/exports/usa</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports/canada">https://argiltiles.com/exports/canada</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports/uk">https://argiltiles.com/exports/uk</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports/australia">https://argiltiles.com/exports/australia</a>
                    </td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>
                <tr>
                    <td><a href="https://argiltiles.com/exports/russia">https://argiltiles.com/exports/russia</a></td>
                    <td>2026-03-23</td>
                    <td>weekly</td>
                    <td>0.8</td>
                </tr>

                <tr>
    <td><a href="https://argiltiles.com/case-studies">https://argiltiles.com/case-studies</a></td>
    <td>2026-07-08</td>
    <td>weekly</td>
    <td>0.8</td>
</tr>
{{-- Dynamic Case Studies --}}
@foreach($caseStudies as $caseStudy)
<tr>
    <td>
        <a href="{{ url('/case-details/'.$caseStudy->slug) }}">
            {{ url('/case-details/'.$caseStudy->slug) }}
        </a>
    </td>
    <td>{{ optional($caseStudy->updated_at)->format('Y-m-d') }}</td>
    <td>monthly</td>
    <td>0.7</td>
</tr>
@endforeach

<tr>
    <td><a href="https://argiltiles.com/testimonial">https://argiltiles.com/testimonial</a></td>
    <td>2026-07-08</td>
    <td>monthly</td>
    <td>0.7</td>
</tr>

{{-- Dynamic CMS Pages --}}
@foreach($cmsPages as $page)
<tr>
    <td>
        <a href="{{ url('/'.$page->slug) }}">
            {{ url('/'.$page->slug) }}
        </a>
    </td>
    <td>{{ optional($page->updated_at)->format('Y-m-d') }}</td>
    <td>monthly</td>
    <td>0.8</td>
</tr>
@endforeach


            </tbody>
        </table>
    </main>
</body>

</html>