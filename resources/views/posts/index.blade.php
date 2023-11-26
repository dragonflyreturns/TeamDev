<x-app-layout>
    
        <h1>チーム開発会へようこそ！</h1>
        <h2 class='text-red-700'>投稿一覧画面</h2>
        <h2>投稿可能時間は６時から９時までです！！！それ以外の時間では新規投稿ページが表示されません。</h2>
        <a href='/posts/create' class='newPost'>新規投稿</a>
        <p>
            今日のテーマ：{{ $theme->theme }} 
        </p>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    
                    <p>本文：{{ $post->body }}</p>
                    <p> 投稿者：{{ $post->user->name }}</p>
                </div>
                
                <form method="post" action="{{route('delete', $post)}}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">削除</button>
                    
                </form>
                
                
                @if($post->nices()->where('user_id', Auth::user()->id)->count() == 1)
                  <a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
                      いいねを消す
                      <span class="badge">{{ $post->nices->count() }}</span>
                  </a>
                @else
                  <a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
                      いいねをつける
                      <span class="badge">{{ $post->nices->count() }}</span>
                  </a>
                @endif
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
        <script>
            const inputClass = document.getElementsByClassName("newPost")[0];
            function showOrHideLink(){
                const currentTime = new Date();
                const currentHour = currentTime.getHours();
                const currentHour = 8;
                
                const showLink = currentHour >= 6 && currentHour <= 9;
                
                inputClass.style.display = showLink ? "block" : 'none';
            }
            showOrHideLink()
        </script>
    

</x-app-layout>