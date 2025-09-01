<table class="w-full border-none">
    <thead>
        <tr class="bg-[var(--color-background)]">
            <th class="min-w-1"> </th>
            @foreach ($headers as $header)
                <th> {{ $header }} </th>
            @endforeach
        </tr>
    </thead>

    <tbody>
        @forelse ($rows as $row)
            <tr class="">
                @php $cbid = uniqid("", true); @endphp

                <td> <input type="checkbox" class="checkbox" name="{{ $cbid }}" id="{{ $cbid }}"></td>
                
                @foreach($row as $col)
                    <td> {{ $col }} </td>
                @endforeach
            </tr>
        @empty
            <tr><td colspan="{{ count($headers) }}" class="text-center py-20"> {{ $empty }} </td></tr>
        @endforelse
    </tbody>
</table>