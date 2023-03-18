@extends('hyde::layouts.app')
@section('content')
@php($title = 'Home')

    <main id="content" class="mx-auto max-w-7xl py-16 px-8">
        <h1 class="text-center text-3xl font-bold">A <a href="https://github.com/hydephp/hyde">HydePHP</a> site with lots of content</h1>

        <section class="mx-auto max-w-3xl py-8 mt-8 prose dark:prose-invert">
            <h2>Sitemap</h2>
            <ul>
                @foreach (\Hyde\Hyde::pages() as $page)
                    <li><a href="{{ $page->getRoute() }}">{{ $page->title }}</a></li>
                @endforeach
            </ul>
        </section>
    </main>

@endsection