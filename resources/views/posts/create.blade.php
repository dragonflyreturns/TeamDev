<x-app-layout>
        <h1>チーム開発会へようこそ！</h1>
        <h2>投稿作成</h2>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>テーマ：</h2>
            </div>
            <div>
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="テーマに沿って、感想でも大喜利でも大丈夫。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>投稿者：{{ Auth::user()->name }}</h2>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
</x-app-layout>
