{{-- Usage --}}
{{-- 
@include('components.table', [
    'headers' => ['First', 'Last', 'Handle'],
    'fields' => ['name', 'email', 'city'],
    'collection' => $users,
    'noRows' => 'No users available',
    'actions' => function ($item) {
        return view('components.tables.table-actions', compact('item'))->render();
    },
])
--}}

<table class="table table-striped">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th scope="col">{{ $header }}</th>
            @endforeach

            @if (!empty($actions))
                <th scope="col">Actions</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @forelse ($collection as $item)
            <tr>
                @foreach ($fields as $field)
                    <td>{{ uc_first_only(data_get($item, $field)) }}</td>
                @endforeach

                @if (!empty($actions))
                    <td>
                        {{-- Render actions closure --}}
                        {!! $actions($item) !!}
                    </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="{{ count($fields) + (!empty($actions) ? 1 : 0) }}" class="text-center text-muted">
                    {{ $noRows ?? 'No Records Found' }}
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
