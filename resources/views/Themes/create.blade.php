<x-app-layout>
        <h1>朝楽テーマブログ</h1>
        <h2>テーマを作成する</h2>
        <form action="/themes" method="POST">
            @csrf
            <div>
                <h2>追加するテーマ</h2>
            </div>
            <div>
                <input type="text" name="theme">
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>投稿者：{{ Auth::user()->name }}</h2>
            </div>
            <input type="submit" value="保存"/>
        </form>
</x-app-layout>
