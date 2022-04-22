@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('show-books')
                        <p>You have the show-books permission !!!</p>
                    @endcan

                    {{ __('You are logged in!') }}


                    <strong>Roles:</strong><BR>
                    <table>
                    @foreach ($rolls as $key => $roll)
                    <tr>
                        <td>{{ $roll }}</td>
                    </tr>
                    @endforeach
                    </table>

                    <HR>

                    <strong>Permissions:</strong><BR>
                    <table>
                    @foreach ($perms as $key => $perm)
                    <tr>
                        <td>{{ $perm->name }}</td>
                    </tr>
                    @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
