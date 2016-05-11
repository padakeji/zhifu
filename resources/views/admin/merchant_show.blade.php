@extends('layouts.app')

@section('content')

商户详细信息
<br />

商户公司：{{ $merchant->company }}
审核状态：{{ $merchant->verified }}

@if (!$merchant->verified)

    <div>
        <button type="button" class="btn-default">通过审核</button>
    </div>

@endif

@endsection