<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Editar" :user="$user">
    
<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/treino/edit.css')}}">
</head>



<h2> Editar Treino </h2>
<hr>

<div class="container">
    <form action="{{route('treino.update', $treino->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="fonte">
        <div class="column1">
            <label for="init_date"> Data de início </label> <br>
            <input type="date" value="{{$treino->init_date}}" name="init_date" id="init_date"> <br>

            <label for="end_date"> Data de término </label> <br>
            <input type="date" value="{{$treino->end_date}}" name="end_date" id="end_date"> <br>
        </div>

        <div class="column2">
            <label for="name"> Nome </label> <br>
            <input type="text" value="{{$treino->name}}" name="name" id="name"> <br>

            <label for="description"> Descrição </label> <br>
            <input type="text" value="{{$treino->description}}" name="description" id="description"> <br>
            
            <input type="hidden" value="{{$treino->id_aluno}}" name="id_aluno" id="id_aluno"> <br>
        </div>
            <button type="submit"> Atualizar </button>
        </div>
    </form>

</div>

</x-layout>