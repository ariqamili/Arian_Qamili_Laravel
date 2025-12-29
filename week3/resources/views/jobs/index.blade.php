<!DOCTYPE html>
<html>
<head>
    <title>Jobs List</title>
</head>

<body>
<h1>{{$title}}</h1>

<ul>
    @forelse($jobs as $job)
        <li>{{ $job }}</li>
    @empty
        <li>No Jobs Found</li>
    @endforelse
</ul>

{{--@if(!empty($jobs))--}}
{{--    <ul>--}}
{{--        @foreach($jobs as $job)--}}
{{--            <li>{{ $job }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@else--}}
{{--    <p>No jobs available</p>--}}
{{--@endif--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        <li>{{ $job }}</li>--}}

{{--    @if($job === 'Web Developer')--}}
{{--            @break--}}
{{--        @endif--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        @if($job === 'Web Developer')--}}
{{--            @continue--}}
{{--        @endif--}}
{{--        <li>{{ $job }}</li>--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        <li>{{ $loop->index }} - {{ $job }}</li>--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        <li>{{ $loop->iteration }} - {{ $job }}</li>--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        <li>{{ $loop->remaining }} - {{ $job }}</li>--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        <li>{{ $loop->count }} - {{ $job }}</li>--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        @if($loop->first)--}}
{{--            <li>First: {{ $job }}</li>--}}
{{--        @else--}}
{{--            <li>{{ $job }}</li>--}}
{{--        @endif--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        @if($loop->last)--}}
{{--            <li>Last: {{ $job }}</li>--}}
{{--        @else--}}
{{--            <li>{{ $job }}</li>--}}
{{--        @endif--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        @if($loop->even)--}}
{{--            <li>Even: {{ $job }}</li>--}}
{{--        @else--}}
{{--            <li>{{ $job }}</li>--}}
{{--        @endif--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @forelse($jobs as $job)--}}
{{--        @if($loop->odd)--}}
{{--            <li>Odd: {{ $job }}</li>--}}
{{--        @else--}}
{{--            <li>{{ $job }}</li>--}}
{{--        @endif--}}
{{--    @empty--}}
{{--        <li>No Jobs Found</li>--}}
{{--    @endforelse--}}
{{--</ul>--}}

</body>
</html>
