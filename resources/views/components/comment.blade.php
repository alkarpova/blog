<div class="border p-5">
    @if ($comment->user)
        <div class="font-semibold">{{ $comment->user->name }}</div>
    @else
        <div class="font-semibold">{{ $comment->name }}</div>
    @endif
    <div class="uppercase text-sm text-theme font-semibold">{{ $comment->created_at->format('d.m.Y') }}</div>
    <div class="border-b my-3"></div>
    <div>
        <p>{{ $comment->message }}</p>
    </div>
</div>
