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
                    <h6 class="text-muted">Information</h6>
                </div>
                <div class="card-body" style="background-color: #ffffff">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card" style="cursor: pointer">
                                <div class="card-body" style="background-color: #12b51a">
                                    <div class="text-center">
                                        <i class="fa fa-user-graduate fa-3x" style="color: #ffffff"></i>
                                        <div class="mt-3 font-weight-bold">
                                            <h5 style="color: #ffffff">Mahasiswa</h5>
                                        </div>
                                        <div class="text-small text-muted" style="color: #ffffff">
                                            <span class="text-primary">
                                                <i class="fas fa-caret-up"></i>
                                            </span>
                                            <h5 style="color:#ffffff">
                                                {{ $mahasiswas }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card" style="cursor: pointer">
                                <div class="card-body" style="background-color: #d52020">
                                    <div class="text-center">
                                        <i class="fa fa-user fa-3x" style="color: #ffffff"></i>
                                        <div class="mt-3 font-weight-bold">
                                            <h5 style="color: #ffffff">Dosen</h5>
                                        </div>
                                        <div class="text-small text-muted">
                                            <span class="text-primary">
                                                <i class="fas fa-caret-up"></i>
                                            </span>
                                            <h5 style="color: #ffffff">
                                                {{ $dosens }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card" style="cursor: pointer">
                                <div class="card-body" style="background-color: #271db8">
                                    <div class="text-center">
                                        <i class="fa fa-layer-group fa-3x" style="color: #ffffff"></i>
                                        <div class="mt-3 font-weight-bold">
                                            <h5 style="color: #ffffff">Kelas</h5>
                                        </div>
                                        <div class="text-small text-muted">
                                            <span class="text-primary">
                                                <i class="fas fa-caret-up"></i>
                                            </span>
                                            <h5 style="color: #ffffff">
                                                {{ $kelas }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card" style="cursor: pointer">
                                <div class="card-body" style="background-color: #9e2296">
                                    <div class="text-center">
                                        <i class="fa fa-book-open fa-3x" style="color: #ffffff"></i>
                                        <div class="mt-3 font-weight-bold">
                                            <h5 style="color: #ffffff">Matakuliah</h5>
                                        </div>
                                        <div class="text-small text-muted">
                                            <span class="text-primary">
                                                <i class="fas fa-caret-up"></i>
                                            </span>
                                            <h5 style="color: #ffffff">
                                                {{ $matkuls }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card" style="cursor: pointer">
                                <div class="card-body" style="background-color: #b9651b">
                                    <div class="text-center">
                                        <i class="fa fa-briefcase fa-3x" style="color: #ffffff"></i>
                                        <div class="mt-3 font-weight-bold">
                                            <h5 style="color: #ffffff">Fakultas</h5>
                                        </div>
                                        <div class="text-small text-muted">
                                            <span class="text-primary">
                                                <i class="fas fa-caret-up"></i>
                                            </span>
                                            <h5 style="color: #ffffff">
                                                {{ $fakultas }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card" style="cursor: pointer">
                                <div class="card-body" style="background-color: #303030">
                                    <div class="text-center">
                                        <i class="fa fa-calendar fa-3x" style="color: #ffffff"></i>
                                        <div class="mt-3 font-weight-bold">
                                            <h5 style="color: #ffffff">Jadwal</h5>
                                        </div>
                                        <div class="text-small text-muted">
                                            <span class="text-primary">
                                                <i class="fas fa-caret-up"></i>
                                            </span>
                                            <h5 style="color: #ffffff">
                                                {{ $jadwals }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layouts>