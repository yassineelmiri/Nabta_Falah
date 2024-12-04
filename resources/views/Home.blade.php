@include('includes.header')
    
@include('includes.navbar')
@include('includes.slide')
<!-- CSS pour l'animation -->
<style>
    .scrolling-wrapper {
      display: flex;
      gap: 2rem;
      animation: scroll-infinite 30s linear infinite;
    }
  
    @keyframes scroll-infinite {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-100%);
      }
    }
  
    .animate-scroll img {
      flex-shrink: 0;
      width: 6rem;
      height: 6rem;
    }
  </style>
<section>
  <div class="container mx-auto px-4 py-10 my-5 bg-gray-900 rounded-lg shadow-lg">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 px-4 lg:py-12 bg-gray-900">
        <!-- Support 24/7 -->
        <div class="flex items-start group bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/feature-icon-08.png') }}" alt="Support 24/7" class="w-14 h-14 transition-transform group-hover:scale-110">
            </div>
            <div class="flex-grow ml-4">
                <h3 class="text-lg font-bold text-green-700 group-hover:text-orange-600 transition-colors">Support 24/7</h3>
                <p class="text-gray-600 group-hover:text-gray-800 transition-colors">Available at any time to assist you.</p>
            </div>
        </div>
    
        <!-- Free Shipping -->
        <div class="flex items-start group bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/feature-icon-02.png') }}" alt="Free Shipping" class="w-14 h-14 transition-transform group-hover:scale-110">
            </div>
            <div class="flex-grow ml-4">
                <h3 class="text-lg font-bold text-green-700 group-hover:text-orange-600 transition-colors">Free Shipping</h3>
                <p class="text-gray-600 group-hover:text-gray-800 transition-colors">Enjoy free delivery on all orders.</p>
            </div>
        </div>
    
        <!-- Easy Payment -->
        <div class="flex items-start group bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/feature-icon-03.png') }}" alt="Easy Payment" class="w-14 h-14 transition-transform group-hover:scale-110">
            </div>
            <div class="flex-grow ml-4">
                <h3 class="text-lg font-bold text-green-700 group-hover:text-orange-600 transition-colors">Easy Payment</h3>
                <p class="text-gray-600 group-hover:text-gray-800 transition-colors">Hassle-free and secure transactions.</p>
            </div>
        </div>
    </div>
    
  </div>
  
    <section class="pt-10 overflow-hidden bg-gray-50 dark:bg-gray-800 md:pt-0 sm:pt-16 2xl:pt-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-center grid-cols-1 md:grid-cols-2">
    
                <div>
                    <h2 class="text-3xl font-bold leading-tight text-black dark:text-white sm:text-4xl lg:text-5xl">Hey 👋 I
                        am
                        <br class="block sm:hidden" /> DR Safa 
                    </h2>
                    <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 dark:text-gray-300 md:mt-8">
                        Amet minim mollit non deserunt
                        ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud amet.
                    </p>
    
                   
                </div>
    
                <div class="relative">
                    <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="{{('img/chat.png')}}" alt="" />
                </div>
    
            </div>
        </div>
    </section>

    <section class="bg-gray-900 text-gray-300">
        <div class="mx-auto max-w-screen-lg px-8 pt-20 pb-16 md:pt-24 md:pb-20">
            <div class="flex flex-wrap">
                <div class="w-full max-w-full flex-shrink-0 lg:mt-2 lg:w-3/3 lg:flex-none">
                    <h2 class="text-xs font-bold uppercase tracking-wide text-gray-500 xl:text-base">Nos Clients</h2>
                    <h3 class="mb-3 font-bold text-gray-500 sm:text-2xl xl:text-4xl">
                        De confiance par plus de 300+ clients
                    </h3>
                    <p class="text-gray-400">
                        Nous apportons des solutions pour rendre la vie plus facile à nos clients.
                    </p>                
                </div>
                <div class="w-full bg-white max-w-full py-10 lg:w-3/3 lg:flex-none lg:px-8 lg:py-0 mt-7">
                    <!-- Conteneur défilement -->
                    <div class="overflow-hidden">
                        <div class="scrolling-wrapper flex space-x-8 animate-scroll">
                            <img src="{{ asset('img/filahi.jpg') }}" alt="Filahi" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/wizara.png') }}" alt="Wizara" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/copag.jpg') }}" alt="Copag" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/rafii.png') }}" alt="Rafii" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/danon.jpg') }}" alt="Danone" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/jayda.png') }}" alt="Jayda" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/marsa.png') }}" alt="Marsa Maroc" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/vert.jpg') }}" alt="Vert" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/filahi.jpg') }}" alt="Filahi" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/wizara.png') }}" alt="Wizara" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/copag.jpg') }}" alt="Copag" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/rafii.png') }}" alt="Rafii" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/danon.jpg') }}" alt="Danone" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/jayda.png') }}" alt="Jayda" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/marsa.png') }}" alt="Marsa Maroc" class="w-24 h-24 object-contain" />
                            <img src="{{ asset('img/vert.jpg') }}" alt="Vert" class="w-24 h-24 object-contain" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@yield('newProduct')

@include('includes.footer')           
 
 
  
 



  