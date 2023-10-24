@if ($medan != null)
<tr>
    <td>{{ $medan->users->name }}</td>
    <td>{{ $medan->posisi }}</td>
    <td>{{ $medan->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $medan->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $medan->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Medan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif