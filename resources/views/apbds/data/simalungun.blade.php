@if ($simalungun != null)
<tr>
    <td>{{ $simalungun->users->name }}</td>
    <td>{{ $simalungun->posisi }}</td>
    <td>{{ $simalungun->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $simalungun->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $simalungun->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Simalungun</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif