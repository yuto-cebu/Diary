@extends('layouts.app')

@section('title', '編集画面')

@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <!-- エラーがあった場合 -->
            @if($errors->any()) <!-- any() エラーがあったら -->
                <ul>
                    @foreach($errors->all() as $message)
                        <li class="alert alert-danger">
                            {{$message}}
                        </li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('diary.update', ['id' => $diary->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $diary->title) }}">
                </div>
                <div class="form-group">
                    <label for="title">本文</label>
                    <textarea class="form-control" name="body" id="body">{{ old('body', $diary->body) }}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">更新</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection