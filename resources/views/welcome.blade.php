<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                The Aulab Post
            </h1>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-succes text-center">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="clo-12 col-md-3">
                    <x-card
                        :tags="$article->tags"
                        title="{{$article->title}}"
                        subtitle="{{$article->subtitle}}"
                        image="{{$article->image}}"
                        category="{{$article->category->name}}"
                        data="{{$article->created_at->format('d/m/Y')}}"
                        user="{{$article->user->name}}"
                        url="{{route('article.show', compact('article'))}}"
                        urlCategory="{{route('article.byCategory', ['category'=>$article->category->id])}}"
                        urlUser="{{route('article.byUser', ['user'=>$article->user->id])}}"
                    />
                </div>
            @endforeach
        </div>
    </div>        
</x-layout>