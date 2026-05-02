<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-6">Tentang Kami</h2>
          <p class="text-gray-600 text-lg leading-relaxed mb-4">
            Portal Berita adalah platform media digital yang didedikasikan untuk menyediakan
            informasi terkini, akurat, dan berkualitas seputar dunia teknologi, programming,
            dan inovasi digital. Kami berkomitmen untuk memberikan konten yang bermanfaat
            bagi para developer, tech enthusiast, dan siapa saja yang ingin tetap update
            dengan perkembangan teknologi terbaru.
          </p>
          <p class="text-gray-600 text-lg leading-relaxed">
            Dengan tim editor dan kontributor yang berpengalaman di industri teknologi,
            kami menghadirkan artikel-artikel yang tidak hanya informatif, tetapi juga
            mudah dipahami dan aplikatif dalam kehidupan sehari-hari.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
              <i class="fa-solid fa-thin fa-crosshairs text-xl" style="color: rgba(54, 54, 209, 0.514); font-size:2rem;"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Misi Kami</h3>
            <p class="text-gray-600">
              Memberikan informasi teknologi yang akurat dan bermanfaat untuk semua kalangan
            </p>
          </div>

          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
             <i class="fa-duotone fa-solid fa-thin fa-users" style="color: rgba(0, 155, 26, 0.555); font-size:2rem;"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Komunitas</h3>
            <p class="text-gray-600">
              Membangun komunitas yang aktif dan saling berbagi pengetahuan teknologi
            </p>
          </div>

          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
              <i class="fa-regular fa-thin fa-lightbulb" style="color: rgba(183, 49, 216, 0.555); font-size:2rem;"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Inovasi</h3>
            <p class="text-gray-600">
              Selalu mengikuti dan mengulas teknologi serta inovasi terbaru di industri
            </p>
          </div>

          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-orange-100 rounded-full mb-4">
              <i class="fa-solid fa-award" style="color: rgba(228, 176, 8, 0.555); font-size:2rem;"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Kualitas</h3>
            <p class="text-gray-600">
              Mengutamakan kualitas konten dengan fact-checking dan riset yang mendalam
            </p>
          </div>
        </div>

        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg shadow-lg p-8 text-white">
          <h2 class="text-3xl font-bold mb-4">Nilai-Nilai Kami</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
              <h3 class="text-xl font-bold mb-2">Integritas</h3>
              <p class="text-blue-100">
                Menyajikan berita dengan objektif, jujur, dan berdasarkan fakta yang terverifikasi
              </p>
            </div>
            <div>
              <h3 class="text-xl font-bold mb-2">Kredibilitas</h3>
              <p class="text-blue-100">
                Memastikan setiap informasi yang kami publikasikan telah melalui proses editorial yang ketat
              </p>
            </div>
            <div>
              <h3 class="text-xl font-bold mb-2">Responsif</h3>
              <p class="text-blue-100">
                Cepat dalam menyampaikan informasi terkini tanpa mengorbankan akurasi
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-layout>