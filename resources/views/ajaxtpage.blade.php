   <ul class="list-group posts endless-pagination" data-next-page="{{ $posts->nextPageUrl() }}">
                <li class="list-group-item text-muted" style="font-size: 20px; background: black; color: white; font-family:'digital-clock-font'">LEVELS<span class="pull-right">BLINDS</span></li>
                
    			@foreach ($posts as $post)
  
                  <li class="list-group-item text-right">
                    <span class="pull-left">
                      <span class="pull-left">
                        <strong style="font-size: 25px;">{{ $post->level }}</strong>
                      </span>
                    </span><b  style="font-size: 25px;">{{ $post->blinds }}</b>
                  </li>
                @endforeach
          
              <center>{!! $posts->render() !!}</center>

    </ul>  