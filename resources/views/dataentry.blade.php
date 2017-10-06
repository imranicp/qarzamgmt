@extends('layouts.app')

<style>

</style>
@section('content')
<div class="container-fluid" style="vertical-align: top">
    <h2>Sign Up</h2>
    <div class="inner-box">
        <form method="post" action="/addagent">
            {{csrf_field()}}
            <div class="form-group row">
            <label>Agent Name</label>

            <input type="text" name="agentname" class="span3">
            </div>

            <div class="form-group row">
            <label>Buisness Name</label>
            <input type="text" name="buisnessname" class="span3">
            </div>

            <div class="form-group row">
            <label>Address</label>
            <input type="text" name="address" class="span3">
                </div>
                <div class="form-group row">
                <label>Contact</label>
            <input type="number" name="contact" class="span3">
                    </div>
            <div class="form-group row">
            <label>Picture</label>
                    <input type="file" name="picture" class="span3">
                </div>
            <div class="form-group row">
                {{--<label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>--}}
                <input type="submit" value="Add" class="btn btn-primary pull-left">
                </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
    @endsection