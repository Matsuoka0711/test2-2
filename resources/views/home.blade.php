@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" style="display: flex; justify-content: space-between;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('認証に成功しました。') }}
                    <a href="{{ route('catalog') }}">商品画面一覧へ</a>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
