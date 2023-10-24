@if ($pl != null)
<tr>
    <td>{{ $pl->users->name }}</td>
    <td>{{ $pl->posisi }}</td>
    <td>{{ $pl->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $pl->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $pl->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Padang Lawas</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif