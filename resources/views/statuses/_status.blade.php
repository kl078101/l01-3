<li class="media mt-4 mb-4">
  <a href="{{ route('users.show', $user->id )}}">
    <img src="https://img2.baidu.com/it/u=317118217,2928983786&fm=26&fmt=auto" alt="{{ $user->name }}" class="mr-3 gravatar"/>
  </a>
  <div class="media-body">
    <h5 class="mt-0 mb-1">{{ $user->name }} <small> / {{ $status->created_at->diffForHumans() }}</small></h5>
    {{ $status->content }}
  </div>
</li>
