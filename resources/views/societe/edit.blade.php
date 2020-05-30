@extends ('layouts.app')

@section ('title','Edit Society')

@section ('content')
<fieldset>
<legend> Modifier cette Societe</legend>
<form action="{{ route('societe.update' , $societe->id)}}" method="post">
@csrf
@method('PATCH') 
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="societe_nom">Nom</label>
         <input type="text" name="societe_nom" value="{{ old('societe_nom') ?? $societe->societe_nom }}" id="societe_nom" class="form-control" placeholder="">
         @error('societe_nom')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="societe_adresse">Adresse</label>
         <input type="text" name="societe_adresse" value="{{ old('societe_adresse') ?? $societe->societe_adresse }}" id="societe_adresse" class="form-control" placeholder="">
         @error('societe_adresse')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="societe_email">Email</label>
         <input type="text" name="societe_email" value="{{ old('societe_email') ?? $societe->societe_email }}" id="societe_email" class="form-control" placeholder="">
         @error('societe_email')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="societe_tel">Telephone</label>
         <input type="number" name="societe_tel" value="{{ old('societe_tel') ?? $societe->societe_tel }}" id="societe_tel" class="form-control" placeholder="">
         @error('societe_tel')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="row">
    <button type ="submit" class="btn btn-outline-primary btn-block">Confirmer la Modification</button>
    </div>
</div>
</form>
</fieldset>
@endsection