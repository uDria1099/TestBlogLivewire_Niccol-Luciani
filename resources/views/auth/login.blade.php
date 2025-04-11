<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="text-center m-5">LOGGATI</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">INSERISCI EMAIL</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name='email'>
                    </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">INSERISCI PASSWORD</label>
                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password">
                        <div id="passwordMinLenght" class="form-text">minimo 8 caratteri</div>
                      </div>
                    <button type="submit" class="btn btn-primary">entra</button>
                  </form>
            </div>
        </div>
    </div>
    
</x-layout>