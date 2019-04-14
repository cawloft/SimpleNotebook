@extends('layout')

@section('title')
    {{ $note->title  }} | Simple Notebook
@endsection

@section('content')
    <div class="box note_box" style="text-align: left;">
        <div class="note_title" style="margin-bottom: 10px;">{{ $note->title  }}</div>
        {!! nl2br(e($note->content)) !!}
        <div class="update_time">记事创建于 {{ $note->created_at }}</div>
        <div class="update_time">最后编辑于 {{ $note->updated_at}}</div>
        <div class="field">
            <div class="control" style="text-align: right; margin-top: 10px;">
                <button type="button" class="button is-link" onclick="location.href='/note/{{ $note->id }}/edit'">编辑记事</button>
            </div>
        </div>
    </div>
@endsection