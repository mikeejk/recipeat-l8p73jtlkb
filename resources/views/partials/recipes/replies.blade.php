@foreach($comments as $comment)
<div class="display-comment ">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->comment }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" placeholder="reply here" class="form-control s p-2" />
            <input type="hidden" name="recipe_id" value="{{ $recipe_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
        </div>
    </form>
    @include('partials.recipes.replies', ['comments' => $comment->replies])
</div>
@endforeach
