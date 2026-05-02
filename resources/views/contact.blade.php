<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="min-h-screen bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

          <div class="bg-white rounded-lg shadow-md p-6 flex items-start space-x-4">  
            <div class="flex-shrink-0">
              <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full">
                <i class="fa-regular fa-envelope"></i>
              </div>
            </div>

            <div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
              <p class="text-gray-600">info@portalberita.com</p>
              <p class="text-gray-600">redaksi@portalberita.com</p>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-md p-6 flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div class="inline-flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Telepon</h3>
              <p class="text-gray-600">+62 21 1234 5678</p>
              <p class="text-gray-600">+62 812 3456 7890</p>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-md p-6 flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-100 rounded-full">
                <i class="fa-solid fa-location-dot"></i>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Alamat</h3>
              <p class="text-gray-600">
                Jl. Teknologi No. 123<br />
                Jakarta Selatan, 12345
              </p>
            </div>
          </div>

         </div>

         <div class="w-full bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">
                Kirim Pesan
            </h2>

            <form action="#" method="POST" class="space-y-6">

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Lengkap
                    </label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        placeholder="Masukkan nama Anda" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 placeholder-gray-400 bg-gray-50/50 hover:bg-white"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="email@example.com" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 placeholder-gray-400 bg-gray-50/50 hover:bg-white"
                    >
                </div>

                <div>
                    <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">
                        Subjek
                    </label>
                    <input 
                        type="text" 
                        id="subjek" 
                        name="subjek" 
                        placeholder="Topik pesan Anda" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 placeholder-gray-400 bg-gray-50/50 hover:bg-white"
                    >
                </div>

                <div>
                    <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">
                        Pesan
                    </label>
                    <textarea 
                        id="pesan" 
                        name="pesan" 
                        rows="5" 
                        placeholder="Tulis pesan Anda di sini..." 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 placeholder-gray-400 bg-gray-50/50 hover:bg-white resize-none"
                    ></textarea>
                </div>

                <div>
                    <button 
                        type="submit" 
                        class="w-full flex justify-center items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-all shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        <i class="fa-solid fa-paper-plane text-sm"></i>
                        <span>Kirim Pesan</span>
                    </button>
                </div>
                
            </form>
        </div>
        </div>
      </div>
    </div>
    
</x-layout>