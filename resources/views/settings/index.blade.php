@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="bootstrap-switch-container" style="width: 126px; margin-left: -42px;">
            <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span>
            <span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span>
            <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span>
            <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
        </div>
        </div>
    </div>
</div>
@endsection
