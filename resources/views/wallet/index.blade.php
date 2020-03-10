@extends('layouts.app')

@section('content')

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th><span data-feather="calendar"></span>Date</th>
              <th><span data-feather="tag"></span>Tags</th>
              <th><span data-feather="play-circle"></span>Account</th>
              <th><span data-feather="file"></span>Files</th>
              <th><span data-feather="hash"></span>Amount</th>
              <th><span data-feather="shield"></span>Type</th>
              <th><span data-feather="file-minus"></span>Organisation</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($wallets as $wallet)
                <tr>
                    <td>{{ $wallet->date }}</td>
                    <td>{{ $wallet->tags }}</td>
                    <td>{{ $wallet->banque}}</td>
                    <td>{{ $wallet->files }}</td>
                    <td>{{ $wallet->amount }}</td>
                    <td>{{ $wallet->type }}</td>
                    <td>{{ $wallet->company }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
