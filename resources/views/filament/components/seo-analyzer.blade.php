<div>
    <h1>SEO Analyzer Component</h1>
    @isset($content)
        <p>Content: {{ $content }}</p>
    @endisset
    @isset($title)
        <p>Title: {{ $title }}</p>
    @endisset
    @isset($metaDescription)
        <p>Meta Description: {{ $metaDescription }}</p>
    @endisset
    @isset($score)
        <p>Score: {{ $score }}</p>
    @endisset
    @isset($analysis)
        <ul>
            @foreach ($analysis as $item)
                <li>{{ $item['category'] }}: {{ $item['recommendation'] }}</li>
            @endforeach
        </ul>
    @endisset
</div>
