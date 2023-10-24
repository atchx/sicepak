@if ($hh != null)
<tr>
    <td>{{ $hh->users->name }}</td>
    <td>{{ $hh->posisi }}</td>
    <td>{{ $hh->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $hh->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $hh->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Humbang Hasundutan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif