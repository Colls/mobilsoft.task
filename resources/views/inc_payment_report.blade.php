<table class="table table-bordered table-condensed">
    <caption class="text-center">
        <h3>{{ $salary[0]->sec_name }}&nbsp;{{ $salary[0]->name }}&nbsp;{{ $salary[0]->th_name }}</h3>
        <h4>Должность:&nbsp;{{ $salary[0]->position }}</h4>
        <input name="subordination" type="checkbox" value="{{ $salary[0]->user_id }}">&nbsp;Отобразить подчинённых
    </caption>
    <tr>
        <th>Месяц</th>
        <th>Зарплата</th>
    </tr>
    @foreach($salary as $month)
        <tr>
            <td>{{ $month->title }}</td>
            <td>{{ $month->value }}</td>
        </tr>
    @endforeach
    <tr class="summary">
        <td>Средняя</td>
        <td>{{ $average }}</td>
    </tr>
</table>