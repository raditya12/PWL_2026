@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">

    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ url('user') }}" class="form-horizontal">
            @csrf

            <!-- Level -->
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Level</label>
                <div class="col-11">
                    <select name="level_id"
                            id="level_id"
                            class="form-control"
                            required>
                        <option value="">- Pilih Level -</option>
                        @foreach($level as $item)
                            <option value="{{ $item->level_id }}"
                                {{ old('level_id') == $item->level_id ? 'selected' : '' }}>
                                {{ $item->level_nama }}
                            </option>
                        @endforeach
                    </select>

                    @error('level_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- Username -->
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Username</label>
                <div class="col-11">
                    <input type="text"
                           name="username"
                           id="username"
                           class="form-control"
                           value="{{ old('username') }}"
                           required>

                    @error('username')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- Nama -->
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Nama</label>
                <div class="col-11">
                    <input type="text"
                           name="nama"
                           id="nama"
                           class="form-control"
                           value="{{ old('nama') }}"
                           required>

                    @error('nama')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- Password -->
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Password</label>
                <div class="col-11">
                    <input type="password"
                           name="password"
                           id="password"
                           class="form-control"
                           required>

                    @error('password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- Button -->
            <div class="form-group row">
                <label class="col-1 control-label col-form-label"></label>
                <div class="col-11">
                    <button type="submit" class="btn btn-primary btn-sm">
                        Simpan
                    </button>
                    <a href="{{ url('user') }}"
                       class="btn btn-sm btn-default ml-1">
                        Kembali
                    </a>
                </div>
            </div>

        </form>
    </div>

</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush