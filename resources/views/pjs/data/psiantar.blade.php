@if ($psiantar != null)
<tr>
    <td>{{ $psiantar->users->name }}</td>
    <td>{{ $psiantar->posisi }}</td>
    <td>{{ $psiantar->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $psiantar->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $psiantar->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Pematang Siantar</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif