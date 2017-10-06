@extends('layouts.app')
<style>
    .side-menu{
        /*float: left;*/
        position:absolute; left:-350px; top:30px;
        border: solid green 1px;
        height: 100%;
        list-style-type: none;
        display: inline;


    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <br><br>
                    <a class="btn-success btn-lg" href="/addagent">Add Agent</a>
                        <a class="btn-success btn-lg">Add Amount</a>
                        <a class="btn-success btn-lg" href="/showagents">Show Agent</a>
                        <a class="btn-success btn-lg">Show Transaction</a>
                </div>
            </div>

            <div class="side-menu">
                @include('menu')
            </div>
        </div>
    </div>
</div>
@endsection
