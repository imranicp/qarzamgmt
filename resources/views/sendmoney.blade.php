@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


{{--<link rel="stylesheet" href="../assets/sass/chosen.min.css">--}}

{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.css" />--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.js"></script>--}}
@section('content')
<div class="container-fluid">
    <div id="table" data-token="{{csrf_token()}}">

        <div class="form-group">
            <label for="agents">Agents</label>
            <select class="selectpicker" name="agents" data-live-search="true">
                @foreach($agents as $agent)
                <option id="{{$agent->agent_id}}">
                    {{$agent->agent_name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount">
        </div>
        <div class="form-group">
            <button class="send btn btn-success btn-md">Send</button>
        </div>
    </div>

<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    });
    $('.send').click(function () {
        $agent_id=$('.selectpicker option:selected').attr('id');
        $amount=$('#amount').val();

        $table = $("#table");
        token = $table.data("token");
        console.log($agent_id + " " + $amount + " " + token);
        $.ajax({
            data:{
                "agent_id": $agent_id,
                "amount": $amount,
                "trxn_type": 'send',
                "_token": token
            },
            url : "/sendmoney",
            type : "POST",
            dataType: 'JSON',
            complete:function (r) {
                alert(r.responseText)
            }
        })
    });

</script>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
@endsection


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>--}}

{{--<script src="../assets/js/chosen.jquery.min.js"></script>--}}