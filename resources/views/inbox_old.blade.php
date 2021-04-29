@foreach ( $messages as $item )
{{--<p>{{$item->getDate()}}, {{$item->getSubject()}}, {{$item->getFromName()}}, {{$item->getFromEmail()}}, {{$item->hasAttachments()}}</p>--}}

<h1 style="text-align: center;">{{$item->getSubject()}}</h1>
<br>
<p>{!!$item->getHtmlBody()!!}</p>

@endforeach

