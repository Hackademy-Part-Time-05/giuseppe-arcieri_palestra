<x-main>
    <div class="container border border-dark-subtle rounded-1 p-3 w-75 my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-3 text-uppercase">{{$detail['name']}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="{{$detail['img']}}" class="img-fluid w-100 my-3">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <strong>Earum aliquam aut repellat exercitationem</strong> ad amet pariatur impedit quidem quam nihil corporis, eveniet non beatae odit accusantium nobis, sapiente odio aperiam!
                    <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong> Distinctio exercitationem deserunt aperiam deleniti rerum harum id assumenda, rem voluptate. Ducimus <strong>maiores numquam perferendis</strong> amet veritatis quisquam minima quo optio repellat.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quidem cumque quo, ratione fuga nulla reiciendis vero sint, sit enim placeat fugiat dolore voluptas harum, laudantium eum consequatur facilis itaque!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">La tua Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Non condivideremo la tua email con nessuno</div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Il tuo messaggio...</label>
                      </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>
            </div>
        </div>
    </div>
</x-main>