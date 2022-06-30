@extends('backend.app')


@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">

<div class="container">
    <a class="btn btn-warning" href="{{ route('post.create') }}">Create</a>
    <table class="table">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Subcategory</th>
            <th scope="col">Image</th>
            <th scope="col">Date</th>
            <th scope="col">Action    </th>
          </tr>
        </thead>
        <tbody>
            @php($i=1)
            @foreach ( $allpost as $post )


          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->category_name}}</td>
            <td>{{$post->subcategory_name}}</td>
            {{-- <td>{{$post->category_id}}</td> --}}
            {{-- <td>{{$post->sub_category_id}}</td> --}}

            <td>  <img src="{{asset('storage/post/'.$post->image)}}" alt="" width="150px" height="70px"> </td>
            {{-- <td>{{$post->image}}</td> --}}


            <td>
            {{-- {{ \Carbon\Carbon::parse($post->date)->format('j F, Y') }} --}}
            {{$post->date}}
            <td>
                {{-- <a class="btn btn-primary" href="{{url('post/'.$post->id.'/edit')}}">Edit</a> --}}
                {{-- <a class="btn btn-danger" href="{{url('delete-post/'.$post->id)}}">Delete</a> --}}

                <a href="{{ route('post.edit', $post->id) }}"
                    class="btn btn-sm btn-info icon-pencil7">Edit</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                    style="display: inline-flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick=" return confirm('Are you  shure to delete?')"
                        class="btn btn-danger btn-sm icon-trash"> Delete</button>
                </form>

            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
</div>

    </div>
    </div>
@endsection
