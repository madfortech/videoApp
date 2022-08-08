@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.comment.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.comments.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="body">{{ trans('cruds.comment.fields.body') }}</label>
                            <textarea class="form-control" name="body" id="body" required>{{ old('body') }}</textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('body') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.comment.fields.body_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="post_id">{{ trans('cruds.comment.fields.post') }}</label>
                            <select class="form-control select2" name="post_id" id="post_id">
                                @foreach($posts as $id => $entry)
                                    <option value="{{ $id }}" {{ old('post_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('post'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('post') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.comment.fields.post_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection