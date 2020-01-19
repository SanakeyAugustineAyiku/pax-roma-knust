<div class="container ">
    @if(session('success'))
        <div class="message message-success">
            <span class="message-content center"> {{ session('success') }}</span>
            {{-- <i class="message-close material-icons">close</i> --}}
        </div>
    @elseif(session('error'))
    <div class="message message-error">
        <span class="message-content center">{{ $error  }}</span>
        {{-- <i class="message-close material-icons">close</i> --}}
    </div>
    @endif
</div>
