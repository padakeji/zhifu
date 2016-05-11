@extends('layouts.app')

@section('content')

商户详细信息
<br />

商户公司：{{ $merchant->company }}
审核状态：{{ $merchant->verified }}

@if (!$merchant->verified)

@endif

@endsection