<div class="container py-5">
    <div class="card p-8 position-absolute top-50 start-50 translate-middle" style="width: 18rem">
        <div class="row justify-content-center">
            <div class="card-header">
                <i class="bi bi-shop"> Login Loja Construção</i>
            </div>
            <div class="col-md-5">

                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form wire:submit="entrar">


                    <div class="mb-3">
                        <label class="form-label">E-mail</label>

                        <input type="email" class="form-control" wire:model="email">

                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Senha</label>

                        <input type="password" class="form-control" wire:model="password">

                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100" type="submit">
                        Entrar
                    </button>

                </form>
            </div>
        </div>
    </div>

</div>