<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
     <div class="min-h-screen bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <a
          href="/"
          class="inline-flex items-center text-blue-600 hover:text-blue-700 mb-8"
        >
          <span class="ml-1.5 transition-transform group-hover:translate-x-1">&larr;</span>
          Kembali ke Beranda
      </a>

        <article class="bg-white rounded-lg shadow-lg p-8">
          <div class="mb-6">
            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">
              {{ $article->category }}
            </span>
          </div>

          <h1 class="text-4xl font-bold text-gray-900 mb-4">
            {{ $article->title }}
          </h1>

          <div class="flex items-center space-x-6 text-gray-600 mb-8 pb-6 border-b">
            <div class="flex items-center space-x-1">
              <i class="fa-regular fa-user"></i>
              <span>{{ $article->author }}</span>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fa-regular fa-calendar"></i>
              <span>{{ date("y-m-d", strtotime($article->created_at)) }}</span>
            </div>
          </div>
          <p>
            {{ $article->body }}
          </p>
        </article>
      </div>
    </div>
</x-layout>