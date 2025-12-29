`html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobs List</title>
  </head>
  <body>
     <h1>{{$title}}</h1>
    <ul>
      @foreach ($jobs as $job)
        <li>{{$job}}</li>
      @endforeach
    </ul>
    @if(!empty($jobs))
```php
  @if(!empty($jobs))
  <ul>
    @foreach($jobs as $job)
    <li>{{ $job }}</li>
    @endforeach
  </ul>
  @endif
```

```php
  @if(!empty($jobs))
  <ul>
    @foreach($jobs as $job)
    <li>{{ $job }}</li>
    @endforeach
  </ul>
  @else
  <p>No jobs available</p>
  @endif
```

```php
<ul>
  @forelse($jobs as $job)
    @if($job === 'Web Developer')
      @break
    @endif
    <li>{{ $job }}</li>
  @empty
    <li>No Jobs Found</li>
  @endforelse
</ul>
```

  </body>
</html>