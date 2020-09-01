
<section class="section-padding gray-bg" id="blog-page">
    <div class="container">
        <div class="row">
            @foreach($section->contents as $content)
            <div class="col-md-{{ $content->cols }}">
                <div class="single-blog">
                    <div class="blog-photo">
                        <img src="{{ $content->picture_path }}" alt="{{ $content->title }}">
                    </div>
                    <div class="blog-content">
                        <h3>{{ $content->title }}</h3>

                        <p>{{ $content->description }}</p>
                    </div>
                </div>
            </div>
                @endforeach

        </div>
    </div>
</section>
