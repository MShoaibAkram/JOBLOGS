@extends('layouts.app')
@section('content')
    <div class="row">
        @include('admin.dashboards.widgets.widget_1')
        @include('admin.dashboards.widgets.widget_2')
        @include('admin.dashboards.widgets.widget_3')
    </div>
    <div class="row">
        @include('admin.dashboards.widgets.widget_4')
        @include('admin.dashboards.widgets.widget_5')
        @include('admin.dashboards.widgets.widget_6')
    </div>
@endsection