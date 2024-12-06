<div>
    <h1> This is Header Component</h1>
    <h2>Wellcome to, {{$name}}</h2>
        <hr/>
    <h2>Danh sach fruits</h2>
    <ul>
        @foreach ($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>