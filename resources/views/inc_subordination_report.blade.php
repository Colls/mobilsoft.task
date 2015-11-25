<table class="table table-bordered table-condensed">
    <caption class="text-center">
        <h3>Подчинённые</h3>
    </caption>
    <tr>
        <th>ФИО сотрудника</th>
        <th>Должность сотрудника</th>
        <th>Отдел</th>
    </tr>
    @foreach($people as $man)
    <tr>
        <td>{{ $man->sec_name }}&nbsp;{{ $man->name }}&nbsp;{{ $man->th_name }}</td>
        <td>{{ $man->position }}</td>
        <td>{{ $man->title }}</td>
    </tr>
    @endforeach
</table>