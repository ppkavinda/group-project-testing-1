<div class="row mb-5">
    <div class="col-sm-12">
        <div class="card" style="border: 1px solid gray">
        <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
            <p class="card-text">{{ $post->body }} ...</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-primary mt-4">See More</a>
        </div>
        </div>
    </div>
</div>