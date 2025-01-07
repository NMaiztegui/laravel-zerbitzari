@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a Character</h1>
            <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Character name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name"
                        value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }} </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('actor') ? ' has-error' : '' }}">
                    <label for="actor">Actor</label>
                    <input type="text" class="form-control" id="actor" name="actor" placeholder="actor"
                        value="{{ old('actor') }}">
                    @if ($errors->has('actor'))
                        <span class="help-block">{{ $errors->first('actor') }}
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('description') ? ' haserror' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
