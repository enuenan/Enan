@foreach ($companies as $company)
    <!-- timeline item {{ $loop->iteration }} -->
    <x-company.card side='{{ $loop->odd ? 'right' : 'left' }}' active='{{ $loop->first ? 'true' : 'false' }}' />
@endforeach
