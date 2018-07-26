@extends(env("THEME") . '.layouts.basic')


@section('navigation')
    {!! $navigation or "Empty Navigation!" !!}
@endsection


@section('slider')
    {!! $slider or "Empty Slider!" !!}
@endsection


@section('service')
    {!! $service or "Empty Serive!" !!}
@endsection


@section('offer')
    {!! $offer or "Empty Offer!" !!}
@endsection


@section('industrie')
    {!! $industrie or "Empty Industrie!" !!}
@endsection


@section('about')
    {!! $about or "Empy About!" !!}
@endsection


@section('gallery')
    {!! $gallery or "EMPTY Gallery!" !!}
@endsection


@section('contact')
    {!! $contact or "Empty Contact!" !!}
@endsection

@section("footer")
    {!! $footer or "Empty Footer!" !!}
@endsection
