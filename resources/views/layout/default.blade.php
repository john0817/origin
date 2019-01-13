@include('layout._head')

@include('layout._nav')

<div class="container">
    @include('layout._notice')
    @yield('contents')
</div>


@include('layout._foot')
