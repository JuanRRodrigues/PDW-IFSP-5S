
<animals>
@foreach($registros as $animal)
    <animal>
        <id>{{ $animal->id }}</id>
        <name>{{ $animal->name }}</name>
        <species>{{ $animal->species }}</species>
        <age>{{ $animal->age }}</age>
        <color>{{ $animal->color }}</color>
        <is_adopted>{{ $animal->is_adopted ? 'true' : 'false' }}</is_adopted>
        <date_of_birth>{{ $animal->date_of_birth }}</date_of_birth>
    </animal>
@endforeach
</animals>
