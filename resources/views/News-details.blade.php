@extends('layouts/layout')

@section('content')

<div style="overflow: hidden;">
   <div style="float:left; width: 50%;">
      <img style="width: 100%;padding: 2% 10% 20% 40%;" src="{{ asset('storage/'.$actualite->image) }}">
   </div>
   <div style="float: left; width: 50%;">
      <h3>{{ $actualite->titre }}</h3>
        <br>
      <div style="padding-right: 40%;font-size:large;text-align:justify">
      {{$actualite->description}}... <br><br>
      <p>Les opérateurs de production et les ouvriers seront plus demandés par les industries visées. Il existe cependant un besoin exprimé par les sociétés interrogées dans le cadre de cette étude, moins important que le précédent, en cadres techniques et techniciens. Concernant le personnel support, il reste minime.
Quant au secteur du tourisme, hôtellerie et restauration, les besoins identifiés à l'horizon 2013 s'établissent à 280 opportunités d'insertion dont 156 dans les métiers de la restauration. Le reste étant ventilé comme suit : 57 postes destinés au personnel de support, 46 recrutements identifiés pour les métiers de l'hôtellerie et seulement 21 emplois à créer dans les métiers du tourisme.</p>
      </div>
   </div>
</div>

@endsection