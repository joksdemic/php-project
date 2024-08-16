@extends("layouts.javni")

@section("content")
    <div class="container-fluid d-flex flex-col">
        <div class="container-fluid">
            <h2>Vrste dokumenata</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Trajanje termina</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($vrste as $vrsta)
                <tr>
                    <th scope="row">{{$vrsta['id']}}</th>
                    <td>{{$vrsta['naziv']}}</td>
                    <td>{{$vrsta['trajanje']}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <div class="container-fluid">
        <h2>Trenutne prijave</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Prezime</th>
                    <th scope="col">Vrsta</th>
                    <th scope="col">Termin</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($prijave as $prijava)
                <tr>
                    <th scope="row">{{$prijava['id']}}</th>
                    <td>{{$prijava['ime']}}</td>
                    <td>{{$prijava['prezime']}}</td>
                    <td>{{$prijava->vrsta->naziv}}</td>
                    <td>{{$prijava['termin']}}</td>
                    <td>{{$prijava->status}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection