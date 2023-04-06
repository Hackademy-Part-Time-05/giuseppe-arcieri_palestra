<x-main>
    <div class="container">
        <div class="row">
             @foreach ($array as $item)
                <div class="col-12 col-md-6 my-5">
                    <x-card :$item/>
                </div>
            @endforeach
        </div>
    </div>
</x-main>