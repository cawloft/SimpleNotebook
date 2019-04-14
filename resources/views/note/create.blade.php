@extends('layout')

@section('title', '创建新记事 | Simple Notebook')

@section('content')
    <div class="box note_box" style="text-align: left;">
        <div class="note_title" style="margin-bottom: 10px;">创建新记事</div>
        <form method="POST" action="/note/create">
            @csrf

            <div class="field">
                <label class="label" for="title">记事标题</label>
                <div class="control">
                    <input type="text" class="input" name="title" placeholder="记事标题" required>
                </div>
            </div>
            <div class="field">
                <label class="label" for="content">记事内容</label>
                <div class="control">
                    <textarea class="textarea" name="content" placeholder="请在这里书写内容..." style="height: 300px;" required></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control" style="text-align: right;">
                    <button type="reset" class="button">清空内容</button>
                    <button type="submit" class="button is-link">提交记事</button>
                </div>
            </div>
        </form>
    </div>
    @if($errors->any())
        <div class="notification is-danger" style="margin: 0 15%;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection