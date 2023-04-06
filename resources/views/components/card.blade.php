  <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-center">
    <img src="{{$item['img']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-uppercase display-6">{{$item['name']}}</h5>
      <p class="card-text">{{$item['desc']}}</p>
      <a href="{{route('detail',['id'=>$item['id']])}}" class="btn btn-primary">Vedi dettagli</a>
    </div>
  </div>