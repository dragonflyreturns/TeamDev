<x-app-layout>
    
        <h1>朝楽テーマブログ</h1>
        <h2>管理者</h2>
        <form action="/admin" method="POST">
                @csrf
                @foreach ($theme as $theme)
                <div>
                        
                        <label>
                                <input type='checkbox' id='{{$theme->id}}' class='theme' name='theme' value={{$theme->id}}>
                                {{$theme->theme}}
                        </label>
                </div>
                @endforeach
                <input type='submit' value="送信">
        </form>
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