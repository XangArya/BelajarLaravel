
@extends('layouts.main')

@section('konten')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["konten"] }}</p>
</article>

<a href="/posts">Kembali</a>
@endsection