@if ($toba!= null)
<tr>
    <td>{{ $toba->users->name }}</td>
    <td>{{ $toba->posisi }}</td>
    <td>{{ $toba->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $toba->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $toba->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Toba</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif