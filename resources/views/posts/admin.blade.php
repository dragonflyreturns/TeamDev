<x-app-layout>
    <div class="text-center">
                <h1 class="text-5xl text-blue-400 lg:font-bold">朝楽テーマブログ</h1>
                <h2 class="text-xl">管理者画面</h2>
                <form action="/admin" method="POST">
                        @csrf
                        @foreach ($theme as $theme)
                        <div>
                                
                                <label class="text-2xl">
                                        <input type='checkbox' id='{{$theme->id}}' class='theme' name='theme' value={{$theme->id}}>
                                        {{$theme->theme}}
                                </label>
                        </div>
                        @endforeach
                        <input class=" border border-black  bg-white hover:bg-gray-200 text-black rounded px-2 py-1" type='submit' value="送信">
                </form>
        </div>
        <script>
               const inputClass = document.getElementsByClassName("theme");
               for(let i=0;i<inputClass.length;i++){
        　　                    inputClass[i].onclick = function(){
                                for(let u=0;u<inputClass.length;u++){
                                        inputClass[u].checked = false;
                                        this.checked = true;
                                }
        　                    }
                } 
        </script>

</x-app-layout>