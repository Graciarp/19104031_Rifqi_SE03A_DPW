<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2021-12-31T03:29:30+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/profil') }}</loc>
        <lastmod>2021-12-31T03:29:30+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/prestasi') }}</loc>
        <lastmod>2021-12-31T03:29:30+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/informasi') }}</loc>
        <lastmod>2021-12-31T03:29:30+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/hubungi-kami') }}</loc>
        <lastmod>2021-12-31T03:29:30+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/informasi/baca' . '/' . $post->slug) }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($programKeahlian as $keahlian)
        <url>
            <loc>{{ url('/program_keahlian' . '/' . $keahlian->id) }}</loc>
            <lastmod>{{ $keahlian->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($ekstrakurikuler as $e)
        <url>
            <loc>{{ url('/ekstrakurikuler/detail' . '/' . $e->id) }}</loc>
            <lastmod>{{ $e->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

</urlset>