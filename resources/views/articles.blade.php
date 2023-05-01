@extends('layouts.master')



@section('main')

    <h2>Articles List</h2>




    <table>
        <tr>
            <td> id </td>  <td> title </td>     <td>  </td>
        </tr>

        @if(count($articles))

            @foreach($articles as $article)
                <tr>
                    <td> {{$article->id}} </td>

                    <td>
                        <form action="" method="post">
                            @csrf
                            @method('post')
                            <a href="/articles/view/{{$article->id}}"> {{$article->title}}</a>
                        </form>
                    </td>

                    <td> <form action="/articles/delete/{{$article->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm"> delete </button>
                        </form>
                    </td>

                    <td> <form action="/articles/edit/{{$article->id}}" method="post">
                            @csrf
                            <button class="btn btn-primary btn-sm"> update </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif

    </table>

   <a href="/articles/insert"> <button class="btn btn-secondary ">Add New Article </button></a>



@endsection
