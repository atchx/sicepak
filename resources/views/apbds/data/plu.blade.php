@if ($plu != null)
<tr>
    <td>{{ $plu->users->name }}</td>
    <td>{{ $plu->posisi }}</td>
    <td>{{ $plu->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $plu->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $plu->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Padang Lawas Utara</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif