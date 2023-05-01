@extends('layouts.master')



@section('main')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>

    <h2>Create Article</h2><br>
    @if($errors->any())
        <div class="alert alert-danger" dir="rtl">
            <ul>

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <form action="/articles/create" method="post">

        @csrf

        <label for="fname">Article Title</label>
        <input type="text" id="fname" name="title" placeholder="Your title.."
              {{-- value="{{old('title')}}"--}}
        ><br>


        <label for="subject">Article Body</label>
        <textarea id="subject" name="body" placeholder="Write something.." style="height:150px"></textarea><br>

        <input type="submit" value="Submit">

    </form>

@endsection




