@extends('layout')

@section('content')
    <button class="button is-link" style="margin: 0 5px 10px;" onclick="location.href='note/create'">创建新记事</button>
    <button class="button" onclick="location.href='about'">关于应用</button>

    @foreach($notes as $note)
        <div class="box note_box">
            <a href="note/{{ $note->id }}" class="note_title">{{ $note->title }}</a>
            <div>{{ mb_strlen($note->content) > 80 ? mb_substr($note->content, 0, 80) . '...' : $note->content }}</div>
            <div class="update_time">最后更新于 {{ $note->updated_at }}</div>
        </div>
    @endforeach
@endsection