@extends('layouts.app')

@section("content")
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="company" class="col-sm-2 control-label">公司名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="company" placeholder="请输入公司名称">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">申请</button>
            </div>
        </div>
    </form>
@endsection