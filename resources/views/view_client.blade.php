<h1>Client's Details</h1>
{!! Form::open(array('url' => '/editServer','method' => 'POST'))!!}
    <h3>Client'name : {{$client->Client_name}}</h3>
    <h3>Client'email : {{$client->Client_mail}}</h3>
    <h3>Client'description : {{$client->Client_description}}
    <h3>Client servers : 
        <select name="server" class="form-control">
            @foreach($array as $server)
                <option value="{{ $server->id }}">{{ $server->Server_name }}</option>
            @endforeach  
        </select>
        {{Form::submit('Edit Server')}}
    </h3>
    {!! Form::close() !!}
    {!! Form::open(array('url' => '/NewServer','method' => 'POST'))!!}
    <h3>{{Form::submit('New Server')}}</h3>
    <input type="hidden" value="{{$client->id}}" name="id">
    {!! Form::close() !!}
    {!! Form::open(array('url' => '/editServer','method' => 'POST'))!!}
    <h3>{{Form::submit('New Template')}}</h3>
{!! Form::close() !!}


