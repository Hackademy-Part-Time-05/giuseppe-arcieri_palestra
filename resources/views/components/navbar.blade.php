<section>
  <div class="nv flexbox space-between">
    <div class="nv-brand">
      <x-nvlogo :$logo/>
    </div>
    <div class="nv-links">
      <ul class="flexbox space-between">
      @foreach($navbar as $item)
        <x-nvlink :$item />
      @endforeach
      </ul>
    </div>
  </div>
</section>