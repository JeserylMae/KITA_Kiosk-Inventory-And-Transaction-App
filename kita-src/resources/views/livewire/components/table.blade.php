<table class="w-full border-none">
    <thead>
        <tr class="bg-[var(--color-background)]">
            @if ($checkbox) 
                <th class="min-w-1"> </th>
            @endif

            @foreach ($headers as $header)
                <th> {{ $header }} </th>
            @endforeach
        </tr>
    </thead>

    <tbody>
        @forelse ($rows as $row)
            <tr>
                @if ($checkbox)
                    @php $cbid = uniqid("", true); @endphp
                    <td> <x-checkbox id="{{ $cbid }}"/> </td>
                @endif

                @foreach($row as $col)
                    <td> {{ $col }} </td>
                @endforeach
            </tr>
        @empty
            <tr><td colspan="{{ count($headers)+1 }}" class="text-center py-20"> {{ $empty }} </td></tr>
        @endforelse
    </tbody>
</table>