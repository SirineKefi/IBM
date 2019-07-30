@extends('layout.head')
 <h1>  New Client</h1>
    {!! Form::open(array('url' => '/actioncreate','method' => 'POST'))!!}
    <table>
                <tr>
                    <td>
                    {{ Form::label("Name", null, ['class' => 'control-label']) }}
                    </td>
                    <td>
                    {{Form::text("Client_name", 
                    old("Client_name") ? old("Client_name") : (!empty($client) ? $client->Client_name : null), [
                    "class" => "form-group user-email", "placeholder" => "Client's name", 
                     ])}}
                       
                    </td>
                </tr>
                <tr>
                    <td>
                    {{ Form::label("Description", null, ['class' => 'control-label']) }}
                    </td>
                    <td>
                    {{Form::textarea('Client_description', old("Client_description") ? old("Client_description") : (!empty($client) ? $client->Client_description : null), 
                         [  "class" => "form-group",  "placeholder" => "Enter some details ..."])}}
                    </td>
                </tr>
                <tr>
                    <td>
                    {{ Form::label("Email", null, ['class' => 'control-label']) }}
                    </td>
                    <td>
                    {{Form::text("Client_mail", 
                    old("Client_mail") ? old("Client_mail") : (!empty($Client) ? $client->Client_mail: null), [
                    "class" => "form-group user-email", "placeholder" => "@exemple.com", 
                     ])}}
                    </td>
                </tr>
                <tr>
                    <td>
                         {{ Form::label("Adress", null, ['class' => 'control-label']) }}
                    </td>
                    <td>
                         {{Form::text("Client_adresse", 
                        old("Client_adresse") ? old("Client_adresse") : (!empty($client) ? $client->Client_adresse: null), [
                        "class" => "form-group user-adress", "placeholder" => "Enter your adress", 
                         ])}}
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                         {{ Form::label("Server's number", null, ['class' => 'control-label']) }}
                    </td>
                    <td>
                         <select name="Client_servers_nbr" class="form-control">
                            @for ($i =0; $i <=100; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor  
                         </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                      
                    </td>
                    <td>
                         
                         {{Form::submit('Create')}}
                    </td>
                </tr>
                </table>

    {!! Form::close() !!}
