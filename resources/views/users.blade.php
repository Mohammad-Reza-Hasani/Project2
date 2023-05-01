@extends('layouts.master')



@section('main')

    <h2>Users List</h2>



    <table>
        <tr>
            <td> id </td>  <td> username </td>   <td> password </td>
        </tr>

      @if(count($users))

        @foreach($users as $user)
                <tr>
                    <td> {{$user->id}} </td>  <td> {{$user->username}} </td>   <td> {{$user->password}} </td>
                </tr>
            @endforeach
        @endif

    </table>
@endsection




