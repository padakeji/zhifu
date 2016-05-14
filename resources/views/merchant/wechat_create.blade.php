@extends('layouts.app')

@section('content')

    <div>
        <form class="form-horizontal" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">公众号名称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="公众号名称" />
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="" placeholder="" />
                </div>
            </div>
        </form>
    </div>

@endsection
