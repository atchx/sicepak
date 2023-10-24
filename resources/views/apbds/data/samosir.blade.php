@if ($samosir != null)
<tr>
    <td>{{ $samosir->users->name }}</td>
    <td>{{ $samosir->posisi }}</td>
    <td>{{ $samosir->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $samosir->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $samosir->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Samosir</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif