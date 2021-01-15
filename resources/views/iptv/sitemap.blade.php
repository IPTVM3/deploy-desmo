<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $article)
        <url>
            <loc>http://bobres.com/en/{{ $article->url }}</loc>
            <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>{{ $article->priority}}</priority>
        </url>

        <url>
          <loc>http://bobres.com/fr/{{ $article->url }}</loc>
          <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
          <changefreq>weekly</changefreq>
          <priority>{{ $article->priority}}</priority>
      </url>

      <url>
        <loc>http://bobres.com/es/{{ $article->url }}</loc>
        <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>{{ $article->priority}}</priority>
    </url>

    <url>
      <loc>http://bobres.com/de/{{ $article->url }}</loc>
      <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>weekly</changefreq>
      <priority>{{ $article->priority}}</priority>
  </url>

  
  @endforeach
  @foreach ($blogs as $bl)

  <url>
    <loc>http://bobres.com/de/blogger/{{ $bl->title_en }}</loc>
    <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.90</priority>
</url>

<url>
  <loc>http://bobres.com/de/blogger/{{ $bl->title_es }}</loc>
  <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.90</priority>
</url>

  @endforeach

  @foreach ($product as $p)

  <url>
    <loc>http://bobres.com/de/payment/{{ $p->id }}</loc>
    <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.90</priority>
</url>
 
  @endforeach
</urlset>