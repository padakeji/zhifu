@extends('layouts.app')

@section("content")
<Div>
    <table class="table">
        <thead>
        <tr>
            <th>公司</th>
            <th>是否审核</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($merchants as $merchant)
        <tr>
            <td>{{ $merchant->company }}</td>
            <td>
                @if ($merchant->verified === 1)
                    已经通过审核
                @else
                    尚未审核
                @endif
            </td>
            <td>
                <a href="{{ url('admin/merchant/'.$merchant->id) }}">查看</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</Div>
@endsection