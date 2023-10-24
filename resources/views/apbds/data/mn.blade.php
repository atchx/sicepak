@if ($mn != null)
<tr>
    <td>{{ $mn->users->name }}</td>
    <td>{{ $mn->posisi }}</td>
    <td>{{ $mn->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $mn->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $mn->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Mandailing Natal</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif