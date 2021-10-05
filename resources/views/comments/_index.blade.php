<h3 class="mb-5">{{ count($post->comments)}} Comments</h3>
<ul class="comment-list">
    @foreach($post->comments as $comment)
    <li class="comment">
        <div class="comment-body">
            <h3>{{$comment->pseudo}}</h3>
            <div class="meta mb-3">{{$comment->created_at->format('M d, Y')}}</div>
            <p>{{$comment->content}}</p>
        </div>
    </li>
    @endforeach


</ul>