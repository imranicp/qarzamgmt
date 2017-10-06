@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


@section('content')
<style>
    .details li {
        list-style: none;
    }
    li {
        margin-bottom:10px;
    }
    .tital{
        text-align:right;
    }
    .contant_i{
        color: #631e1e;
        border-bottom: 1px solid #cea7a7;
    }
</style>

    <div class="container">
        <div class="jumbotron">



            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div class="thumbnail text-center photo_view_postion_b" >
                        <img src="http://dkextras.com/DK/images/profile/dfe29f0b7f57ca5cb982ac9b323ac975.jpg" alt="stack photo" class="img">
                    </div>
                </div>
                <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                    <div class="" style="border-bottom:1px solid black">
                        <h2>Agent Name</h2>
                    </div>
                    <hr>
                    <div class="col-md-8">
                        <ul class=" details">
                            <li><p><span class="glyphicon glyphicon-credit-card one" style="width:50px;"></span>Business Name</p></li>
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+92 300 0000000</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Address</p></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="col-sm-5 col-xs-6 tital " >Birthday:</div><div class="col-sm-7 col-xs-6 ">2018/2/15</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7 col-xs-6 ">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-group" style="border-bottom:1px solid black">
                            <h2>Recent Transaction</h2>
                        </div>
                    </div>
                </div>
            </div>









        </div>
    </div>

    @endsection