<x-app-layout>
    
        <h1>チーム開発会へようこそ！</h1>
        <h2>投稿一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <p>
            テーマ：{{ $theme->theme }} 
        </p>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    
                    <p>本文：{{ $post->body }}</p>
                    <p> 投稿者：{{ $post->user->name }}</p>
                </div>
                
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
    

</x-app-layout>