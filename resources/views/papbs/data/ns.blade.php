@if ($ns != null)
<tr>
    <td>{{ $ns->users->name }}</td>
    <td>{{ $ns->posisi }}</td>
    <td>{{ $ns->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $ns->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $ns->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Nias Selatan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif