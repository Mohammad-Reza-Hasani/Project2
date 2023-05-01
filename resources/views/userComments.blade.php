@extends('layouts.master')



@section('main')

    <h2>Users Comments List</h2>



    <table>
        <tr>
            <td> id </td>  <td> username </td>  <td> comment </td>
        </tr>

        @if(count($usersComments))

            @foreach($usersComments as $usersComment)
                <tr>
                    <td> {{$usersComment->id}} </td>  <td> {{$usersComment->username}} </td>     <td> {{ $usersComment->comment }} </td>
                </tr>
            @endforeach
    </table>
        @endif



@endsection
