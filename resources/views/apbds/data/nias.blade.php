@if ($nias != null)
<tr>
    <td>{{ $nias->users->name }}</td>
    <td>{{ $nias->posisi }}</td>
    <td>{{ $nias->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $nias->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $nias->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Nias</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif