@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Conference</div>
                        <div class="panel-body">
                            @if ($errors->count() > 0)
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form method="post" action="{{ route('authors.store') }}">
                            {{ csrf_field() }}
                            @method('PATCH')
                            Conference name:
                            <br />
                            <input type="text" name="conference_name" value="{{ old('conference_name') }}" />
                            <br /><br />
                            Description:
                            <br />
                            <input type="text" name="description" value="{{ old('description') }}" />
                            <br /><br />
                            Date:
                            <br />
                            <input type="text" name="date" value="{{ old('date') }}" />
                            <br /><br />
                            Address:
                            <br />
                            <input type="text" name="address" value="{{ old('address') }}" />
                            <br /><br />
                            <input type="submit" value="Submit" class="btn btn-default" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
