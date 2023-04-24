@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Conference</div>

                    <div class="panel-body">
                        @if ($errors->count() > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="post" action="{{ route('authors.update', $author->id) }}">
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}
                            @method('PATCH')
                            Conference:
                            <br />
                            <input type="text" name="conference_name" value="{{ $author->conference_name }}" />
                            <br /><br />
                            Description:
                            <br />
                            <input type="text" name="description" value="{{ $author->description }}" />
                            <br /><br />
                            Date:
                            <br />
                            <input type="text" name="date" value="{{ $author->date }}" />
                            <br /><br />
                            Address:
                            <br />
                            <input type="text" name="address" value="{{ $author->address }}" />
                            <br /><br />
                            <input type="submit" value="Submit" class="btn btn-default" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
