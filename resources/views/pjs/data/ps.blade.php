@if ($ps != null)
<tr>
    <td>{{ $ps->users->name }}</td>
    <td>{{ $ps->posisi }}</td>
    <td>{{ $ps->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $ps->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $ps->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Padang Sidimpuan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif