@extends('layouts.app')

@section("content")
    <form action="{{ url('/merchant/apply_submit') }}" method="POST" class="form-horizontal" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
        <div class="form-group">
            <label for="company" class="col-sm-2 control-label">公司名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company" id="company" placeholder="请输入公司名称">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">申请</button>
            </div>
        </div>
    </form>
@endsection