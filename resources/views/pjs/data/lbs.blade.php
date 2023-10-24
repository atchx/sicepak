@if ($lbs != null)
<tr>
    <td>{{ $lbs->users->name }}</td>
    <td>{{ $lbs->posisi }}</td>
    <td>{{ $lbs->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $lbs->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $lbs->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Labuhanbatu Selatan</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif