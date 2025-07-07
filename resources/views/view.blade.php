<div>
    @foreach ($items as $item)
        <ul>
            <li>{{ $item['nama'] }}</li>
            <li>{{ $item['artikel'] }}</li>
        </ul>
    @endforeach
</div>