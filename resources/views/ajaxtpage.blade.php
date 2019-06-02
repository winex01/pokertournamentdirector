
    			@foreach ($posts as $post)

                  <li class="list-group-item text-right">
                    <span class="pull-left">
                      <span class="pull-left">
                        <strong style="font-size: 25px;">{{ $post->level }}</strong>
                      </span>
                    </span><b  style="font-size: 25px;">{{ $post->blinds }}</b>
                  </li>
                @endforeach

    </ul>  