@extends('partials.layout')

@section('title', 'contact')

{{-- para html y css --}}
@section('content')
    <h1>contact</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            
        @endforeach
    </ul>
    @endif

    <form method="post" action="{{route('contact.submit')}}">
        @csrf
        <input type="text" name="nombre" placeholder="nombre"><br>
    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
    
    <input type="text" name="subject" placeholder="asunto"><br>
    {!! $errors->first('subject', '<small>:message</small><br>') !!}
    
    <input type="text" name="email" placeholder="correo"><br>
    {!! $errors->first('email', '<small>:message</small><br>') !!}
    
    <textarea name="content" placeholder="mensaje:"></textarea><br>
    {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button>enviar</button>
    </form>
@endsection