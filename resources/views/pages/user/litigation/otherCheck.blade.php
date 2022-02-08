@extends('layouts.app')

@section('title')
    Other Input
@endsection

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/litigation/otherLR" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h1>Other Case</h1>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="col-lg-6">
        <div class="row">
            <label class="col-sm-4 col-form-label my-2">Nomor Kasus</label>
            <div class="col-sm-7 my-2">
            <input type="text" class="form-control" name="no_kasus" />
            </div>
            <label class="col-sm-4 col-form-label my-2">Tanggal</label>
            <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="tanggal" />
            </div>
        </div>
        <div class="row">
            <label class="col-sm-4 col-form-label my-2">Nama Pihak</label>
            <div class="col-sm-7 my-2">
            <input type="text" class="form-control" name="nama_pihak" />
            </div>
            <label class="col-sm-4 col-form-label my-2"
            >Unit/Departemen/Divisi</label
            >
            <div class="col-sm-7 my-2">
            <input type="text" class="form-control" name="unit" />
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-4 col-form-label my-2">Nomor Dokumen</label>
            <div class="col-sm-7 my-2">
            <input type="text" class="form-control" name="no_dokumen" />
            </div>
            <label class="col-sm-4 col-form-label my-2"
            >Nilai Kerugian/Perkara</label
            >
            <div class="col-sm-7 my-2">
            <input type="number" class="form-control" name="nilai_kerugian" />
            </div>
        </div>
        </div>
        <div class="ms-3 col-lg-6">
            <div class="row">
                <div class="col-sm-12 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-12 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-12 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-12 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-12 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-12 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-lg-12">
        <p>Kronologis Singkat Kejadian :</p>
        <div id="editor">
           <textarea
            name="kronologi"
            id="editor">
              <p></p>
            </textarea>
        </div>
        </div>
    </div>
    <div class="d-flex justify-content-start mt-4">
        <div class="col-sm-2 my-2">
        <label for="">Bukti</label>
        </div>
        <div class="col-lg-6">
        <div class="mb-3 row">
            <label class="col-sm-4 col-form-label my-2"> Dokumen</label>
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="dokumen" />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
            <label class="col-sm-4 col-form-label my-2">Bukti 1</label>
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="bukti1" />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
            <label class="col-sm-4 col-form-label my-2">Bukti 2</label>
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="bukti2" />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
            <label class="col-sm-4 col-form-label my-2">Bukti 3</label>
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="bukti3" />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
        </div>
        </div>
        <div class="col-lg-4 ms-3">
            <div class="mb-3 row">
                <div class="col-sm-4 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="" placeholder="Reason if Rejected" readonly/>
                </div>
                <div class="col-sm-4 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="" placeholder="Reason if Rejected" readonly/>
                </div>
                <div class="col-sm-4 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="" placeholder="Reason if Rejected" readonly/>
                </div>
                <div class="col-sm-4 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="" placeholder="Reason if Rejected" readonly/>
                </div>

            </div>
            </div>
    </div>
    <div class="d-flex justify-content-start">
        <div class="col-lg-6">
        <div class="mb-3 row">
            <label class="col-sm-4 col-form-label my-2">Disposisi</label>
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="disposisi" />
            </div>
            <div class="col-sm-1 my-2">
                    <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
                </div>
            <label class="col-sm-4 col-form-label my-2"
            >Dokumen Lainnya</label
            >
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="dokumen_lainnya" />
            </div>
            <div class="col-sm-1 my-2">
                    <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
                </div>
        </div>
        </div>
        <div class="col-lg-6 ms-3">
            <div class="mb-3 row">
                <div class="col-sm-4 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="" placeholder="Reason if Rejected" readonly/>
                </div>
                <div class="col-sm-4 my-2">
                    <button disabled="disabled" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                    </button>
                    <button disabled="disabled" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="" placeholder="Reason if Rejected" readonly/>
                </div>

            </div>
            </div>
    </div>
        <div class="d-flex justify-content-start">
            <div class="col-lg-6">
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label my-2">Regulation</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control my-2" name="regulasi" readonly />
                </div>
                <label class="col-sm-4 col-form-label my-2"
                >Suggestion</label
                >
                <div class="col-sm-7">
                    <input type="text" class="form-control my-2" name="sugesti" readonly/>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
        <div class="d-flex justify-content-end mb-5">
            <div class="col-lg-3">

                <button class="btn btn-danger" type="submit">Return</button>
                <button class="btn btn-primary">Process</button>
            </div>
        </div>
    </div>
</form>
@endsection
