<form action="/admin/removercurador" method="post">
    @csrf
    <select name="curador">
        <option value="" selected=""> - Selecione  -</option>
        @foreach ($curadores as $curador)
            <option value="{{$curador->codpes}}">
                {{$curador->codpes}}
            </option> 
        @endforeach
    </select>

    <select name="role">
        <option value="" selected=""> - Selecione  -</option>
        @foreach ($roles as $role)
            <option value="{{$role}}">
                {{$role}}
            </option> 
        @endforeach
    </select>

    <input type="hidden" name="homenageado_id" value="{{$homenageado_id}}">
    
    <button type="submit">Enviar</button>
</form>