<x-app-layout>
    <div class="text-center">
        <h1 class="text-5xl text-blue-400 lg:font-bold mt-4 mb-4">朝楽テーマブログ</h1>
        <h2 class="text-3xl mt-4 mb-4">テーマを作成する</h2>
        <form action="/themes" method="POST">
            @csrf
            <div>
                <h2 class="text-xl mt-4">追加するテーマ</h2>
            </div>
            <div>
                <input type="text" name="theme">
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2 class="mb-4">投稿者：{{ Auth::user()->name }}</h2>
            </div>
            <input class="border border-black  bg-white hover:bg-gray-200 text-black rounded px-2 py-1" type="submit" value="保存"/>
        </form>
    </div>
</x-app-layout>
