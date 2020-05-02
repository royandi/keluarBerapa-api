<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/background.png') }}">

        <title>keluarBerapa-API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">keluarBerapa-API</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Home</a>
                <a class="nav-item nav-link active" href="#">Docs <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="https://github.com/abdurrahmanjaisy/keluarBerapa-api">Github</a>
                </div>
            </div>
        </nav>
        <div class="container mt-5" >
            <div class="row">
                <div class="col col-md-4 ">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active " id="v-pills-allpengeluaran-tab" data-toggle="pill" href="#v-pills-allpengeluaran" role="tab" aria-controls="v-pills-allpengeluaran" aria-selected="true">Melihat Semua Pengeluaran</a>
                        <a class="nav-link" id="v-pills-onepengeluaran-tab" data-toggle="pill" href="#v-pills-onepengeluaran" role="tab" aria-controls="v-pills-onepengeluaran" aria-selected="false">Melihat Satu Pengeluaran</a>
                        <a class="nav-link" id="v-pills-add-tab" data-toggle="pill" href="#v-pills-add" role="tab" aria-controls="v-pills-add" aria-selected="false">Menambah Pengeluaran</a>
                        <a class="nav-link" id="v-pills-update-tab" data-toggle="pill" href="#v-pills-update" role="tab" aria-controls="v-pills-update" aria-selected="false">Mengubah Pengeluaran</a>
                        <a class="nav-link" id="v-pills-delete-tab" data-toggle="pill" href="#v-pills-delete" role="tab" aria-controls="v-pills-delete" aria-selected="false">Menghapus Pengeluaran</a>
                    </div>
                </div>
                <div class="col col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-allpengeluaran" role="tabpanel" aria-labelledby="v-pills-allpengeluaran-tab">
                            <h3>Melihat Semua Pengeluaran</h3>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><span class="badge badge-success">GET</span></td>
                                        <td><pre>https://keluarberapa.herokuapp.com/api/pengeluaran</pre></td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <h5>Contoh Request</h5>
                            <hr>
                            <pre>https://keluarberapa.herokuapp.com/api/pengeluaran</pre><br>
                            <h5 data-toggle="collapse" href="#allCollapse" role="button" aria-expanded="true" aria-controls="allCollapse" title="Click for hide">Contoh Response</h5>
                            <hr>
                            <pre class="collapse show" id="allCollapse">
[
    {
        "id": 3,
        "name": "Converse CT Low BlackWhite",
        "description": "Sepatu lama udah rusak",
        "amount": 500000,
        "created_at": "2020-05-01T17:07:08.000000Z",
        "updated_at": "2020-05-01T17:07:08.000000Z"
    },
    {
        "id": 4,
        "name": "Backpack Eiger",
        "description": "Buat jalan-jalan",
        "amount": 800000,
        "created_at": "2020-05-01T17:07:55.000000Z",
        "updated_at": "2020-05-01T17:07:55.000000Z"
    },
    {
        "id": 1,
        "name": "Sepatu Nike Air Jordan",
        "description": "Buat basketan",
        "amount": 2000000,
        "created_at": "2020-05-01T17:05:09.000000Z",
        "updated_at": "2020-05-01T19:54:04.000000Z"
    },
    {
        "id": 6,
        "name": "Takjil",
        "description": "Buat buka",
        "amount": 50000,
        "created_at": "2020-05-02T12:42:33.000000Z",
        "updated_at": "2020-05-02T12:42:33.000000Z"
    }
    ]
                            </pre>
                        </div>
                        <div class="tab-pane fade" id="v-pills-onepengeluaran" role="tabpanel" aria-labelledby="v-pills-onepengeluaran-tab">
                            <h3>Melihat Satu Pengeluaran</h3>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><span class="badge badge-success">GET</span></td>
                                        <td><pre>https://keluarberapa.herokuapp.com/api/pengeluaran/{id}</pre></td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <h5>Contoh Request</h5>
                            <hr>
                            <pre>https://keluarberapa.herokuapp.com/api/pengeluaran/3</pre><br>
                            <h5 data-toggle="collapse" href="#oneCollapse" role="button" aria-expanded="true" aria-controls="oneCollapse" title="Click for hide">Contoh Response</h5>
                            <hr>
                            <pre class="collapse show" id="oneCollapse">
{
    "id": 3,
    "name": "Converse CT Low BlackWhite",
    "description": "Sepatu lama udah rusak",
    "amount": 500000,
    "created_at": "2020-05-01T17:07:08.000000Z",
    "updated_at": "2020-05-01T17:07:08.000000Z"
}
                            </pre>
                        </div>
                        <div class="tab-pane fade" id="v-pills-add" role="tabpanel" aria-labelledby="v-pills-add-tab">
                            <h3>Menambah Pengeluaran</h3>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><span class="badge badge-primary">POST</span></td>
                                        <td><pre>https://keluarberapa.herokuapp.com/api/pengeluaran</pre></td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <h5>Data yang dibutuhkan</h5>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Kolom</th>
                                        <th scope="col">Definisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">name</td>
                                        <td>nama barang atau kegiatan. <br>ex : sepatu, renang, dsb.</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">amount</td>
                                        <td>besar pengeluaran</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">description</td>
                                        <td>keterangan pengeluaran<br>ex : untuk kuliah, untuk hadia, dsb.</td>
                                    </tr>
                                </tbody>
                            </table><br>
                        </div>
                        <div class="tab-pane fade" id="v-pills-update" role="tabpanel" aria-labelledby="v-pills-update-tab">
                            <h3>Mengubah Pengeluaran</h3>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><span class="badge badge-warning">PUT</span></td>
                                        <td><pre>https://keluarberapa.herokuapp.com/api/pengeluaran/{id-pengeluaran-yang-akan-diubah}</pre></td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <h5>Data yang dibutuhkan</h5>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Kolom</th>
                                        <th scope="col">Definisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td scope="row">name</td>
                                        <td>nama barang atau kegiatan. <br>ex : sepatu, renang, dsb.</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">amount</td>
                                        <td>besar pengeluaran</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">description</td>
                                        <td>keterangan pengeluaran<br>ex : untuk kuliah, untuk hadia, dsb.</td>
                                    </tr>
                                </tbody>
                            </table><br>
                        </div>
                        <div class="tab-pane fade" id="v-pills-delete" role="tabpanel" aria-labelledby="v-pills-delete-tab">
                        <h3>Menghapus Pengeluaran</h3>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><span class="badge badge-danger">DELETE</span></td>
                                        <td><pre>https://keluarberapa.herokuapp.com/api/pengeluaran/{id-pengeluaran-yang-akan-dihapus}</pre></td>
                                    </tr>
                                </tbody>
                            </table><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>