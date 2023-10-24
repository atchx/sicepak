@if ($binjai != null)
<tr>
    <td>{{ $binjai->users->name }}</td>
    <td>{{ $binjai->posisi }}</td>
    <td>{{ $binjai->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $binjai->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $binjai->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Binjai</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif