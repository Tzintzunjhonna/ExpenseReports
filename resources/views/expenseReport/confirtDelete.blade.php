@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Delete report {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">Delet</button>
            </form>
        </div>
    </div>
</div>

@endsection