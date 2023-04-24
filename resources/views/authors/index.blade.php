@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin</div>

                    <div class="panel-body">
                        <a href="{{ route('authors.create') }}" class="btn btn-default">Add New Conference</a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Conference name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($authors as $author)
                                <tr>
                                    <td>{{ $author->conference_name }}</td>
                                    <td>{{ $author->description }}</td>
                                    <td>{{ $author->date }}</td>
                                    <td>{{ $author->address }}</td>
                                    <td>
                                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-default">Edit</a>
                                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST"
                                              style="display: inline"
                                              onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No entries found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if (session('message'))
                        <div class="alert alert-info">{{ session('message') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
