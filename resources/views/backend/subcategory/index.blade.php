@extends('backend.app')


@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            {{-- @include('layouts.backend.inc.content') --}}
            <div class="container">
                <a class="btn btn-warning" href="{{ url('/subcategory/create') }}">Create</a>
                <div class="row ">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Serial No:</th>
                                    <th scope="col">Subcategory Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action  </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($subcategories as $subcategory)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $subcategory->name }}</td>

                                        <td><img src="{{ asset('storage/subcategory/' . $subcategory->subcategory_image) }}" alt="" width="150px" height="70px"></td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('subcategory.edit', $subcategory->id) }}">Edit</a>
                                            <form action="{{ route('subcategory.destroy', $subcategory->id) }}" method="POST"
                                                style="display: inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick=" return confirm('Are you  shure to delete?')"
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

        </div>
    </div>
@endsection
