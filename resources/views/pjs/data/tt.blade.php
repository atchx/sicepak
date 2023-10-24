@if ($tt != null)
<tr>
    <td>{{ $tt->users->name }}</td>
    <td>{{ $tt->posisi }}</td>
    <td>{{ $tt->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $tt->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $tt->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Tapanuli Tengah</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif