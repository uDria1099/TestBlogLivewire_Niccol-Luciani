
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="text-center m-5">REGISTRATI</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">INSERISCI EMAIL</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name='email'>
                      <div id="emailHelp" class="form-text">Con noi la tua mail è al sicuro!</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">INSERISCI NOME ACCOUNT</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name='name'>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">INSERISCI PASSWORD</label>
                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password">
                        <div id="passwordMinLenght" class="form-text">minimo 8 caratteri</div>
                      </div>
                    <div class="mb-3">
                      <label for="password-confirmation" class="form-label">CONFERMA PASSWORD</label>
                      <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">crea account</button>
                  </form>
            </div>
        </div>
    </div>
    
</x-layout>
