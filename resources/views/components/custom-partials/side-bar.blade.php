<div {{$attributes->merge(['class' => 'bg-blue']) }}>
    This is side bar
    {{$title}}
    {{$slot}}
    <ul>
        <li>
            {{$first}}
        </li>
        <li>
            {{$second}}
        </li>
        @foreach ($items as $item)
            <li>
                {{$item}}
            </li>
        @endforeach
        @foreach ($anotherItems('ruby') as $item)
            <li>
                {{$item}}
            </li>
        @endforeach
    </ul>
</div>
