@extends('layouts.app')

@section("content")
    @if(isset($merchant))
        <div>
            微信公众号详细信息
        </div>
    @else
        <div>
            还没有设置微信公众号，<a href="{{ route('merchant.wechat.create') }}">点击设置微信公众号</a>
        </div>
    @endif
@endsection