@if ($pb != null)
<tr>
    <td>{{ $pb->users->name }}</td>
    <td>{{ $pb->posisi }}</td>
    <td>{{ $pb->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $pb->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $pb->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Pakpak Bharat</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif