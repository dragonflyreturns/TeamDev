<x-app-layout>
    
        <h1 class='text-5xl lg:font-bold text-blue-400 text-center m-2'>朝楽テーマブログ</h1>
        <h2 class='text-2xl text-red-700 text-center'>履歴</h2>
        @foreach ($user->posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    
                <p class='m-1'>本文: {{ $post->body }}</p>
                <p>{{$post->created_at}}</p>
                    
                </div>
        @endforeach

</x-app-layout>