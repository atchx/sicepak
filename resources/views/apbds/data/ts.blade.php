@if ($ts != null)
<tr>
    <td>{{ $ts->users->name }}</td>
    <td>{{ $ts->posisi }}</td>
    <td>{{ $ts->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $ts->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $ts->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Tapanuli Selatan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif