<div id="right-panel" class="right-panel">

    {{--Header--}}
    @include('backend.layouts.header')
    {{--Header--}}

    {{--breadcumbs--}}
    @yield('breadcrumbs')
    {{--breadcumbs--}}

    {{--content--}}
    @yield('content')
    {{--content--}}
</div>