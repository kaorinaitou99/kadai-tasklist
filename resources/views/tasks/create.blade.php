extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'task.store']) !!}

        {!! Form::label('content', '作成:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('作成') !!}

    {!! Form::close() !!}

@endsection