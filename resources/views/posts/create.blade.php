@extends('layouts.app')

@section('content')
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">


            <div class="form-header">
                <h1>Добавить статью</h1>
            </div>
            <div class="form-content">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" id="title" name="title"/>
                        @error('title')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea id="description" type="text" name="description" cols="40" rows="3" style="width: 450px; height: 180px;"></textarea>
                        @error('description')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button style="color: #ffffff;margin-top: 15px" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
