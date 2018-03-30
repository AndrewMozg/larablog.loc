 <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

        @foreach($articles as $k=>$article)
          <div class="blog-post">
            <h2 class="blog-post-title">{!! $article->title!!}</h2>
            <p class="blog-post-meta">{{ Carbon\Carbon::parse($article->published_start)->format('d-m-Y i') }} by {{ $article->user['name'] }}</p>
            {!! $article->text !!}
          </div><!-- /.blog-post -->
        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Newer</a>
          </nav>

</div><!-- /.blog-main -->