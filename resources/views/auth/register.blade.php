<x-main>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="name@example.com" value="{{ old('name') }}">
                                <label for="floatingInput">Name</label>
                                @error('name')
                                    {{ $message }}
                                @enderror
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email"
                                        value="{{ old('email') }}" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                    @error('email')
                                        {{ $message }}
                                    @enderror


                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="password"
                                        value="{{ old('passsword') }}" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        name="password_confirmation" placeholder="Confirmation Password"
                                        value="{{ old('passsword_confirmation') }}">
                                    <label for="floatingPassword">Confirm Password</label>
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Remember password
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                        type="submit">Register</button>
                                </div>
                                <hr class="my-4">
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
