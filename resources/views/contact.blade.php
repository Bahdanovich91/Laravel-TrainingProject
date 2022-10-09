@extends('layouts.app')

@section('title-block')contact @endsection

@section('content')
    <h1>contact</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group mt-4">
            <label for="name">Введите имя</label>
            <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control">
        </div>

        <div class="form-group mt-4">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Введите email" class="form-control">
        </div>

        <div class="form-group mt-4">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="form-control">
        </div>

        <div class="form-group mt-4">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-4">Отправить</button>
    </form>
@endsection
