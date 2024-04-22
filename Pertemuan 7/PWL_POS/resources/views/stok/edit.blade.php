@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @foreach ($user as $u)
                <form method="POST" action="{{ url('/user/'.$u->user_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT')!!} <!-- tambahkan baris ini untuk proses edit yang butuh method PUT -->
                    <div class="form-group row">
                        <label for="level_id" class="col-1 control-label col-form-label">Level</label>
                        <div class="col-11">
                            <select class="form-control" id="level_id" name="level_id" required>
                                <option value="">- Pilih Level -</option>
                                @foreach($level as $item)
                                    <option value="{{ $item->level_id }}" @if($item->level_id == $u->level_id) selected @endif>{{ $item->level_nama }}</option>
                                @endforeach
                            </select>
                            @error('level_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection