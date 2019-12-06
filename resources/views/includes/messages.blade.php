<div class="container ">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="message message-error">
        <span class="message-content center">{{ $error  }}</span>
        <i class="message-close material-icons">close</i>
    </div>
    @endforeach
    @elseif(session('success'))
    <div class="message message-success">
        <span class="message-content center"> {{ session('success') }}</span>
        <i class="message-close material-icons">close</i>
    </div>
    @endif
</div>