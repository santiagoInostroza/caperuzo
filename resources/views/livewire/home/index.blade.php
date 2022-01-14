<div class="">
    <div class="p-4 m-auto max-w-7xl px-8">
        <div class="flex justify-between w-full">
            <div class="block md:hidden"> </div>
            <figure class="cursor-pointer transform hover:scale-110 animate-pulse transition ">
                <img class="h-10 md:h-14 rounded-full" src="{{asset('images/logos/texto_blanco.png')}}" alt="logo caperuzo">
            </figure>
            <ul class="flex items-center gap-4 text-white font-bold cursor-pointer text-xl">
                {{-- <li class=" transform hover:scale-125 transition">Imágenes</li>
                <li class=" transform hover:scale-125 transition-all">Eventos</li> --}}
            </ul>
        </div>

    </div>

  
    <div class="w-full relative " >
        <figure class="w-full ">
            <img class="w-full max-h-screen pb-12" src="{{asset('images/portada/portada1.png')}}" alt="portada caperuzo">
        </figure>

          {{-- ESCRITORIO --}}
        <div class="hidden lg:block absolute left-12 bottom-48  border-purple-400 p-4 text-white text-2xl shadow hover:shadow-2xl rounded-xl ">
            {{-- <div class="absolute inset-0 hover:bg-black opacity-20"></div> --}}
            
            <div class="text-7xl font-bold tracking-widest font-mono" style="text-shadow: 2px 2px purple">DUELO</div>
            <div class="text-sm tracking-wide uppercase" style="text-shadow: 2px 2px purple">Ultimo sencillo de caperuzo</div>
            <div class="mt-4">
                <a href="https://linktr.ee/caperuzo" class="text-gray-200 cursor-pointer p-2 bg-gray-800 rounded shadow text-xs uppercase tracking-wider"> <i class="far fa-play-circle mr-2"></i> Escuchalo ahora </a>
            </div>

        </div>

    </div>


    <div class="max-w-7xl m-auto px-8 xl:px-0">
        {{-- CELULAR --}}
        <div>
            <div class="flex w-full items-center justify-center lg:hidden  p-4 text-white text-2xl shadow rounded-xl ">
                <div>
                    <div class="text-4xl font-bold tracking-widest font-mono animate-bounce">DUELO</div>
                    <div class="mt-2">
                        <a href="https://linktr.ee/caperuzo" class="text-gray-400 cursor-pointer p-2 bg-gray-800 rounded shadow text-base animate-pulse"> <i class="far fa-play-circle mr-2"></i> Escuchar  </a>
                    </div>
                </div>
            </div>
            <p class="text-sm tracking-wide  p-8 md:hidden text-gray-200">CAPERUZO lanza su sencillo titulado 'duelo', el segundo del que será su primer lp de 5 canciones</p>
        </div>




        <div class="flex justify-center text-white my-4 w-full h-96 md:h-128 lg:h-256 max-h-screen pb-12">
                    {{-- <h2 class="text-5xl uppercase leading-relaxed  tracking-wider text-justify md:text-center p-2 style="text-shadow: 2px 2px purple"">Cruzar el sol</h2> --}}
                    {{-- <div class="text-5xl font-bold tracking-widest font-mono uppercase" style="text-shadow: 2px 2px purple">Cruzar el sol</div> --}}
                    {{-- <h3 class="text-lg tracking-wide text-justify w-96 mb-4 p-2">"Cruzar el sol" es el primer single de la banda<br><a href="https://linktr.ee/caperuzo" class="text-blue-400 cursor-pointer"><i class="far fa-play-circle"></i> escúchalo en todas las plataformas </a></h3>
                --}}
                <div class="flex justify-center w-full h-full border-purple-500 border-4">
                    <iframe class="w-full h-full"  src="https://www.youtube.com/embed/1T-ZBpT-fpA" title="Cruzar el sol" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    {{-- <iframe width="360" height="615" src="https://www.youtube.com/embed/X5sa9UI_k-Y" 
                    title="Caperuzo adelanto 'Cruzar el sol'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                    
                </div>
        
        </div>

        

        <div class="flex flex-wrap gap-2 gap-y-12 md:gap-12 md:gap-y-24  grid-cols-1 md:grid-cols-2 lg:grid-cols-5 justify-between my-12 px-4">       
            <img class="object-cover w-1/4  transform skew-y-6 skew-x-2 transition-all hover:scale-200 duration-700 hover:skew-y-0 hover:skew-x-0 cursor-pointer shadow-2xl " src="{{asset('images/banda/5258.jpg')}}" alt=""> 
            <img class="object-cover w-1/4  transform skew-y-6 skew-x-2 transition-all hover:scale-200 duration-700 hover:skew-y-0 hover:skew-x-0 cursor-pointer shadow-2xl" src="{{asset('images/banda/4817.jpg')}}" alt=""> 
            <img class="object-cover w-1/4  transform skew-y-6 skew-x-2 transition-all hover:scale-200 duration-700 hover:skew-y-0 hover:skew-x-0 cursor-pointer shadow-2xl" src="{{asset('images/banda/5212.jpg')}}" alt=""> 
        </div>
        <div class="flex flex-wrap gap-2 gap-y-12 md:gap-12 md:gap-y-24  grid-cols-1 md:grid-cols-2 lg:grid-cols-5 justify-around mb-12  px-4">     
            <img class="object-cover w-3/4  transform skew-y-6 skew-x-2 transition-all duration-700 hover:skew-y-0 hover:skew-x-0 hover:scale-150 cursor-pointer shadow-2xl " src="{{asset('images/banda/banda_caperuzzo_juntos.jpg')}}" alt="">
            <img class="object-cover hover:object-contain w-4/4 transform skew-y-6 skew-x-2 transition-all duration-700 hover:skew-y-0 hover:skew-x-0 hover:scale-125 cursor-pointer shadow-2xl" src="{{asset('images/banda/banda_caperuzzo.jpg')}}" alt="">
        </div>
        <div class="w-full relative border-white">
            <figure class="w-full">
                <img class="w-full opacity-30 max-h-screen pb-12 object-cover" style=" filter: blur(4px);filter: grayscale(100%);" src="{{asset('images/banda/banda1.jpeg')}}" alt="banda caperuzo">

            </figure>
            <div class="absolute inset-0 flex justify-center items-center  text-white uppercase">
                <div class="flex flex-col gap-4">
                    <div class="text-2xl md:text-4xl font-black tracking-widest ">
                        Pronto fechas en vivo...
                    </div>
                    <div class="justify-center hidden" x-data="{open:false}">
                        <x-jet-secondary-button x-on:click="open = !open">Presioname</x-jet-secondary-button>
                        <div  class="hidden" :class="{'hidden': !open }">
                            <div class="">
                                <div class="fixed inset-0 bg-gray-500 opacity-90"></div>
                                <div class="fixed inset-0 flex justify-center items-center">
                                    <div class="p-4 rounded shadow bg-gray-200 text-gray-800 max-w-sm">
                                        <div>
                                            
                                        </div>
                                        <div class="flex justify-center mt-4">
                                            <x-jet-danger-button x-on:click="open = !open">Cerrar</x-jet-danger-button>
                                        </div>
                                    </div>
                                    

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

        </div>

        
    </div>

   
    <div class="p-6 m-auto max-w-7xl px-8 text-white text-sm text-center">
        &#169 {{ date('Y')}}  Derechos reservados Caperuzo 
    </div>

    <div id="rrss1" class="hidden fixed right-0 top-28 md:flex flex-col justify-center gap-8 mt-4 items-center text-white text-4xl  transform animate-pulse transition ">
        <div class="absolute inset-0 opacity-90 hover:opacity-100 bg-gray-800 rounded-xl"></div>
        <a href="https://www.facebook.com/caperuzobanda" target="_facebook" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
        <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCecjJjlE11ES7H6JMH2omRg" target="_youtube" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
        <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/caperuzobanda/" target="_instagram" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://open.spotify.com/artist/3JAyt6rz9YqrW0IabTWzfr" target="_spotify" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
            <i class="fab fa-spotify"></i>
        </a>
        <a href="https://music.apple.com/cl/artist/caperuzo/1597179989" target="_apple_music" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
            <i class="fab fa-apple"></i>
        </a>    
    </div>

    <div class="md:hidden">
        <div class="h-14 w-full"></div>
        
        <div id="rrss2" class="fixed flex w-full bottom-0 justify-center gap-8 mt-4 items-center text-white text-4xl rounded-xl ">
            <div class="absolute inset-0 opacity-90 hover:opacity-100 bg-gray-800"></div>
            <a href="https://www.facebook.com/caperuzobanda" target="_facebook" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCecjJjlE11ES7H6JMH2omRg" target="_youtube" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
            <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.instagram.com/caperuzobanda/" target="_instagram" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://open.spotify.com/artist/3JAyt6rz9YqrW0IabTWzfr" target="_spotify" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
                <i class="fab fa-spotify"></i>
            </a>
            <a href="https://music.apple.com/cl/artist/caperuzo/1597179989" target="_apple_music" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
                <i class="fab fa-apple"></i>
            </a>    
        </div>
        
    </div>

    <div id="initLoader" class="fixed inset-0 bg-black flex items-center justify-center text-white" >
        <figure class="">
            <img class="h-40 md:h-80 rounded-full animate-ping " style="animation:  ping 4s cubic-bezier(0, 0, 0.2, 1) infinite;" src="{{asset('images/logos/caperuzo_blanco.png')}}" alt="logo caperuzo">
        </figure>
    </div>

    <script>
        window.onload = function() {
            document.getElementById('initLoader').classList.add('hidden');
        };
    </script>



    
</div>
