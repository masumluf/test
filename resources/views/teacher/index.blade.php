@extends('student.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Student's</strong> Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Welcome Mr./Mst : <strong>{{ Auth::guard('teacher')->user()->name}}</strong></p>
                        <p>Your joined  : {{ Auth::guard('teacher')->user()->created_at->diffForHumans() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
