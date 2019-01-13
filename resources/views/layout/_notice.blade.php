@foreach(['success','danger','info','warning'] as $type)
    @if(session()->has($type))
    <div class="alert alert-{{ $type }}" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session()->get($type) }}</strong>
    </div>
    @endif
@endforeach