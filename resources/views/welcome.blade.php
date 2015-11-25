@extends('layout.layout1')
@section('css')

@stop

@section('content')
<div id="choose">
    <div class="form-group">
        <label for="select_employee">Выберите сотрудника</label>
        <select id="select_employee">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->sec_name . ' ' . $user->name . ' ' . $user->th_name}} </option>
            @endforeach
        </select>
        <button id="clean-button">Очистить</button>
    </div>
</div>
<div id="select_result" hidden="hidden"></div>
<div id="checkbox_result" hidden="hidden"></div>
@stop

@section('js')
{!! Html::script('js/AJAXgetInfo.js') !!}
@stop