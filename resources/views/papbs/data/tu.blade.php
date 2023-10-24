@if ($tu != null)
<tr>
    <td>{{ $tu->users->name }}</td>
    <td>{{ $tu->posisi }}</td>
    <td>{{ $tu->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $tu->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $tu->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Tapanuli Utara</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif