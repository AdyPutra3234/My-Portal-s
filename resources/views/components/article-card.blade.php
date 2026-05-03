<article class="bg-white rounded-2xl m-2 p-6 border border-gray-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
    <div>
        <div class="flex justify-between items-center mb-6">
            <span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">
                {{ $article->category }}
            </span>
            <div class="flex items-center text-gray-400 text-sm space-x-1.5">
                <i class="fa-regular fa-calendar text-xs"></i>
                <span>{{ date("y-m-d", strtotime($article->created_at)) }}</span>
            </div>
        </div>
        <h2 class="text-xl font-bold text-gray-900 mb-3 leading-snug">
            {{ $article->title }}
        </h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
            {{ substr($article->body, 0, 200) . "...." }}
        </p>
    </div>
    <div>
        <a href="/article/{{$article->slug}}" class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-700 group">
            Baca Selengkapnya 
            <span class="ml-1.5 transition-transform group-hover:translate-x-1">&rarr;</span>
        </a>
    </div>
</article>