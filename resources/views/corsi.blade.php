<x-main>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
             @foreach ($array as $item)
                <div class="col-12 col-md-4">
                    <x-card :$item/>
                </div>
            @endforeach
        </div>
    </div>
</x-main>