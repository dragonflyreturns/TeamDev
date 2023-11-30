<x-app-layout>
    
        <h1 class='text-5xl lg:font-bold text-blue-400 text-center m-2'>朝楽テーマブログ</h1>
        <h2 class='text-2xl text-red-700 text-center'>投稿可能時間は朝６時から９時までです！！！それ以外の時間では新規投稿ページが表示されません。</h2>
        <p class='m-1 text-center'>ブログの投稿：<span class='border bg-white p-1 border-black rounded-2xl'><a href='/posts/create' class='newPost'>新規投稿</a></span></p>
        <h2 class='m-1 text-center'>テーマ作成：<span class='border bg-green-100 p-1 border-black rounded-2xl'><a href='/theme/create'>新規テーマ作成</a></span></h2>
        <p class='p-5 rounded bg-yellow-200 text-2xl text-center'>
            今日のテーマ：<span class='lg:font-bold text-center text-blue-800'>{{ $theme->theme }}</span> 
        </p>
        <h2 class='text-center'>投稿一覧画面</h2>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;' class='m-2'>
                    
                    <p class='m-1'>本文：{{ $post->body }}</p>
                    <p class='m-1'> 投稿者：{{ $post->user->name }}</p>
                    <p class='m-1'>{{$post->created_at}}</p>
                </div>
                
                <div class='border border-black m-2 bg-red-200' style='margin-right: 92rem;'>
                <form method="post" action="{{route('delete', $post)}}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">削除</button>
                    
                </form>    
                </div>
                
                
                <div class='border border-black m-2' style=' margin-right: 88rem;'>
                @if($post->nices()->where('user_id', Auth::user()->id)->count() == 1)
                <div class='bg-green-400'>
                  <a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
                      いいねを消す
                      <span class="badge">{{ $post->nices->count() }}</span>
                  </a>  
                </div>
                  
                @else
                <div class='bg-green-100'>
                  <a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
                      いいねをつける
                      <span class="badge">{{ $post->nices->count() }}</span>
                  </a>  
                </div>
                  
                @endif    
                </div>
                
            @endforeach
        </div>
        
        <script>
            const inputClass = document.getElementsByClassName("newPost")[0];
            function showOrHideLink(){
                const currentTime = new Date();
                const currentHour = currentTime.getHours();
                // const currentHour = 7;　時間調整
                
                const showLink = currentHour >= 6 && currentHour <= 9;
                
                inputClass.style.display = showLink ? "block" : 'none';
            }
            showOrHideLink()
        </script>
    

</x-app-layout>