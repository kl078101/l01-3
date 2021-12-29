<div class="list-group-item">
  <img class="mr-3" src="https://img2.baidu.com/it/u=317118217,2928983786&fm=26&fmt=auto" alt="{{ $user->name }}" width=32>
  <a href="{{ route('users.show', $user) }}">
    {{ $user->name }}
  </a>
</div>
