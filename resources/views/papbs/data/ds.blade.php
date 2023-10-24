@if ($ds != null)
<tr>
    <td>{{ $ds->users->name }}</td>
    <td>{{ $ds->posisi }}</td>
    <td>{{ $ds->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $ds->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $ds->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Deli Serdang</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif