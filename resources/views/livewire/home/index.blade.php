<div class="">

    <div class="p-2 m-auto max-w-7xl px-8">
        <div class="flex justify-between">
            <figure class="cursor-pointer transform hover:scale-110 hover:rotate-180 animate-pulse transition ">
                <img class=" h-20 rounded-full" src="{{asset('images/logo/logo2.jpeg')}}" alt="logo caperuzo">
            </figure>
            <ul class="flex items-center gap-4 text-white font-bold cursor-pointer text-xl">
                <li class=" transform hover:scale-125 transition">Imágenes</li>
                <li class=" transform hover:scale-125 transition-all">Eventos</li>
            </ul>
        </div>

    </div>
  
    <div class="w-full">
        <figure class="w-full">
            <img class="w-full" src="{{asset('images/portada/portada1.jpeg')}}" alt="portada caperuzo">
        </figure>

    </div>


    <div class="flex justify-center text-white my-4">
        <div>
            <h2 class="text-5xl uppercase leading-relaxed text-center">Cruzar el sol</h2>
            <h3 class="text-center">Disponible desde el 17 de diciembre 2021</h3>
            <div class="flex justify-center">
                <iframe width="360" height="615" src="https://www.youtube.com/embed/X5sa9UI_k-Y" 
                title="Caperuzo adelanto 'Cruzar el sol'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
            </div>
        </div>
    </div>

    <div class="w-full relative border-white">
        <figure class="w-full">
            <img class="w-full opacity-30" style=" filter: blur(4px);filter: grayscale(100%);" src="{{asset('images/banda/banda1.jpeg')}}" alt="banda caperuzo">

        </figure>
        <div class="absolute inset-0 flex justify-center items-center  text-white uppercase">
            <div class="flex flex-col gap-4">
                <div class="text-4xl font-black tracking-widest ">
                    Algo importante por aquí... 
                </div>
                <div class="flex justify-center" x-data="{open:false}">
                    <x-jet-secondary-button x-on:click="open = !open">Presioname</x-jet-secondary-button>
                    <div  class="hidden" :class="{'hidden': !open }">
                        <div class="">
                            <div class="fixed inset-0 bg-gray-500 opacity-90"></div>
                            <div class="fixed inset-0 flex justify-center items-center">
                                <div class="p-4 rounded shadow bg-gray-200 text-gray-800 max-w-sm">
                                    <div>
                                        Wena cabros, aqui tienen solo una idea, manden sugerencias, referencias y todo lo que se les ocurra para ir enchulando la página
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

    <div id="rrss" class="flex justify-center gap-8 mt-4 items-center text-white text-4xl">
        <a href="https://www.facebook.com/caperuzobanda" target="_facebook" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
           <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCecjJjlE11ES7H6JMH2omRg" target="_youtube" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
           <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/caperuzobanda/" target="_instagram" class="p-2 cursor-pointer transform hover:scale-125 transition-all">
            <i class="fab fa-instagram"></i>
        </a>
       
    </div>

    <div class="p-6 m-auto max-w-7xl px-8 text-white text-sm text-center">
        &#169 {{ date('Y')}}  Derechos reservados Caperuzo 
    </div>

    
</div>
