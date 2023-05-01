@extends('layouts.master')



@section('main')
<main>
    <h2>Comments List</h2>



    <table>
        <tr>
            <td> id </td>  <td> comment </td>   <td> user id </td>
        </tr>

        @if(count($comments))

            @foreach($comments as $comment)
                <tr>
                    <td> {{$comment->id}} </td>  <td> {{  $comment->comment }} </td>   <td> {{ $comment->user_id }} </td>
                </tr>
            @endforeach
        @endif

    </table>

</main>

@endsection
