@extends('layouts.app')

@section('content')

商户详细信息
<br />

商户公司：{{ $merchant->company }}
审核状态：{{ $merchant->verified }}

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
                url : "{{ route('merchant_verify', ['id' => $merchant->id]) }}",
                dataType : "json",
                success: function(date) {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {

                }
            });
        });

    </script>
@endsection