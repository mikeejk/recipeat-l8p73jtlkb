@foreach($comments as $comment)
<div class="display-comment mb-3">
    <div class="flex items-center text-white text-montserrat  space-x-3">
        <img src="https://petapixel.com/assets/uploads/2022/02/mirabel-from-encanto-800x735.jpg" class="h-10 w-10 rounded-full object-fill" alt="image">
        <strong class="text-white text-montserrat">{{ $comment->user->name }}</strong>
    </div>
    
    <p class="text-white py-1">{{ $comment->comment }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}" class="flex space-x-3 mb-2">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" placeholder="reply here" class="form-control s p-2 border-b bg-transparent focus:outline-none  focus:ring-0" />
            <input type="hidden" name="recipe_id" value="{{ $recipe_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group flex items-center space-x-3">
            <input type="submit" class="btn btn-sm btn-outline-danger py-0 text-white" style="font-size: 0.8em;" value="Reply" />
        </div>
    </form>
    @include('partials.recipes.reply', ['comments' => $comment->replies])
</div>
@endforeach