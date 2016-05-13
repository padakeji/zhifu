@extends('layouts.app')

@section('content')

商户详细信息
<br />

商户公司：{{ $merchant->company }}
<br />
审核状态：{{ $merchant->verified ? '已经通过审核' : '审核未通过' }}

@if (!$merchant->verified)

    <div>
        <button id="btn_verify" type="button" class="btn-default">通过审核</button>
    </div>

@endif

@endsection

@section('script')
    <script type="text/javascript">

        $('#btn_verify').click(function() {
            $.ajax({
                type : "put",
                url : "{{ route('merchant.verify', ['id' => $merchant->id]) }}",
                data : "_token={{ csrf_token() }}",
                dataType : "json",
                success: function(date) {
                    alert(JSON.stringify(date));
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(JSON.stringify(errorThrown));
                }
            });
        });

    </script>
@endsection