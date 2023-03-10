@extends('frontend.main')
@section('content')

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('storage/'.$berita->image) }}" class="img-polaroid" style="width: 400px; float:left; margin-right:30pt;">
            <div class="card-body">
              <h5 class="card-title">{{ $berita->title }}</h5>
              <p class="card-text">{{ $berita->body}}</p>
        </div>
    </div>
    <div id="disqus_thread" class="container">
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://hewan-tropis.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    </div>
    </div>

@endsection
