<x-app-layout>
    <div class="text-center">
        <h1 class="text-5xl text-blue-400 lg:font-bold mt-4 mb-4">朝楽テーマブログ</h1>
        <h2 class="text-3xl mt-4 mb-4">投稿作成画面</h2>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2 class="text-3xl mt-4 mb-4">今日のテーマ：{{$theme->theme}}</h2>
            </div>
            <div>
                <h2 class="text-xl mt-4">本文</h2>
                <textarea name="post[body]" placeholder="テーマに沿って、感想でも大喜利でも大丈夫。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2 class="mb-4">投稿者：{{ Auth::user()->name }}</h2>
            </div>
            <input class="border border-black  bg-white hover:bg-gray-200 text-black rounded px-2 py-1 mt-4 mb-4" type="submit" value="保存"/>
        </form>
    </div>
        <div class="underline text-blue-400"><a href="/">戻る</a></div>
</x-app-layout>
