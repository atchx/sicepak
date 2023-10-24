@if ($bb != null)
<tr>
    <td>{{ $bb->users->name }}</td>
    <td>{{ $bb->posisi }}</td>
    <td>{{ $bb->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $bb->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $bb->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Batu Bara</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif