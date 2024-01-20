@foreach ($results as $result)

<div class="px-5 mt-5">
    <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
        <h3 class="font-semibold">{{$result->title}}</h3>
        <p>
            {{ $result->description }}
        </p>
    </div>
</div>

@endforeach

<div class="flex content-start px-5 mt-5">
    {{ $results->links('search-pagination') }}
</div>