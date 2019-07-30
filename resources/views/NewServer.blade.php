<h1>New Server</h1>
{!! Form::open(array('url' => '/createServer','method' => 'POST'))!!}
<table>
<tr>
<td>
Client's name : {{$client->Client_name}}
<input type="hidden" value="{{$client->id}}" name="id">
</td>
</tr>
<tr>
                    <td>
                    {{ Form::label("Name", null, ['class' => 'control-label']) }}
                    </td>
                    <td>
                    {{Form::text("Server_name", 
                    old("Server_name") ? old("Server_name") : (!empty($server) ? $server->Server_name : null), [
                    "class" => "form-group user-email", "placeholder" => "Server's name", 
                     ])}}
                       
                    </td>
                </tr>
                <tr>
        <td>
            {{ Form::label("Server's Description", null, ['class' => 'control-label']) }}
        </td>
        <td>
            {{Form::textarea('Server_description', old("Server_description") ? old("Server_description") : (!empty($server) ? $server->Server_description : null), 
                         [  "class" => "form-group",  "placeholder" => "Enter some details ..."])}}
        </td>
        <tr>
        <tr>
        <td>Server's type : </td>
        <td>
        <select name="Server_type" class="form-control">
                <option name="Server_type" value="type1">type1</option>
                <option name="Server_type" value="type2">type2</option>
                <option name="Server_type" value="type3">type3</option>
                <option name="Server_type" value="type4">type4</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>
        {{ Form::label("LPAR's prefix", null, ['class' => 'control-label']) }}
        </td>
        <td>   
        {{Form::text("LPAR_prefix", 
                    old("LPAR_prefix") ? old("LPAR_prefix") : (!empty($server) ? $server->LPAR_prefix: null), [
                    "class" => "form-group user-email", "placeholder" => "Enter LPAR's prefix..", 
                     ])}}
            </td>
              
    </tr>
    <tr>
    <td>
            {{Form::submit('Save')}}
            </td>
    </tr>
    
</table>
{!! Form::close() !!}