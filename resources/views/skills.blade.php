@foreach($res as $result)
<img src="{{Storage::get('public/storage/'$result, $result->name) }} "/>
@endforeach
