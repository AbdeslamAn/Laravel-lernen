@foreach ($jobs as $data)
   {{ $data['title'] }}:{{ $data['salary'] }}
@endforeach
  