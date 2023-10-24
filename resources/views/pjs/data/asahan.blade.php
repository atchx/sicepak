@if ($asahan != null)
<tr>
    <td>{{ $asahan->users->name }}</td>
    <td>{{ $asahan->posisi }}</td>
    <td>{{ $asahan->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $asahan->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $asahan->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Asahan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif