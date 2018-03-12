 <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

        @foreach($articles as $k=>$article)
          <div class="blog-post">
            <h2 class="blog-post-title">{!! $article->title!!}</h2>
            <p class="blog-post-meta">{{ $article->published_start }}  by {{ $article->author_id }}</p>
            {!! $article->text !!}
          </div><!-- /.blog-post -->
        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Newer</a>
          </nav>

</div><!-- /.blog-main -->