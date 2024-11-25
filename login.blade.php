@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{ route('convert') }}">
        @csrf
        <input type="url" name="original_url" placeholder="Enter URL" required>
        <button type="submit">Convert</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Original URL</th>
                <th>Short URL</th>
                <th>Conversion Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($urls as $url)
            <tr>
                <td>{{ $url->original_url }}</td>
                <td><a href="{{ url($url->short_url) }}">{{ $url->short_url }}</a></td>
                <td>{{ $url->conversion_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
