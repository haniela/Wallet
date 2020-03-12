<div>
<div class="row mb-4">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>

        <div class="col">
            <input class="form-control" wire:model="search" type="text" placeholder="Search...">
           {{--  <button wire:click="clear">Clear</button> --}}
            <hr>
        </div>
    </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th><a wire:click.prevent ="sortBy('date')" role="button" href="#"><span data-feather="calendar"></span>
                    Date
                    @include('includes._sort-icon', ['field' => 'date'])
                </a>
              </th>
              <th><a wire:click.prevent ="sortBy('tags')" role="button" href="#"><span data-feather="tag"></span>
                    Tags
                    @include('includes._sort-icon', ['field' => 'tags'])
                </a>
              </th>
              <th><a wire:click.prevent ="sortBy('bank_name')" role="button" href="#"><span data-feather="play-circle"></span>
                    Account
                    @include('includes._sort-icon', ['field' => 'bank_name'])
                </a>
              </th>
              <th><a wire:click.prevent ="sortBy('file')" role="button" href="#"><span data-feather="file"></span>
                    Files
                    @include('includes._sort-icon', ['field' => 'file'])
                </a>
              </th>
              <th><a wire:click.prevent ="sortBy('amount')" role="button" href="#"><span data-feather="hash"></span>
                    Amount
                    @include('includes._sort-icon', ['field' => 'amount'])
                </a>
              </th>
              <th><a wire:click.prevent ="sortBy('type')" role="button" href="#"><span data-feather="shield"></span>
                    Type
                    @include('includes._sort-icon', ['field' => 'type'])
                </a>
              </th>
              <th><a wire:click.prevent ="sortBy('company_name')" role="button" href="#"><span data-feather="file-minus"></span>
                    Organisation
                    @include('includes._sort-icon', ['field' => 'company_name'])
                </a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($wallets as $wallet)
                <tr>
                    <td>{{ $wallet->date }}</td>
                    <td>{{ $wallet->tags }}</td>
                    <td>{{ $wallet->banque->bank_name }}</td>
                    <td>{{ $wallet->file }}</td>
                    <td>{{ $wallet->amount }}</td>
                    <td>{{ $wallet->type }}</td>
                    <td>{{ $wallet->company->company_name }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class-="row">
        <div class="col">
            {{ $wallets->links() }}
        </div>
        <div class="col text-right text-muted">
           Affichage de {{ $wallets->firstItem() }} à {{ $wallets->lastItem() }} sur {{ $wallets->total() }} résultats
        </div>
      </div>
    </div>

</div>
