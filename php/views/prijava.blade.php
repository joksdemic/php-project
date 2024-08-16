@extends("layouts.javni")

@section("content")
    <form action="{{route('zakazi')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="input-ime" class="form-label">Ime</label>
            <input type="text" class="form-control" id="input-ime" name="ime">
        </div>
        <div class="mb-3">
            <label for="input-prezime" class="form-label">Prezime</label>
            <input type="text" class="form-control" id="input-prezime" name="prezime">
        </div>
        <div class="mb-3">
            <label for="input-jmbg" class="form-label">JMBG</label>
            <input type="text" class="form-control" id="input-jmbg" name="jmbg">
        </div>
        <div class="mb-3">
            <label for="input-prezime" class="form-label">Prezime</label>
            <select class="form-select" name="vrsta_id">
                @foreach ($vrste as $vrsta)
                    <option value="{{$vrsta->id}}">{{$vrsta->naziv}}</option> 
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="input-termin" class="form-label">Termin</label>
            <input type="datetime-local" class="form-control" id="input-termin" name="termin">
        </div>
        <button type="submit" class="btn btn-primary">Pošalji prijavu</button>
    </form>
@endsection