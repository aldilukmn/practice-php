<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-column vh-100">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="flex-grow-1">
            <div class="w-75 m-auto mt-5 mb-5">
                <div class="border border-black">
                    <h4 class="text-center py-3">Tulis Nama</h4>
                </div>
                <div class="border border-dark border-top-0 p-5">
                    <div class="d-flex">
                        <div class="row m-0 w-100 gap-2">
                            <h6 class="col-sm-2 bg-success text-white text-center py-2">Tambah</h6>
                            <h6 class="col-sm-2 bg-warning text-white text-center py-2">Ubah</h6>
                            <h6 class="col-sm-2 bg-danger text-white text-center py-2">Hapus</h6>
                        </div>
                    </div>
                    <div class="border bg-light w-100">
                        <div class="w-100 p-3 mb-5">
                            <div class="border border-dark border-bottom-0">
                                <h6 class="m-0 py-2 text-center bg-white">Data Jadwal</h6>
                            </div>
                            <div class="d-flex w-100 text-center">
                                <div class="col border border-dark border-end-0 py-1">Hari & Jam</div>
                                <div class="col border border-dark py-1">Poli Klinik</div>
                                <div class="col border border-dark border-start-0 py-1">Dokter</div>
                            </div>
                            <div class="d-flex w-100 text-center">
                                <div class="col border border-dark border-end-0 border-top-0 py-1">...</div>
                                <div class="col border border-dark border-top-0 py-1">...</div>
                                <div class="col border border-dark border-start-0 border-top-0 py-1">...</div>
                            </div>
                            <div class="d-flex w-100 text-center">
                                <div class="col border border-dark border-end-0 border-top-0 py-1">...</div>
                                <div class="col border border-dark border-top-0 py-1">...</div>
                                <div class="col border border-dark border-start-0 border-top-0 py-1">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-50 m-auto mb-5">
                <div class="border border-dark p-3">
                    <div class="border border-dark mb-4">
                        <h6 class="m-0 py-3 text-center">Input Jadwal Dokter</h6>
                    </div>
                    <div class="d-lg-flex gap-3 flex-lg-row">
                        <div class="col mb-3">
                            <h6 class="border border-dark text-center py-1 mb-3 bg-warning">Hari</h6>
                            <div class="border border-dark">
                                <p class="border-top-0 border-start-0 border-end-0 text-center border border-dark m-0">List Item dengan Pencarian</p>
                                <p class="m-0 text-center">Senin</p>
                                <p class="m-0 text-center">...</p>
                                <p class="m-0 text-center">Sabtu</p>
                            </div>
                            <h6 class="border border-dark text-center py-1 mt-5 bg-warning">Jam Mulai</h6>
                        </div>
                        <div class="col mb-3">
                            <h6 class="border border-dark text-center py-1 mb-3 bg-warning">Poli Klinik</h6>
                            <div class="border border-dark">
                                <p class="border-top-0 border-start-0 border-end-0 text-center border border-dark m-0">List Item dengan Pencarian</p>
                                <p class="m-0 text-center">Klinik Dalam</p>
                                <p class="m-0 text-center">Klinik Jantung</p>
                                <p class="m-0 text-center">Klinik Mata</p>
                            </div>
                            <h6 class="border border-dark text-center py-1 mt-5 bg-warning">Jam Selesai</h6>
                        </div>
                        <div class="col mb-3">
                            <h6 class="border border-dark text-center py-1 mb-3 bg-warning">Dokter</h6>
                            <div class="border border-dark">
                                <p class="border-top-0 border-start-0 border-end-0 text-center border border-dark m-0">List Item dengan Pencarian</p>
                                <p class="m-0 text-center">Dokter A</p>
                                <p class="m-0 text-center">Dokter B</p>
                                <p class="m-0 text-center">Dokter Z</p>
                            </div>
                            <h6 class="border border-dark text-center py-1 mt-5 bg-primary">Simpan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bg-dark text-white text-center py-3">
            <h6>Footer</h6>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>