<x-app-layouts title="Dashboard">
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-muted">Info</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ auth()->user()->foto == 'default.png' ? auth()->user()->pictureDefault : auth()->user()->picture }}"
                            alt="{{ auth()->user()->nama }}" style="width: 10em" class="img-fluid rounded mb-3">
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-center">
                                <h6 class="mb-1">Layanan Fakultas Sains dan Teknologi</h6>
                            </div>
                        </a>
                        <a href="https://layanan-fst.uinjakarta.id/login" target="_blank" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-1"><img width="90" height="36" alt="GitHub Logomark" class="height-auto" src="{{ asset('assets/images/Logo_FST.png') }}"></h6>
                                <h6 class="mb-1">Layanan FST</h6>
                            </div>
                        </a>
                        <a href="https://e-letter.fst.uinjkt.ac.id/" target="_blank" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-1"><img width="90" height="36" alt="GitHub Logomark" class="height-auto" src="{{ asset('assets/images/Logo_FST.png') }}"></h6>
                                <h6 class="mb-1 mt-2">E-Letter FST</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-muted">Profile</h6>
                </div>
                <div class="card-body">
                    <x-alert />

                    <div class="table-responsive">
                        <form action="{{ route('dashboard.dosen_updateProfile') }}" method="post">
                            @csrf
                            <table class="table">
                                <tr>
                                    <td style="width: 150px !important">NIP</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->nip }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>
                                        {{ auth()->user()->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password saat ini</td>
                                    <td>:</td>
                                    <td>
                                        <input type="password" name="password_saat_ini"
                                            class="form-control @error('password_saat_ini') is-invalid @enderror"
                                            placeholder="masukan password saat ini" required>
                                        @error('password_saat_ini')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password Baru</td>
                                    <td>:</td>
                                    <td>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="masukan password baru" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Konfirmasi Password Baru</td>
                                    <td>:</td>
                                    <td>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="konfirmasi password baru"
                                            autocomplete="new-password" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Mengajar</td>
                                    <td>:</td>
                                    <td>

                                        <ul class="list-group">
                                            @foreach (auth()->user()->kelas as $mengajar)
                                            <li class="list-group-item">
                                                {{ $mengajar->kd_kelas }} - {{
                                                auth()->user()->matkuls->find($mengajar->pivot->matkul_id)->nm_matkul ??
                                                '' }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layouts>