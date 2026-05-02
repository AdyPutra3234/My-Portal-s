@props(['article'])

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
        @foreach ($articles as $article)
                <x-article-card :article="$article"></x-article-card>     
        @endforeach
</div>