@props(['row'])

<tr>
    <td>{{ $row->firstname }}</td>
    <td>{{ $row->middlename }}</td>
    <td>{{ $row->lastname }}</td>
    <td>{{ $row->address }}</td>
    <td>{{ $row->age }}</td>
</tr>