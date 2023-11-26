<x-app-layout>
    
        <h1>朝楽テーマブログ</h1>
        <h2>履歴</h2>
        @foreach ($user->posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    
                <p>本文: {{ $post->body }}</p>
                    
                </div>
        @endforeach

</x-app-layout>